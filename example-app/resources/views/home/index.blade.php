@extends('layouts.app')


@section('content')
    <script src="/livewire/livewire.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Молоко и яйца</h1>
    <div class="firstProductOnPage"style="position:relative;left: 220px;top:40px;width: 65%;height: 300px; " >
    <button class="scroll-left">&lt;</button>
        <div class="milkproduc">
                <div class="scrollable-content">
                    @foreach ($MilkProducts as $MilkProduct)
                        <input type="hidden" value="{{ $MilkProduct->id }}" name="id">
                        <input type="hidden" value="{{ $MilkProduct->price }}" name="price">
                        <input type="hidden" value="{{ $MilkProduct->name }}" name="name">
                        <input type="hidden" value="{{ $MilkProduct->image }}"  name="image">
                        <input type="hidden" value="{{ $MilkProduct->description }}" name="description">
                        <img style="width: 125px;height: 125px;" src="{{ url($MilkProduct->image) }}" alt="" class="">
                        <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $MilkProduct->price }}₽</h2>
                        <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $MilkProduct->name}}  {{$MilkProduct->description }}</p>
                        <input type="hidden" value="1" name="quantity">
                        <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -140px;" id="{{$MilkProduct->id}}" onclick='myFunction(this.id)'>Нажми меня</button>
                    @endforeach
                </div>
        </div>
    <button class="scroll-right">&gt;</button>
    </div>
                <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Овощи и зелень</h1>
                        <div class="secondProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
                            <button class="scroll-left-vegetables">&lt;</button>
                            <div class="vegetablesproduct">
                                <div class="scrollable-content-vegetables">
                                    @foreach ($VegetablesProducts as $VegetablesProduct)
                                        <input type="hidden" value="{{ $VegetablesProduct->id }}" name="id">
                                        <input type="hidden" value="{{ $VegetablesProduct->price }}" name="price">
                                        <input type="hidden" value="{{ $VegetablesProduct->name }}" name="name">
                                        <input type="hidden" value="{{ $VegetablesProduct->image }}"  name="image">
                                        <input type="hidden" value="{{ $VegetablesProduct->description }}" name="description">
                                        <img style="width: 125px;height: 125px;" src="{{ url($VegetablesProduct->image) }}" alt="" class="">
                                        <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $VegetablesProduct->price }}₽</h2>
                                        <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $VegetablesProduct->name}}  {{$VegetablesProduct->description }}</p>
                                        <input type="hidden" value="1" name="quantity">
                                        <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -140px;" id="{{$VegetablesProduct->id}}" onclick='myFunction(this.id)'>Нажми меня</button>
                                    @endforeach
                                </div>
                            </div>
                            <button class="scroll-right-vegetables">&gt;</button>
                        </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Фрукты и ягоды</h1>
    <div class="thirdProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-vegetables">&lt;</button>
        <div class="vegetablesproduct">
            <div class="scrollable-content-vegetables">
                @foreach ($fruitsandberriesProducts as $FruitsAndBerries )
                    <input type="hidden" value="{{ $FruitsAndBerries->id }}" name="id">
                    <input type="hidden" value="{{ $FruitsAndBerries->price }}" name="price">
                    <input type="hidden" value="{{ $FruitsAndBerries->name }}" name="name">
                    <input type="hidden" value="{{ $FruitsAndBerries->image }}"  name="image">
                    <input type="hidden" value="{{ $FruitsAndBerries->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($FruitsAndBerries->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $FruitsAndBerries->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $FruitsAndBerries->name}}  {{$FruitsAndBerries->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -140px;" id="{{$FruitsAndBerries->id}}" onclick='myFunction(this.id)'>Нажми меня</button>
                @endforeach
            </div>
        </div>
        <button class="scroll-right-vegetables">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Сладости</h1>
    <div class="fourthProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-vegetables">&lt;</button>
        <div class="vegetablesproduct">
            <div class="scrollable-content-vegetables">
                @foreach ($CandyProducts as $CandyProduct )
                    <input type="hidden" value="{{ $CandyProduct->id }}" name="id">
                    <input type="hidden" value="{{ $CandyProduct->price }}" name="price">
                    <input type="hidden" value="{{ $CandyProduct->name }}" name="name">
                    <input type="hidden" value="{{ $CandyProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $CandyProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($CandyProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $CandyProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $CandyProduct->name}}  {{$CandyProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -140px;" id="{{$CandyProduct->id}}" onclick='myFunction(this.id)'>Нажми меня</button>
                @endforeach
            </div>
        </div>
        <button class="scroll-right-vegetables">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Мясо и птица</h1>
    <div class="fivethProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-vegetables">&lt;</button>
        <div class="vegetablesproduct">
            <div class="scrollable-content-vegetables">
                @foreach ($MeatAndBidrds as $MeatAndBirdProduct )
                    <input type="hidden" value="{{ $MeatAndBirdProduct->id }}" name="id">
                    <input type="hidden" value="{{ $MeatAndBirdProduct->price }}" name="price">
                    <input type="hidden" value="{{ $MeatAndBirdProduct->name }}" name="name">
                    <input type="hidden" value="{{ $MeatAndBirdProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $MeatAndBirdProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($MeatAndBirdProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $MeatAndBirdProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $MeatAndBirdProduct->name}}  {{$MeatAndBirdProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -140px;" id="{{$MeatAndBirdProduct->id}}" onclick='myFunction(this.id)'>Нажми меня</button>
                @endforeach
            </div>
        </div>
        <button class="scroll-right-vegetables">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Рыба и морепродукты</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-vegetables">&lt;</button>
        <div class="vegetablesproduct">
            <div class="scrollable-content-vegetables">
                @foreach ($FishProducts as $FishProduct )
                    <input type="hidden" value="{{ $FishProduct->id }}" name="id">
                    <input type="hidden" value="{{ $FishProduct->price }}" name="price">
                    <input type="hidden" value="{{ $FishProduct->name }}" name="name">
                    <input type="hidden" value="{{ $FishProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $FishProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($FishProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $FishProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $FishProduct->name}}  {{$FishProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -140px;" id="{{$FishProduct->id}}" onclick='myFunction(this.id)'>Нажми меня</button>
                @endforeach
            </div>
        </div>
        <button class="scroll-right-vegetables">&gt;</button>
    </div>



