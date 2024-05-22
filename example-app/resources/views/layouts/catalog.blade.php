
    <div class="box">
        <h2>Каталог</h2>
        <ul>
            <li><a href='/MilkProductPage' style="text-decoration: none; color: initial;"><span>1</span> Молоко и яйца</a></li>
            <li><a href='/VegetablesProductPage'style="text-decoration: none; color: initial;"> <span>2</span> Овощи и зелень</a></li>
            <li><a href='/FruitsandBerriesProductPage'style="text-decoration: none; color: initial;"><span>3</span> Фрукты и ягоды</a></li>
            <li><a href='/CandyProductPage'style="text-decoration: none; color: initial;"><span>4</span> Сладости</a></li>
            <li><a href='/MeatAndBirdsProductPage'style="text-decoration: none; color: initial;"><span>5</span> Мясо и птица</a></li>
            <li><a href='/FishProductPage'style="text-decoration: none; color: initial;"><span>6</span> Рыба и морепродукты</a></li>
            <li><a href='/FreezingProductPage'style="text-decoration: none; color: initial;"><span>7</span> Заморозка</a></li>
            <li><a href='/WaterAndDrinksProductPage'style="text-decoration: none; color: initial;"><span>8</span> Вода и напитки</a></li>
            <li><a href='/SausagesProductPage'style="text-decoration: none; color: initial;"><span>9</span> Колбасы и сосиски</a></li>
            <li><a href='/BreadProductPage'style="text-decoration: none; color: initial;"><span>10</span> Хлеб и выпечка</a></li>
            <li><a href='/CheeseProductPage'style="text-decoration: none; color: initial;"><span>11</span> Сыры</a></li>
            <li><a href='/PastaAndCerealsProductPage'style="text-decoration: none; color: initial;"><span>12</span> Макароны и крупы</a></li>
        </ul>
    </div>

<style>
    .box
    {
        position: absolute;
        /*bottom: 0px;*/
        top: 89px;
    }
    .box {
        width: 200px;
        /*border-bottom: 20px solid ;*/
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        position: fixed;
    }
    .box h2 {
        color: #000000;
        /*background: #808080;*/
        padding: 10px 10px;
        font-size: 20px;
        font-weight: 700;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .box ul {
        position: relative;
        background: #fff;
    }
    .box ul:hover li {
        opacity: 0.2;
    }
    .box ul li {
        list-style: none;
        padding: 10px;
        margin-left: -30px;
        width: 100%;
        background: #fff;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.5s;
    }
    .box ul li:hover {
        transform: scale(1.1);
        z-index: 5;
        background: #888a85;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        color: #fff;
        opacity: 1;
    }
    .box ul li span {
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        background: #1d2124;
        color: #fff;
        display: inline-block;
        border-radius: 50%;
        margin-right: 10px;
        font-size: 12px;
        font-weight: 600;
        transform: translateY(-2px);
    }
    .box ul li:hover span {
        background: #fff;
        color: #25bcff;
    }
</style>
