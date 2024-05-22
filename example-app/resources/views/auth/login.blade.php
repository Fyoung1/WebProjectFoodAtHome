
@include('layouts.partials.navbar')


<div class="login" style="max-width: 900px" >

    <div class="background"></div>
    <form method="post" style="position:relative;margin-left:80%;margin-top:20%; background: #f0f0f0; width: 50%;height: 40%;border: 2px solid #f0f0f0;border-radius: 5px; outline: none;" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <h2 class="h3 mb-3 fw-normal text-align: right" style="position: relative;margin-left: 20%;margin-top: 15%;" >Войти в аккаунт</h2>
        @include('layouts.partials.messages')
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" style="margin-bottom: 20px;padding: 15px; width:55%;margin-left: 20%;  border: 2px solid #888a85; border-radius: 5px; outline: none;"  value="{{ old('username') }}" placeholder="Введите email или Username" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" style="margin-bottom: 5px;padding: 15px; width: 55%;margin-left: 20%; border: 2px solid #888a85; border-radius: 5px; outline: none;" value="{{ old('password') }}" placeholder="Введите пароль" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" style="position: relative;margin-top:10%;margin-left: 20%;margin-right: 5%;" >Войти</button>

        <a style="text-decoration: none; color: initial;font-size: 20px;color: #888a85" href="{{ route('register.perform') }}" class="btn btn-warning">Регистрация</a>
    </form>
</div>


<style>
    .form-control
    {
        padding: 7px;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
    }
    .background {
        /* Set the image as a background */
        background-image: url('https://mykaleidoscope.ru/x/uploads/posts/2022-10/1666389923_30-mykaleidoscope-ru-p-klassnaya-priroda-oboi-32.jpg');
        /* Make sure the image covers the whole area */
        background-size: cover;
        /* Position the image */
        background-position: center;
        /* Set the div to the full size of the screen */
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        /* Apply the blur effect */
        filter: blur(5px);
        /* Move the div behind the content */
        z-index: -1;
    }
</style>