@endsection()

@section('cart')
    <script src="/livewire/livewire.js"></script>
    <div class="cart">
        <button id="clearCart" onclick='myFunctionСlear()'>Удалить корзину</button>
        <p class="nameCart">Корзина</p>
            <div class="showCart">
                <livewire:product />
            </div>
    </div>
@endsection()


<style>
    .cart
    {
        background: #463C54;
        width: 19%;
        height: 100%;
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

    .milkproduc
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .vegetablesproduct
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }

    .scrollable-content {
        display:flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-vegetables {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }

    button {
        margin: 5px;
    }

    .scroll-left
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-right {
        position: relative;
        top: -85px;
        right: auto;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
        float: right;
    }

    .scroll-left {
        left: 0;
    }

    .scroll-right {
        right: 0;
    }

    .scroll-left-vegetables
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-right-vegetables {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 415px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-left-vegetables {
        left: 0;
    }

    .scroll-right-vegetables {
        right: 0;
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.querySelector('.milkproduc');
        const container1 = document.querySelector('.vegetablesproduct');
        const scrollableContent = document.querySelector('.scrollable-content');
        const scrollableContent1 = document.querySelector('.scrollable-content-vegetables');
        const scrollLeftBtn = document.querySelector('.scroll-left');
        const scrollRightBtn = document.querySelector('.scroll-right');
        const scrollLeftBtn1 = document.querySelector('.scroll-left-vegetables');
        const scrollRightBtn1 = document.querySelector('.scroll-right-vegetables');

        scrollLeftBtn.addEventListener('click', () => {
            container.scrollBy({
                left: -150,
                behavior: 'smooth'
            });
        });

        scrollRightBtn.addEventListener('click', () => {
            container.scrollBy({
                left: 150,
                behavior: 'smooth'
            });
        });

        scrollLeftBtn1.addEventListener('click', () => {
            container1.scrollBy({
                left: -150,
                behavior: 'smooth'
            });
        });

        scrollRightBtn1.addEventListener('click', () => {
            container1.scrollBy({
                left: 150,
                behavior: 'smooth'
            });
        });
    });
</script>
