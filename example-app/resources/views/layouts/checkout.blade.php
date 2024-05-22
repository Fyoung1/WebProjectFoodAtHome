@extends('layouts.app')

<div style="position: relative;width: 1200px;height: 500px" class="checkout">
    <h1 style="position: relative; margin-top:8%;left: 25%;">Оформление заказа</h1>
    <form style="position: relative; margin-top:-3%;left: 25%;" class="formInputInfoGuest">
        <h3>Личные данные</h3>
        <div class="input-data">
            <input type="text" name="name" required>
            <div class="underline"></div>
            <label for="">Имя и фамилия</label>
        </div>
        <div class="input-data-second-table">
            <input type="text" name="phone" required>
            <div class="underline"></div>
            <label for="">Телефон</label>
        </div>
        <h3 class="text-address" >Адрес доставки: </h3>
        <div class="input-data-address">
            <input type="text" name="city" required>
            <div class="underline"></div>
            <label for="">Город</label>
        </div>
        <div class="input-data-address">
            <input type="text" name="street" required>
            <div class="underline"></div>
            <label for="">Улица</label>
        </div>
        <div class="input-data-address-second-table">
            <input type="text" name="Entrance" required>
            <div class="underline"></div>
            <label for="">Подьезд</label>
        </div>
        <div class="input-data-address-second-table">
            <input type="text" name="apartment" required>
            <div class="underline"></div>
            <label for="">Квартира</label>
        </div>
    </form>
        <h3 style="position: relative;left:28%;">Способ оплаты</h3>
        <button style="position:relative;border-radius: 10px;height: 30px;width: 150px;background: #1d2124;color: #FFFFFF;left:28%;" onclick="showCardForm()">Оплата картой</button>
        <button style="position: relative;border-radius: 10px;height: 30px;width: 150px;background: #1d2124;color: #FFFFFF;left:28%;" onclick="showMoneyForm()">Наличные</button>
        <div id="cardForm" style="position: relative; display:none;left:28%;top:4%;border-radius: 10px;border: 2px solid #888a85;color:#888a85;width: 25%;height: 30%;">
                <div class="input-number-card">
                    <input type="text" name="Number card" required>
                    <div style="" class="underline"></div>
                    <label for="">Номер карты</label>
                </div>
                <div class="input-expiration-date">
                    <input type="text" name="Expiration date" required>
                    <div style="position:relative;" class="underline"></div>
                    <label for="">мм</label>
                </div>
            <h2 style="position: relative;left:24%;top:-15%;color: #1d2124;">/</h2>
                <div class="input-expiration-date" style="position: relative;top:-52%;left:30%;">
                    <input type="text" name="Expiration-date" required>
                    <div class="underline"></div>
                    <label for="">гг</label>
                </div>
            <div class="input-code">
                <input type="text" name="code" required>
                <div class="underline"></div>
                <label for="">Код</label>
            </div>

        </div>
        <div id="moneyForm" style="display: none">
            <p style="position: relative;left:28%;margin-top:3%;">Укажите сумму сдачи</p>
            <div class="input-moneyback">
                <input type="text" name="code" required>
                <div class="underline"></div>
                <label for=""></label>
            </div>
            <p style="position: relative;left:46%;margin-top:-3.3%;">Р</p>
        </div>

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
        <button id="ButtonCart" style="margin-left: 80%;top: 96%;position: fixed;border-radius: 10px;height: 30px;width: 200px;background: #1d2124;color: #FFFFFF" onclick="myFunctionOrder()" >Оформить заказ</button>
        @auth
            <button id="ButtonCart" style="margin-left: 80%;top: 96%;position: fixed;border-radius: 10px;height: 30px;width: 200px;background: #1d2124;color: #FFFFFF" onclick="myFunctionOrderAuth()" >Оформить заказ</button>
        @endauth
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
    .formInputInfoGuest {
        width: 50%;
        padding: 20px;
    }

    h3 {
        margin: 10px 0;
    }

    .input-number-card
    {
        position: relative;
        margin-bottom: 20px;
        left:15%;
        top:13%;
    }
    .input-number-card input {
        width: 60%;
        padding: 6px;
        border: 2px solid #FFFFFF; /* цвет и толщина границы */
        /*border-bottom: 2px solid #888a85;*/
        border-radius: 1px; /* радиус закругления углов */
        outline: none;
    }
    .input-number-card input:focus + .underline {
        transform: scaleX(1);
    }

    label {
        position: absolute;
        top: 10px;
        left: 0;
        color: #333;
        transition: top 0.3s, font-size 0.3s;
    }

    .input-number-card input:focus + .underline + label {
        top: -10px;
        font-size: 12px;
        color: #888a85;
    }

    .input-expiration-date
    {
        position: relative;
        margin-bottom: 20px;
        left:15%;
        top:13%;
    }

    .input-expiration-date input
    {
        width: 12%;
        padding: 6px;
        border: 2px solid #FFFFFF; /* цвет и толщина границы */
        /*border-bottom: 2px solid #FFFFFF;*/
        border-radius: 1px; /* радиус закругления углов */
        outline: none;
    }

    .input-expiration-date  input:focus + .underline {
        transform: scaleX(1);
    }

    label {
        position: absolute;
        top: 10px;
        left: 0;
        color: #333;
        transition: top 0.3s, font-size 0.3s;
    }

    .input-expiration-date input:focus + .underline + label {
        top: -10px;
        font-size: 12px;
        color: #888a85;
    }

    .input-code
    {
        position: relative;
        margin-bottom: 20px;
        left:68%;
        top:-85%;
    }

    .input-code input {
        width: 20%;
        padding: 6px;
        border: 2px solid #FFFFFF; /* цвет и толщина границы */
        /*border-bottom: 2px solid #888a85;*/
        border-radius: 1px; /* радиус закругления углов */
        outline: none;
    }
    .input-code input:focus + .underline {
        transform: scaleX(1);
    }

    label {
        position: absolute;
        top: 10px;
        left: 0;
        color: #333;
        transition: top 0.3s, font-size 0.3s;
    }

    .input-code input:focus + .underline + label {
        top: -10px;
        font-size: 12px;
        color: #888a85;
    }

    .input-moneyback
    {
        position: relative;
        margin-bottom: 20px;
        left:41%;
        margin-top: -3.7%;
    }

    .input-moneyback input {
        width: 5%;
        padding: 6px;
        border: 2px solid #FFFFFF; /* цвет и толщина границы */
        border-bottom: 2px solid #888a85;
        border-radius: 1px; /* радиус закругления углов */
        outline: none;
    }
    .input-moneyback input:focus + .underline {
        transform: scaleX(1);
    }

    label {
        position: absolute;
        top: 10px;
        left: 0;
        color: #333;
        transition: top 0.3s, font-size 0.3s;
    }

    .input-moneyback input:focus + .underline + label {
        top: -10px;
        font-size: 12px;
        color: #888a85;
    }




    .input-data {
        position: relative;
        margin-bottom: 20px;
    }

    .input-data-second-table{
        position: relative;
        left:45%;
        top:-52px;
        margin-bottom: 20px;
    }

    .input-data-second-table input  {
        width: 40%;
        padding: 6px;
        border: 2px solid #888a85; /* цвет и толщина границы */
        border-radius: 5px; /* радиус закругления углов */
        outline: none;
    }

    .input-data input {
        width: 40%;
        padding: 6px;
        border: 2px solid #888a85; /* цвет и толщина границы */
        border-radius: 5px; /* радиус закругления углов */
        outline: none;
    }

    .input-data-second-table input:focus + .underline {
        transform: scaleX(1);
    }

    .input-data-second-table input:focus + .underline + label {
        top: -10px;
        font-size: 12px;
        color: #007bff;
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

    .text-address {
        margin-top: 20px;
    }

    .input-data-address-second-table {
        position: relative;
        margin-bottom: 20px;
        width: 40%;
        left: 45%;
        top: -105px;
        border: 2px solid #888a85; /* цвет и толщина границы */
        border-radius: 5px; /* радиус закругления углов */
        outline: none;
    }
    .input-data-address-second-table input {
        padding: 7px;
        border: none;
        /*border-bottom: 0px solid #ccc;*/
        outline: none;
    }

    .input-data-address-second-table input:focus + .underline {
        transform: scaleX(1);
    }

    .input-data-address-second-table label {
        position: absolute;
        top: 10px;
        left: 0;
        color: #333;
        transition: top 0.3s, font-size 0.3s;
    }

    .input-data-address-second-table input:focus + .underline + label {
        top: -1px;
        font-size: 12px;
        color: #888a85;
    }


    .input-data-address {
        position: relative;
        margin-bottom: 20px;
        width: 40%;
        top: 4px;
        border: 2px solid #888a85; /* цвет и толщина границы */
        border-radius: 5px; /* радиус закругления углов */
        outline: none;
    }

    .input-data-address input {
        padding: 7px;
        border: none;
        outline: none;
    }

    .input-data-address input:focus + .underline {
        transform: scaleX(1);
    }

    .input-data-address label {
        position: absolute;
        top: 10px;
        left: 0;
        color: #333;
        transition: top 0.3s, font-size 0.3s;
    }

    .input-data-address input:focus + .underline + label {
        top: -1px;
        font-size: 12px;
        color: #888a85;
    }

</style>
    <script> function showCardForm() { document.getElementById('cardForm').style.display = 'block'; document.getElementById('moneyForm').style.display = 'none'; }
        function showMoneyForm() { document.getElementById('cardForm').style.display = 'none'; document.getElementById('moneyForm').style.display = 'block'; }
    </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    const form = document.querySelector('.formInputInfoGuest');

    function myFunctionOrder() {
        const formData = new FormData(form);

        const name = formData.get('name');
        const phone = formData.get('phone');
        const city = formData.get('city');
        const street = formData.get('street');
        const house = formData.get('Entrance');
        const apartment = formData.get('apartment');

        console.log(name, phone, city, street, house, apartment);

        $.ajax({
            url: '/add-to-base-order-guest/',         /* Куда отправить запрос */
            method: 'get',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            data: {
                name:name,
                phone:phone,
                city:city,
                street:street,
                house:house,
                apartment:apartment
            },     /* Данные передаваемые в массиве */
            success: function(response){   /* функция которая будет выполнена после успешного запроса.  */
                console.log("Success:", response);
                window.location.href = '/';
            }
        });

        console.log('dsds');
    }

    function myFunctionOrderAuth() {
        const formData = new FormData(form);

        const name = formData.get('name');
        const phone = formData.get('phone');
        const city = formData.get('city');
        const street = formData.get('street');
        const house = formData.get('Entrance');
        const apartment = formData.get('apartment');

        console.log(name, phone, city, street, house, apartment);

        $.ajax({
            url: '/add-to-base-order-auth/',         /* Куда отправить запрос */
            method: 'get',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            data: {
                name:name,
                phone:phone,
                city:city,
                street:street,
                house:house,
                apartment:apartment
            },     /* Данные передаваемые в массиве */
            success: function(response){   /* функция которая будет выполнена после успешного запроса.  */
                console.log("Success:", response);
                window.location.href = '/';
            }
        });

        console.log('dsds');
    }




    document.addEventListener('DOMContentLoaded', function() {
        // Вызываем функцию при событии submit формы
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Предотвращаем отправку формы
        });
    });
</script>

<script>
    function myFunctionClear1(id) {
        Livewire.emit('removeFromCart', id);
    }
</script>
