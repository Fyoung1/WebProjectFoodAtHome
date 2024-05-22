<title>fyoungproject</title>
<div class="paramsHeader">
    <h1 style="margin-left: 45%;width: 8%;">fyoung</h1>
    <form style=" margin-left: 5%;width: 8%;margin-top: -55px;" action={{'/'}}>
        <button style="" type="submit" id="ButtonCart" >Назад</button>
    </form>

    @auth
        {{auth()->user()->name}}
        <a href="{{ route('logout.perform') }}">Выйти</a>
        <a href="{{ route('cart.index') }}" class="button1">Корзина</a>
    @endauth

    @guest
        <a href="{{ route('login.perform') }}" class="button1">Войти</a>
    @endguest
</div>

<style>
    .paramsHeader
    {
        position: fixed;
        top: 0;
        width: 100%;
        height: 8%;
        background: #4a5568;
        left: 0px;
        /*overflow: hidden;*/
    }
    .button1
    {
        width: 10%;
        display: flex;
        margin-left: 90%;
        margin-top: -50px;
    }

</style>


