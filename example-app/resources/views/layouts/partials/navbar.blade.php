 <title>fyoungproject</title>

 <div class="paramsHeader">
     <img src="{{ asset('image/tracking_10149339.png') }}" style="position: relative;width: 40px;height: 40px;top:3%;left:9%;" alt="My Image">
        <h1 style="margin-left: 4%;width: 15%;height: 4%;margin-top:-0.7%;"><a href='/' style="text-decoration: none; color: initial;"> FOOD at HOME</a></h1>
                    <form action="" class="search-bar" style="position: relative;top:37%;">
                        <input type="search" name="search" pattern=".*\S.*" required>
                        <button class="search-btn" type="submit" style="border: 0px solid #FFFFFF;color:#888a85;">
                            <span>Найти</span>
                        </button>
                    </form>
                    @auth
                        {{auth()->user()->name}}
         <nav style="margin-top: -1%;margin-right: 5%;" >
             <ul>
                 <img src="{{ asset('image/heart_1077035.png') }}" style="position: relative;width: 20px;height: 20px;left: 0.7%;" alt="My Image">
                 <li><a href="/favorites" >Избранное</a></li>
                 <img src="{{ asset('image/shopping-cart_2169842.png') }}" style="position: relative;width: 20px;height: 20px;left: 0.7%;" alt="My Image">
                 <li><a href="/checkout" >Корзина</a></li>
                 <img src="{{ asset('image/home_263115.png') }}" style="position: relative;width: 20px;height: 20px;left:0.7%;top:2%;" alt="My Image">
                 <li style="margin-right: 1%;" ><a href="#">Аккаунт</a>
                     <ul>
                         <li><a href="/user-data-person">Мои данные</a></li>
                         <li><a href="/order-history">Мои заказы</a></li>
                         <li><a href="#">Мои адреса</a></li>
                         <li><a href="{{ route('logout.perform') }}">Выйти</a></li>
                     </ul>
                 </li>
             </ul>
         </nav>
     @endauth

                    @guest
         <img src="{{ asset('image/home_263115.png') }}" style="position: relative;left:93%;width: 20px;height: 20px;margin-top:-0.9%;" alt="My Image">
         <a href="{{ route('login.perform') }}" style="position: relative; left: 4.5%; text-decoration: none; color: initial;font-size: 20px;margin-top: -1.1%;" class="button1">Войти</a>
                    @endguest
                </div>

<style>
    .paramsHeader
    {
        position: fixed;
        top: 0;
        width: 100%;
        height: 8%;
        background: #FFFFFF;
        left: 0;
        border-bottom: 1px solid #888a85;
        box-sizing: border-box;
        /*overflow: hidden;*/
    }
    .search-bar
    {
        position: relative;
        margin-top: -50px;
        width: 40%;
        margin-left: 20%;

    }
    .button1
    {
        width: 10%;
        display: flex;
        margin-left: 90%;
        margin-top: -50px;
    }

    .button1
    {
        /*display: flex;*/
        /*width: 4%;*/
        /*margin-left: 118px;*/
    }

    nav ul {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        position: relative;
    }

    nav ul li a {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
    }

    nav ul li:hover > a {

    }

    nav ul li ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;

        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    nav ul li:hover > ul {
        display: block;
    }

    nav ul li ul li {
        width: 100%;
    }

    nav ul li ul li a {
        padding: 15px;
        color: #1d2124;
    }

    nav ul li ul li a:hover {
        background-color: #666;
    }

</style>


