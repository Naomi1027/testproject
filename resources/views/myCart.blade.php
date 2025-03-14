<x-app-layout>
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">
            {{ Auth::user()->name }}さんのカートの中身</h1>
                <p class="text-center">{{ $message ?? '' }}</p><br>
                <div class="">             
                    @foreach($myCartStocks as $stock)
                        <div class="text-center rounded shadow-lg bg-white p-6 m-4">
                        {{$stock->stock->name}} <br>                                
                        {{ number_format($stock->stock->fee)}}円 <br>
                            <div class="incart flex justify-center p-4 m-4">
                            <img src="../storage/img/{{$stock->stock->imagePath}}" alt=""  width="600">
                            </div>
                            <form action="deleteMyCartStock" method="post">
                                @csrf
                                <input type="hidden" name="stockId" value="{{ $stock->stock->id }}">
                                <button class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 m-2 rounded ">カートから削除する</button>
                            </form>
                        </div>
                    @endforeach
                    @if($myCartStocks->isNotEmpty())
                        <div>
                            <button onclick="location.href='{{ route('stock.checkout') }}'" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-2 rounded ">購入</button>
                        </div>
                    @endif
                    {{-- 追加 --}}  
                    @if($myCartStocks->isEmpty())
                       <p class="text-center">カートはからっぽです。</p>
                    @endif
                    

                </div>
            </div>
    </div>
</x-app-layout>
