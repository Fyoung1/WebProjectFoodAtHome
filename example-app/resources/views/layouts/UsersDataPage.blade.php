@extends('layouts.app')

@section('content')
    <div class="showUsersData" style="max-width: 900px;">
        <h2 style="position: relative;left:40%;margin-top:5%;">Ваши персональные данные: </h2>
        @foreach ($Users as $User)
            <input type="hidden" value="{{ $User->id }}" name="id">
            <input type="hidden" value="{{ $User->name }}" name="name">
            <input type="hidden" value="{{ $User->username }}" name="username">
            <input type="hidden" value="{{ $User->email }}"  name="email">
            <input type="hidden" value="{{ $User->password }}" name="password">
            <p style="position: relative;left:65%;margin-top: 5%;"><h3 style="position: relative;left:39%;margin-top: -2%;">Ваше имя и фамилия:</h3> {{ $User->name}}</p>
            <h3 style="position: relative;left:39%;margin-top: 10%; ">Ваш никнем:</h3>
            <p style="position: relative;left: 55%;margin-top: -4.5%;">{{$User->username}}</p>
            <h3 style="position: relative;left:39%;margin-top: 3%; ">Ваша электронная почта:</h3>
            <p style="position: relative;left: 65%;margin-top: -4.5%;">{{$User->email}}</p>
            @php
                if(empty($user->name)) {
            @endphp
            <div class="input-data">
                <input type="text" name="name" required>
                <div class="underline"></div>
                <label for=""></label>
            </div>
            @php
                }
            @endphp
            <p style="position: relative;left:30%;">{{   $User->created_at }}</p>
            <input type="hidden" value="1" name="quantity">
{{--            <button style="position: relative; border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{ $User->id}}" onclick='myFunction(this.id)'>+</button>--}}
        @endforeach
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

    .input-data {
        position: relative;
        margin-bottom: 20px;
        left: 60%;
        margin-top: -22%;
    }
    .input-data input {
        width: 25%;
        padding: 6px;
        outline: none;
        border: 2px solid #FFFFFF;
        border-bottom: 2px solid #888a85;
    }
    .input-data input:focus + .underline {
        transform: scaleX(1);
    }

    label {
        position: absolute;
        top: 10px;
        left: 0;
        color: #333;
        transition: top 0.3s, font-size 0.3s;
    }

    .input-data input:focus + .underline + label {
        top: -10px;
        font-size: 12px;
        color: #007bff;
    }
</style>
