@extends('layouts.app')

@section('content')
<div class="showFavorites">
    <h1 style="position: relative;top:-100px" >Ваши избранное</h1>
    <div class="FavoritesProduct">
        @foreach ($FavoritesProducts as $FavoritesProduct)
            <input type="hidden" value="{{ $FavoritesProduct->id }}" name="id">
            <input type="hidden" value="{{ $FavoritesProduct->price }}" name="price">
            <input type="hidden" value="{{ $FavoritesProduct->name }}" name="name">
            <input type="hidden" value="{{ $FavoritesProduct->image }}"  name="image">
            <input type="hidden" value="{{ $FavoritesProduct->description }}" name="description">
            <img style="width: 125px;height: 125px;margin-top: 5%;" src="{{ url($FavoritesProduct->image) }}" alt="" class="">
            <h2 style="position: relative;margin-top:19%;right: 10%;width:10px" >{{ $FavoritesProduct->price }}₽</h2>
            <p style="position: relative;width: 1%;margin-top:22%;right: 11%;display: flex;">{{ $FavoritesProduct->name}}  {{$FavoritesProduct->description }}</p>
            <input type="hidden" value="1" name="quantity">
            <button style="position: relative; height:10px; top:315px;left: -10%;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$FavoritesProduct->id}}" onclick='myFunction(this.id)'>+</button>
        @endforeach
    </div>
</div>
@endsection

@section('cart')
    <div class="cartHeader" style="position: fixed;left:80%;top:10%;  display: flex;z-index: 1000;" >
        <img src="{{ asset('image/shopping-cart_2169842.png') }}" style="position: relative;width: 30px;height: 30px;margin-top:7%;left:-4%;" alt="My Image">
        <h2 class="nameCart" style="" >Корзина</h2>
        <button id="clearCart" onclick='myFunctionСlear()' style="width: 70px;height: 25px;margin-left: 75%;margin-top: 15%;border: 0px solid #FFFFFF;color:#888a85; " >Очистить</button>
    </div>
    <div class="cart">
        <div class="showCart">
            <livewire:product />
        </div>
    </div>
    <form action={{'/checkout'}}>
        <button style="margin-left: 80%;top: 95%;position: fixed;border-radius: 10px;height: 30px;width: 200px;background: #1d2124;color: #FFFFFF" type="submit" id="ButtonCart" >Все верно,к оплате</button>
    </form>
@endsection

<style>

    .showFavorites
    {
        position: relative;
        max-width: 60%;
        top:15%;
        left: 15%;
    }
    .FavoritesProduct
    {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        top:-150px;
    }
    .cart
    {
        background: #FFFFFF;
        width: 19%;
        height: 75%;
        margin-left: 80%;
        top: 17%;
        position: fixed;
        overflow: auto;
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;
    }
    .cart::-webkit-scrollbar {
        display: none;
    }

</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
    document.getElementById('myButton').onclick = myFunction;
    function myFunction(id) {
        $.ajax({
            url: '/add-to-cart/'+id,         /* Куда отправить запрос */
            method: 'get',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            data: {id:id},     /* Данные передаваемые в массиве */
            success: function(response){   /* функция которая будет выполнена после успешного запроса.  */
            }
        });
    }

    function myFunctionСlear() {
        console.log('dsds');
        $.ajax({
            url: '/clear-cart/',         /* Куда отправить запрос */
            method: 'get',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            /* Данные передаваемые в массиве */
            success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
            }
        });

    }

</script>
<script>
    function myFunctionClear1(id) {
        Livewire.emit('removeFromCart', id);
    }
</script>
