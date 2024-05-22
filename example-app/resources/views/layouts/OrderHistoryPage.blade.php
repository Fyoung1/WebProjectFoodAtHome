@extends('layouts.app')

@section('content')
    <div class="ShowOrderHistory" style="position: relative;left: 25%;max-width: 900px;margin-bottom: -15%;">
        <h1 style="position: relative;left: -5%;margin-top: 5%;">Ваша история заказов</h1>
        @php $count=0;@endphp
        @foreach ($OrderHistorys as $OrderHistory)
            <input type="hidden" value="{{ $OrderHistory->address }}" name="id">
            <input type="hidden" value="{{ $OrderHistory->id_orders }}" name="id">
            <input type="hidden" value="{{ $OrderHistory->created_at }}" name="id">
            @php $count++;@endphp
            <p style="position: relative;margin-top:10%;left:5%;margin-bottom: 6%;" >{{$count}} {{$OrderHistory->address}} {{$OrderHistory->created_at}}</p>
            <button style=" position:relative;height: 25px;margin-top:-10%;left: 70%;width: 20px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$OrderHistory->id_orders}}" onclick='myFunctionReceivOrderHistory(this.id)'>+</button>
        @endforeach
    </div>
    <div id="popup" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
        <div style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%;">
            <span id="popup-close" style="color: #aaaaaa; float: right; font-size: 28px; font-weight: bold;">×</span>
            <p id="popup-content"></p>
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
    /* Стили для всплывающего окна */
    #popup {
        display: none; /* Скрываем по умолчанию */
    }

    #popup-close {
        cursor: pointer; /* Меняем курсор при наведении */
    }
</style>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script type="text/javascript">
    document.getElementById('myButton').onclick = myFunctionReceivOrderHistory;

    function myFunctionReceivOrderHistory(id) {
        console.log(id);
        $.ajax({
            url: '/order-history/'+id,         /* Куда отправить запрос */
            method: 'get',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            data: {id:id},     /* Данные передаваемые в массиве */
            success: function(response){
                console.log("ID received in controller: ",response);
                if (response.hasOwnProperty("OrderHistoryIDs") && Array.isArray(response["OrderHistoryIDs"])) {
                    const orderHistoryIDs = response["OrderHistoryIDs"];
                    let html = "<ul>";
                    for (const item of orderHistoryIDs) {
                        if (item.hasOwnProperty("product") && item.hasOwnProperty("quantity")) {
                            const product = item["product"];
                            const quantity = item["quantity"];
                            html += `
              <li>
                <p>${quantity} x ${product}</p>
              </li>
            `;
                        } else {
                            console.error("Item does not have 'product' or 'quantity' property:", item);
                        }
                    }
                    html += "</ul>";

                    document.getElementById("popup-content").innerHTML = html;
                    // Отображаем всплывающее окно
                    document.getElementById("popup").style.display = "block";
                } else {
                    console.error("Response does not have 'OrderHistoryIDs' property or it is not an array:", response);
                }
                function closePopup() {
                    document.getElementById("popup").style.display = "none";
                }
                document.addEventListener("DOMContentLoaded", function() {
                    document.getElementById("popup-close").addEventListener("click", closePopup);
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Error occurred: " + textStatus + ", " + errorThrown);
            }
        });
    }
</script>


