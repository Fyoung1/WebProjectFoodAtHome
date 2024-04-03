
<div wire:poll class="text-right">
    @if(session()->has('cart'))
        @foreach(session('cart') as $id => $details)
            <p>id {{$id}}}</p>
            <p>Название товара {{$details['name']}}</p>
            <p>Цена товара {{ $details['price'] }}</p>
            <p>Количество {{$details['quantity']}}</p>
            <button id="{{$id}}" wire:click="removeFromCart({{$id}})">Удалить из корзины</button>
        @endforeach
    @endif
</div>


