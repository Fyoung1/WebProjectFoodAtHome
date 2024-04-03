{{--@extends('layouts.app')--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

{{--@section('content')--}}
{{--        <div class="container">--}}
{{--            <div class="milkproduc">--}}
{{--                <h1 style="margin-top: -70px;position: absolute">Молоко и яйца</h1>--}}
{{--                <button class="scroll-left">&lt;</button>--}}
{{--                <div class="contex">--}}
{{--                    <div class="scrollable-content">--}}
{{--                        @foreach ($MilkProducts as $MilkProduct)--}}
{{--                                <input type="hidden" value="{{ $MilkProduct->id }}" name="id">--}}
{{--                                <input type="hidden" value="{{ $MilkProduct->name }}" name="name">--}}
{{--                                <input type="hidden" value="{{ $MilkProduct->image }}"  name="image">--}}
{{--                                <img src="{{ url($MilkProduct->image) }}" alt="" class="">--}}
{{--                                <h3>{{ $MilkProduct->name }}</h3>--}}
{{--                                <input type="hidden" value="{{ $MilkProduct->price }}" name="price">--}}
{{--                                <h2 >{{ $MilkProduct->price }}₽</h2>--}}
{{--                                <input type="hidden" value="{{ $MilkProduct->description }}" name="description">--}}
{{--                                <h4 >{{ $MilkProduct->description }}</h4>--}}
{{--                                <input type="hidden" value="1" name="quantity">--}}
{{--                                <input type="hidden" value="{{ $MilkProduct->calories }}" name="calories">--}}
{{--                                <h4 >{{ $MilkProduct->calories }}кк</h4>--}}
{{--                                 <button id="{{$MilkProduct->id}}" onclick='myFunction(this.id)'>Нажми меня</button>--}}

{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button class="scroll-right">&gt;</button>--}}

{{--        </div>--}}
{{--            <div class="milkproduc">--}}
{{--                <h1 style="margin-top: -70px;position: absolute">Овощи и зелень</h1>--}}
{{--                <button class="scroll-left-vegetables">&lt;</button>--}}
{{--                <div class="contex-vegetables">--}}
{{--                    <div class="scrollable-content-vegetables">--}}
{{--                        @foreach ($VegetablesProducts as $VegetablesProduct)--}}
{{--                            <form action="{{ route('cart.index') }}">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" value="{{ $VegetablesProduct->id }}" name="id">--}}
{{--                                <input type="hidden" value="{{ $VegetablesProduct->name }}" name="name">--}}
{{--                                <input type="hidden" value="{{ $VegetablesProduct->image }}"  name="image">--}}
{{--                                <img src="{{ url($VegetablesProduct->image) }}" alt="" class="">--}}
{{--                                <h3>{{ $VegetablesProduct->name }}</h3>--}}
{{--                                <input type="hidden" value="{{ $VegetablesProduct->price }}" name="price">--}}
{{--                                <h2 >{{ $VegetablesProduct->price }}₽</h2>--}}
{{--                                <input type="hidden" value="{{ $VegetablesProduct->description }}" name="description">--}}
{{--                                <h4 >{{ $VegetablesProduct->description }}</h4>--}}
{{--                                <input type="hidden" value="1" name="quantity">--}}
{{--                                <button type="submit" class="text-white text-sm bg-gray-900 rounded">В корзину</button>--}}
{{--                            </form>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button class="scroll-right-vegetables">&gt;</button>--}}
{{--            </div>--}}

{{--        </div>--}}


{{--@endsection()--}}

{{--<style>--}}
{{--    .milkproduc--}}
{{--    {--}}
{{--        margin-top: 105px;--}}
{{--        margin-left: 240px;--}}
{{--    }--}}

{{--    .contex {--}}
{{--        position: relative;--}}
{{--        display: flex;--}}
{{--        width: 1050px;--}}
{{--        margin-left: 50px;--}}
{{--        margin-top: -65px;--}}
{{--        overflow: hidden;--}}
{{--    }--}}

{{--    .contex-vegetables {--}}
{{--        position: relative;--}}
{{--        display: flex;--}}
{{--        width: 1050px;--}}
{{--        margin-left: 50px;--}}
{{--        margin-top: -65px;--}}
{{--        overflow: hidden;--}}
{{--    }--}}


{{--    .scrollable-content {--}}
{{--        display: flex;--}}
{{--        width: max-content;--}}
{{--        transition: transform 0.3s ease-in-out;--}}
{{--    }--}}
{{--    .scrollable-content-vegetables {--}}
{{--        display: flex;--}}
{{--        width: max-content;--}}
{{--        transition: transform 0.3s ease-in-out;--}}
{{--    }--}}

{{--    button {--}}
{{--        margin: 5px;--}}
{{--    }--}}

{{--    .scroll-left--}}
{{--    {--}}
{{--        position: relative;--}}
{{--        top: 106px;--}}
{{--        transform: translateY(-50%);--}}
{{--        padding: 5px;--}}
{{--        font-size: 20px;--}}
{{--    }--}}
{{--    .scroll-right {--}}
{{--        position: relative;--}}
{{--        top: -263px;--}}
{{--        margin-right: 415px;--}}
{{--        transform: translateY(-50%);--}}
{{--        padding: 5px;--}}
{{--        font-size: 20px;--}}
{{--        float: right;--}}
{{--    }--}}

{{--    .scroll-left {--}}
{{--        left: 0;--}}
{{--    }--}}

{{--    .scroll-right {--}}
{{--        right: 0;--}}
{{--    }--}}

{{--    .scroll-left-vegetables--}}
{{--    {--}}
{{--        position: relative;--}}
{{--        top: 106px;--}}
{{--        transform: translateY(-50%);--}}
{{--        padding: 5px;--}}
{{--        font-size: 20px;--}}
{{--    }--}}
{{--    .scroll-right-vegetables {--}}
{{--        position: relative;--}}
{{--        float: right;--}}
{{--        top: -216px;--}}
{{--        margin-right: 415px;--}}
{{--        transform: translateY(-50%);--}}
{{--        padding: 5px;--}}
{{--        font-size: 20px;--}}
{{--    }--}}

{{--    .scroll-left-vegetables {--}}
{{--        left: 0;--}}
{{--    }--}}

{{--    .scroll-right-vegetables {--}}
{{--        right: 0;--}}
{{--    }--}}

{{--</style>--}}


{{--<script>--}}
{{--    document.getElementById('myButton').onclick = myFunction;--}}
{{--    function myFunction(id) {--}}
{{--        console.log(id);--}}
{{--            var productId = $(this).data('id');--}}
{{--            $.ajax({--}}
{{--                type: 'GET',--}}
{{--                url: '/addToCart/'+id,--}}
{{--                success: function (data) {--}}
{{--                    // $("#adding-cart-" + id).show();--}}
{{--                    // $("#add-cart-btn-" + id).hide();--}}
{{--                },--}}
{{--                error: function (error) {--}}
{{--                    console.error('Error adding to cart:', error);--}}
{{--                }--}}
{{--            });--}}
{{--    }--}}

{{--    --}}{{--function addToCart()--}}
{{--    --}}{{--{--}}
{{--    --}}{{--    console.log("saas");--}}
{{--    --}}{{--    $.ajax({--}}
{{--    --}}{{--        url:"{{route("cart.addToCart") }}",--}}
{{--    --}}{{--        type:"POST",--}}
{{--    --}}{{--        data:{--}}
{{--    --}}{{--            id:'id'--}}
{{--    --}}{{--        },--}}
{{--    --}}{{--        headers: {--}}
{{--    --}}{{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--    --}}{{--        },--}}
{{--    --}}{{--        success:(data)=>{--}}
{{--    --}}{{--            console.log(data)--}}
{{--    --}}{{--        }--}}
{{--    --}}{{--    });--}}
{{--    --}}{{--}--}}

{{--</script>--}}

{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', () => {--}}
{{--        const container = document.querySelector('.contex');--}}
{{--        const container1 = document.querySelector('.contex-vegetables');--}}
{{--        const scrollableContent = document.querySelector('.scrollable-content');--}}
{{--        const scrollableContent1 = document.querySelector('.scrollable-content-vegetables');--}}
{{--        const scrollLeftBtn = document.querySelector('.scroll-left');--}}
{{--        const scrollRightBtn = document.querySelector('.scroll-right');--}}
{{--        const scrollLeftBtn1 = document.querySelector('.scroll-left-vegetables');--}}
{{--        const scrollRightBtn1 = document.querySelector('.scroll-right-vegetables');--}}

{{--        scrollLeftBtn.addEventListener('click', () => {--}}
{{--            container.scrollBy({--}}
{{--                left: -150,--}}
{{--                behavior: 'smooth'--}}
{{--            });--}}
{{--        });--}}

{{--        scrollRightBtn.addEventListener('click', () => {--}}
{{--            container.scrollBy({--}}
{{--                left: 150,--}}
{{--                behavior: 'smooth'--}}
{{--            });--}}
{{--        });--}}

{{--        scrollLeftBtn1.addEventListener('click', () => {--}}
{{--            container1.scrollBy({--}}
{{--                left: -150,--}}
{{--                behavior: 'smooth'--}}
{{--            });--}}
{{--        });--}}

{{--        scrollRightBtn1.addEventListener('click', () => {--}}
{{--            container1.scrollBy({--}}
{{--                left: 150,--}}
{{--                behavior: 'smooth'--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}






