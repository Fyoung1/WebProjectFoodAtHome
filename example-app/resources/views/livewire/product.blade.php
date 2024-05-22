
<div wire:poll>
    @if(session()->has('cart'))
        @php $this->totalPrice = 0; @endphp
        @foreach(session('cart') as $id => $details)
            <p style="position: relative;"> {{$details['name']}}</p>
            <p>Цена товара {{ $details['price'] }}</p>
            <button id="{{$id}}" style="position:relative;border:  0px solid #FFFFFF;color:#888a85;font-size: 32px;width: 25px;" wire:click="removeFromCart({{$id}})" >-</button>
            <p style="position: relative;top:-53px;left:30px;font-size: 20px;margin-bottom: -135px" >{{$details['quantity']}}</p>
            <button id="AddCart" style="position: relative;border:  0px solid #FFFFFF;color:#888a85;font-size: 32px;top:-19px;left:12%;" wire:click="AddCart({{$id}})">+</button>
            <img style="width: 100px;height: 100px;position: relative;right:-55%;top:-19px " src="{{ url($details['image']) }}" alt="" class="">
            @php $this->totalPrice+=$details['price']*$details['quantity']@endphp
        @endforeach
        @if($this->totalPrice!=0)
            <h3 style="position: fixed; bottom: -10px; right: -10px; background-color: white; padding: 10px;" >Стоимость {{$this->totalPrice}} Р</h3>
        @endif
        @if(empty(session('cart')))
            <img src="https://sun9-74.userapi.com/impg/StxwaPdr4l734sGN5Rtauaxaw9rw0-r2Tn-Inw/Ir52RvHesmk.jpg?size=1280x720&quality=96&sign=ae48d74493fd93132760b415fa524de3&c_uniq_tag=yJ81mjKv5AVHYimspQqViH_3l1ZjGfV0luJne0q8XGg&type=album" style="position:relative;left:25%;margin-top:20%;width: 180px;height: 180px;" >
            <h4 style="position: relative;left:20%;margin-top: -10%;">В вашей корзине пока пусто :(</h4>
        @endif
    @endif
</div>




