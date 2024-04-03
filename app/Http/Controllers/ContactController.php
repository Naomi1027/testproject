<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //フォーム入力画ページのviewを表示
        return view('contact');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
             'email' => ['required','email'],
             'content' => 'max:4000'
         ]);

      $inputs = $request->all();
        if(!$inputs){
            return redirect()->route('index');
        }
        
        return view('confirm',[
            'inputs' => $inputs
        ]);
    }

    public function send(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //      'email' => ['required','email'],
        //      'messgae' => 'max:4000'
        //     ]);
        $inputs = request()->validate([
            'name' => 'required',
             'email' => ['required','email'],
             'content' => 'max:4000'
            ]);
        // $inputs = $request->all();
        // if(!$inputs){
        //     return redirect()->route('index');
        // }
        
         \Mail::to('naomimotomura27@gmail.com')->send(new ContactSendMail($inputs));

         $request->session()->regenerateToken(); //2回メール送信を防ぐため

         // 送信完了ページのviewを表示
        return view('thanks',[
            'inputs' => $inputs
        ]);
    }
}