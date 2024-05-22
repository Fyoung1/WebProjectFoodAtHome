@extends('layouts.app')


@section('content')
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Молоко и яйца</h1>
    <div class="firstProductOnPage"style="position:relative;left: 220px;top:40px;width: 65%;height: 300px; " >
    <button class="scroll-left" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px" >&lt;</button>
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
                        <p style="position: relative;top: 63%;height: 35px;width: 40%;left: -50px">{{ $MilkProduct->name}}  {{$MilkProduct->description }}</p>
                        <input type="hidden" value="1" name="quantity">
                        <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$MilkProduct->id}}" onclick='myFunction(this.id)'>+</button>
                        @auth
                            <button style=" position:relative;top: 103%;height: 25px;width: 20%;left: -120px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$MilkProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                                <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                            </button>
                        @endauth
                    @endforeach
                </div>
        </div>
    <button style="margin-right: 10%;top:-235px;border: 0px solid #FFFFFF;color:#888a85;font-size: 35px" class="scroll-right">&gt;</button>
    </div>
                <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Овощи и зелень</h1>
                        <div class="secondProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
                            <button class="scroll-left-vegetables" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
                            <div class="vegetablesproduct">
                                <div class="scrollable-content-vegetables">
                                    @foreach ($VegetablesProducts as $VegetablesProduct)
                                        <input type="hidden" value="{{ $VegetablesProduct->id }}" name="id">
                                        <input type="hidden" value="{{ $VegetablesProduct->price }}" name="price">
                                        <input type="hidden" value="{{ $VegetablesProduct->name }}" name="name">
                                        <input type="hidden" value="{{ $VegetablesProduct->image }}"  name="image">
                                        <input type="hidden" value="{{ $VegetablesProduct->description }}" name="description">
                                        <img style="width: 125px;height: 125px;margin-right: 10px" src="{{ url($VegetablesProduct->image) }}" alt="" class="">
                                        <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $VegetablesProduct->price }}₽</h2>
                                        <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $VegetablesProduct->name}}  {{$VegetablesProduct->description }}</p>
                                        <input type="hidden" value="1" name="quantity">
                                        <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -105px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$VegetablesProduct->id}}" onclick='myFunction(this.id)'>+</button>
                                        @auth
                                            <button style=" position:relative;top: 92%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$VegetablesProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                                                <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                                            </button>
                                        @endauth
                                    @endforeach
                                </div>
                            </div>
                            <button class="scroll-right-vegetables" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
                        </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Фрукты и ягоды</h1>
    <div class="thirdProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-fruitsandberries" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px" >&lt;</button>
        <div class="fruitsandberries">
            <div class="scrollable-content-fruitsandberries">
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
                    <button style=" position:relative;top: 90%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$FruitsAndBerries->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 92%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$FruitsAndBerries->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-fruitsandberries" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Сладости</h1>
    <div class="fourthProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-candy" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
        <div class="candy">
            <div class="scrollable-content-candy">
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
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -100px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$CandyProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 102%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$CandyProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-candy" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Мясо и птица</h1>
    <div class="fivethProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-meatandbirds" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
        <div class="meatandbirds">
            <div class="scrollable-content-meatandbirds">
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
                    <button style=" position:relative;top: 95%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$MeatAndBirdProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 98%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$MeatAndBirdProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-meatandbirds" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Рыба и морепродукты</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-fish" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px" >&lt;</button>
        <div class="fish">
            <div class="scrollable-content-fish">
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
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$FishProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 103%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$FishProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-fish" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px" >&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Заморозка</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-freezing" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px" >&lt;</button>
        <div class="freezing">
            <div class="scrollable-content-freezing">
                @foreach ($FreezingProducts as $FreezingProduct )
                    <input type="hidden" value="{{ $FreezingProduct->id }}" name="id">
                    <input type="hidden" value="{{ $FreezingProduct->price }}" name="price">
                    <input type="hidden" value="{{ $FreezingProduct->name }}" name="name">
                    <input type="hidden" value="{{ $FreezingProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $FreezingProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($FreezingProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $FreezingProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $FreezingProduct->name}}  {{$FreezingProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px; " id="{{$FreezingProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 103%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$FreezingProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-freezing" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Вода и напитки</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-wateranddrinks" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
        <div class="wateranddrinks">
            <div class="scrollable-content-wateranddrinks">
                @foreach ($WaterAndDrinksProducts as $WaterAndDrinksProduct )
                    <input type="hidden" value="{{ $WaterAndDrinksProduct->id }}" name="id">
                    <input type="hidden" value="{{ $WaterAndDrinksProduct->price }}" name="price">
                    <input type="hidden" value="{{ $WaterAndDrinksProduct->name }}" name="name">
                    <input type="hidden" value="{{ $WaterAndDrinksProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $WaterAndDrinksProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($WaterAndDrinksProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $WaterAndDrinksProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $WaterAndDrinksProduct->name}}  {{$WaterAndDrinksProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px; " id="{{$WaterAndDrinksProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 103%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$WaterAndDrinksProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-wateranddrinks" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Колбасы и сосиски</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-sausages" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
        <div class="sausages">
            <div class="scrollable-content-sausages">
                @foreach ($SausagesProducts as $SausagesProduct )
                    <input type="hidden" value="{{ $SausagesProduct->id }}" name="id">
                    <input type="hidden" value="{{ $SausagesProduct->price }}" name="price">
                    <input type="hidden" value="{{ $SausagesProduct->name }}" name="name">
                    <input type="hidden" value="{{ $SausagesProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $SausagesProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($SausagesProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $SausagesProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $SausagesProduct->name}}  {{$SausagesProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px; " id="{{$SausagesProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 103%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$SausagesProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-sausages" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Хлеб и выпечка</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-bread" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
        <div class="bread">
            <div class="scrollable-content-bread">
                @foreach ($BreadProducts as $BreadProduct )
                    <input type="hidden" value="{{ $BreadProduct->id }}" name="id">
                    <input type="hidden" value="{{ $BreadProduct->price }}" name="price">
                    <input type="hidden" value="{{ $BreadProduct->name }}" name="name">
                    <input type="hidden" value="{{ $BreadProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $BreadProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;margin-right: 10px;" src="{{ url($BreadProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -70px;margin-right: -60px" >{{ $BreadProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: 10px">{{ $BreadProduct->name}}  {{$BreadProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -60px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$BreadProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 103%;height: 25px;width: 20%;left: -70px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$BreadProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-bread" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Сыры</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-cheese" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
        <div class="cheese">
            <div class="scrollable-content-cheese">
                @foreach ($CheeseProducts as $CheeseProduct )
                    <input type="hidden" value="{{ $CheeseProduct->id }}" name="id">
                    <input type="hidden" value="{{ $CheeseProduct->price }}" name="price">
                    <input type="hidden" value="{{ $CheeseProduct->name }}" name="name">
                    <input type="hidden" value="{{ $CheeseProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $CheeseProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($CheeseProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $CheeseProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -50px">{{ $CheeseProduct->name}}  {{$CheeseProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$CheeseProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 103%;height: 25px;width: 20%;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$CheeseProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-cheese" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
    <h1 style="position: relative; top:40px ; left: 280px;width: 20%">Макароны и крупы</h1>
    <div class="sixtsProductOnPage" style="position:relative;left: 220px;top:40px;width: 65%;height: 300px;">
        <button class="scroll-left-pastaandcereals" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&lt;</button>
        <div class="pastaandcereals">
            <div class="scrollable-content-pastaandcereals">
                @foreach ($PastaAndCerealsProducts as $PastaAndCerealsProduct )
                    <input type="hidden" value="{{ $PastaAndCerealsProduct->id }}" name="id">
                    <input type="hidden" value="{{ $PastaAndCerealsProduct->price }}" name="price">
                    <input type="hidden" value="{{ $PastaAndCerealsProduct->name }}" name="name">
                    <input type="hidden" value="{{ $PastaAndCerealsProduct->image }}"  name="image">
                    <input type="hidden" value="{{ $PastaAndCerealsProduct->description }}" name="description">
                    <img style="width: 125px;height: 125px;" src="{{ url($PastaAndCerealsProduct->image) }}" alt="" class="">
                    <h2 style="position: relative;top: 45%;height: 35px;width: 20%;margin-left: -110px;" >{{ $PastaAndCerealsProduct->price }}₽</h2>
                    <p style="position: relative;top: 63%;height: 45px;width: 20%;left: -35px">{{ $PastaAndCerealsProduct->name}}  {{$PastaAndCerealsProduct->description }}</p>
                    <input type="hidden" value="1" name="quantity">
                    <button style=" position:relative;top: 100%;height: 25px;width: 20%;left: -90px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$PastaAndCerealsProduct->id}}" onclick='myFunction(this.id)'>+</button>
                    @auth
                        <button style=" position:relative;top: 103%;height: 25px;width: 20px;left: -110px;border: 0px solid #FFFFFF;color:#1d2124;font-size: 30px;" id="{{$PastaAndCerealsProduct->id}}" onclick='myFunctionAddFavorites(this.id)'>
                            <img src="{{ asset('image/heart_1077035.png') }}" style="position:relative;height: 20px;width: 20px;" alt="My Image">
                        </button>
                    @endauth
                @endforeach
            </div>
        </div>
        <button class="scroll-right-pastaandcereals" style="border: 0px solid #FFFFFF;color:#888a85;font-size: 35px">&gt;</button>
    </div>
@endsection()

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
@endsection()


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

    .fruitsandberries
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .candy
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .meatandbirds
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .fish
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .freezing
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .wateranddrinks
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .sausages
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .bread
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .cheese
    {
        position: relative;
        display: flex;
        width: 80%;
        height: 100%;
        overflow: hidden;
        left: 5%;
        top: -40px;
    }
    .pastaandcereals
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
    .scrollable-content-fruitsandberries {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-candy {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-meatandbirds {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-fish {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-freezing {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-wateranddrinks {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-sausages {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-bread {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-cheese {
        display: flex;
        width: max-content;
        height: 250px;
        transition: transform 0.3s ease-in-out;
    }
    .scrollable-content-pastaandcereals {
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
        margin-right: 10%;
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

    .scroll-left-fruitsandberries
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-fruitsandberries {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-fruitsandberries {
        left:0;
    }

    .scroll-right-fruitsandberries {
    right: 0;
    }
    .scroll-left-candy
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-candy {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-candy {
        left:0;
    }

    .scroll-right-candy {
        right: 0;
    }
    .scroll-left-meatandbirds
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-meatandbirds {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-meatandbirds {
        left:0;
    }

    .scroll-right-meatandbirds {
        right: 0;
    }
    .scroll-left-fish
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-fish {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-fish {
        left:0;
    }

    .scroll-right-fish {
        right: 0;
    }
    .scroll-left-freezing
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-freezing {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-freezing {
        left:0;
    }

    .scroll-right-freezing {
        right: 0;
    }
    .scroll-left-wateranddrinks
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-wateranddrinks {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-wateranddrinks {
        left:0;
    }

    .scroll-right-wateranddrinks {
        right: 0;
    }
    .scroll-left-sausages
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-sausages {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-sausages {
        left:0;
    }

    .scroll-right-sausages {
        right: 0;
    }
    .scroll-left-bread
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-bread {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-bread {
        left:0;
    }

    .scroll-right-bread {
        right: 0;
    }

    .scroll-left-cheese
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-cheese {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-cheese {
        left:0;
    }

    .scroll-right-cheese {
        right: 0;
    }
    .scroll-left-pastaandcereals
    {
        position: relative;
        top: 106px;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }

    .scroll-right-pastaandcereals {
        position: relative;
        float: right;
        top: -216px;
        margin-right: 10%;
        transform: translateY(-50%);
        padding: 5px;
        font-size: 20px;
    }
    .scroll-left-pastaandcereals {
        left:0;
    }

    .scroll-right-pastaandcereals {
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

        function  myFunctionAddFavorites(id)
        {
            console.log('add');
            $.ajax({
                url: '/add-favorites/'+id,         /* Куда отправить запрос */
                method: 'get',             /* Метод запроса (post или get) */
                dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
                data: {id:id},     /* Данные передаваемые в массиве */
                success: function(response){   /* функция которая будет выполнена после успешного запроса.  */
                    alert(response.message);
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
        const container2 = document.querySelector('.fruitsandberries');
        const container3 = document.querySelector('.candy');
        const container4 = document.querySelector('.meatandbirds');
        const container5 = document.querySelector('.fish');
        const container6 = document.querySelector('.freezing');
        const container7 = document.querySelector('.wateranddrinks');
        const container8 = document.querySelector('.sausages');
        const container9 = document.querySelector('.bread');
        const container10 = document.querySelector('.cheese');
        const container11 = document.querySelector('.pastaandcereals');
        const scrollableContent = document.querySelector('.scrollable-content');
        const scrollableContent1 = document.querySelector('.scrollable-content-vegetables');
        const scrollableContent2 = document.querySelector('.scrollable-content-fruitsandberries');
        const scrollableContent3 = document.querySelector('.scrollable-content-candy');
        const scrollableContent4 = document.querySelector('.scrollable-content-meatandbirds');
        const scrollableContent5 = document.querySelector('.scrollable-content-fish');
        const scrollableContent6 = document.querySelector('.scrollable-content-freezing');
        const scrollableContent7 = document.querySelector('.scrollable-content-wateranddrinks');
        const scrollableContent8 = document.querySelector('.scrollable-content-sausages');
        const scrollableContent9 = document.querySelector('.scrollable-content-bread');
        const scrollableContent10 = document.querySelector('.scrollable-content-cheese');
        const scrollableContent11 = document.querySelector('.scrollable-content-pastaandcereals');
        const scrollLeftBtn = document.querySelector('.scroll-left');
        const scrollRightBtn = document.querySelector('.scroll-right');
        const scrollLeftBtn1 = document.querySelector('.scroll-left-vegetables');
        const scrollRightBtn1 = document.querySelector('.scroll-right-vegetables');
        const scrollLeftBtn2 = document.querySelector('.scroll-left-fruitsandberries');
        const scrollRightBtn2 = document.querySelector('.scroll-right-fruitsandberries');
        const scrollLeftBtn3 = document.querySelector('.scroll-left-candy');
        const scrollRightBtn3 = document.querySelector('.scroll-right-candy');
        const scrollLeftBtn4 = document.querySelector('.scroll-left-meatandbirds');
        const scrollRightBtn4 = document.querySelector('.scroll-right-meatandbirds');
        const scrollLeftBtn5 = document.querySelector('.scroll-left-fish');
        const scrollRightBtn5 = document.querySelector('.scroll-right-fish');
        const scrollLeftBtn6 = document.querySelector('.scroll-left-freezing');
        const scrollRightBtn6 = document.querySelector('.scroll-right-freezing');
        const scrollLeftBtn7 = document.querySelector('.scroll-left-wateranddrinks');
        const scrollRightBtn7 = document.querySelector('.scroll-right-wateranddrinks');
        const scrollLeftBtn8 = document.querySelector('.scroll-left-sausages');
        const scrollRightBtn8 = document.querySelector('.scroll-right-sausages');
        const scrollLeftBtn9 = document.querySelector('.scroll-left-bread');
        const scrollRightBtn9 = document.querySelector('.scroll-right-bread');
        const scrollLeftBtn10 = document.querySelector('.scroll-left-cheese');
        const scrollRightBtn10 = document.querySelector('.scroll-right-cheese');
        const scrollLeftBtn11 = document.querySelector('.scroll-left-pastaandcereals');
        const scrollRightBtn11 = document.querySelector('.scroll-right-pastaandcereals');

        scrollLeftBtn.addEventListener('click', () => {
            container.scrollBy({
                left: -185,
                behavior: 'smooth'
            });
        });

        scrollRightBtn.addEventListener('click', () => {
            container.scrollBy({
                left: 185,
                behavior: 'smooth'
            });
        });

        scrollLeftBtn1.addEventListener('click', () => {
            container1.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn1.addEventListener('click', () => {
            container1.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn2.addEventListener('click', () => {
            container2.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn2.addEventListener('click', () => {
            container2.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn3.addEventListener('click', () => {
            container3.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn3.addEventListener('click', () => {
            container3.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn4.addEventListener('click', () => {
            container4.scrollBy({
                left: -215,
                behavior: 'smooth'
            });
        });

        scrollRightBtn4.addEventListener('click', () => {
            container4.scrollBy({
                left: 215,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn5.addEventListener('click', () => {
            container5.scrollBy({
                left: -210,
                behavior: 'smooth'
            });
        });

        scrollRightBtn5.addEventListener('click', () => {
            container5.scrollBy({
                left: 210,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn6.addEventListener('click', () => {
            container6.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn6.addEventListener('click', () => {
            container6.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn7.addEventListener('click', () => {
            container7.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn7.addEventListener('click', () => {
            container7.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn8.addEventListener('click', () => {
            container8.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn8.addEventListener('click', () => {
            container8.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn9.addEventListener('click', () => {
            container9.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn9.addEventListener('click', () => {
            container9.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn10.addEventListener('click', () => {
            container10.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn10.addEventListener('click', () => {
            container10.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });
        scrollLeftBtn11.addEventListener('click', () => {
            container11.scrollBy({
                left: -190,
                behavior: 'smooth'
            });
        });

        scrollRightBtn11.addEventListener('click', () => {
            container11.scrollBy({
                left: 190,
                behavior: 'smooth'
            });
        });

    });
</script>
