<?php

namespace App\Http\Controllers;

use App\Models\Stock; //追加
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Http\Request;
use App\Models\UserStock; //追加

class StockController extends Controller
{
   public function index() //追加
   {
    $stocks = Stock::SimplePaginate(8); //Eloquantで検索
    return view('stocks',compact('stocks')); //追記変更
   }

   public function myCart(UserStock $userStock)
   {
       $myCartStocks = $userStock->showMyCart();
       return view('myCart',compact('myCartStocks'));
   }

   public function addMycart(Request $request,UserStock $userStock)
   {

       //カートに追加の処理
       $stockId = $request->stockId;
       $message = $userStock->addMyCart($stockId);

       //追加後の情報を取得
       $myCartStocks = $userStock->showMyCart();

       return view('myCart',compact('myCartStocks' , 'message'));

   }

   public function deleteMyCartStock(Request $request,UserStock $userStock)
   {

       //カートから削除の処理
       $stockId = $request->stockId;
       $message = $userStock->deleteMyCartStock($stockId);

       //追加後の情報を取得
       $myCartStocks = $userStock->showMyCart();

       return view('myCart',compact('myCartStocks' , 'message'));

   }
   public function checkout(UserStock $userStock)
   {
    $userId = Auth::id();
    $myCartStocks = UserStock::where('userId',$userId)->with('stock')->get();

    $lineItems = [];
    foreach($myCartStocks as $myCartStock){
        $lineItem = [
            'name' => $myCartStock->stock->name,
            'description' => $myCartStock->stock->explain,
            'amount' => $myCartStock->stock->fee,
            'currency' => 'jpy',
            'quantity' => 1
        ];
        array_push($lineItems, $lineItem);
    }
    // dd($lineItems);

    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
 
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'unit_amount' => $myCartStock->stock->fee,
                'currency' => 'JPY',
                'product_data' => [
                    'name' => $myCartStock->stock->name,
                    'description' => $myCartStock->stock->explain,
            ],
        ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('stock.success'),
        'cancel_url' => route('stock.myCart'),
    ]);
 
    $publicKey = env('STRIPE_PUBLIC_KEY');
 
    return view(
        'checkout',
        compact('session', 'publicKey')
    );
   }

   public function success()
   {
    $userId = Auth::id(); 
    UserStock::where('userId', $userId)->delete();

    return redirect()->route('stock.index');
   }

}
