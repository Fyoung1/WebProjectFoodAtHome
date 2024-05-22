@extends('layouts.partials.navbar')

<div class="aut" style="max-width: 900px">

    <form method="post" style="position:relative;margin-left:80%;margin-top:20%; background: #f0f0f0; width: 50%;height: 40%;border: 2px solid #f0f0f0;border-radius: 5px; outline: none;" action="{{ route('register.perform') }}">
        <div class="background"></div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <h1 class="h3 mb-3 fw-normal" style="position: relative;margin-left: 27%;margin-top: 5%" >Регистрация</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" style="margin-bottom: 10px;padding: 15px; width:55%;margin-left: 23%;  border: 2px solid #888a85; border-radius: 5px; outline: none;" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" style="margin-bottom: 10px;padding: 15px; width:55%;margin-left: 23%;  border: 2px solid #888a85; border-radius: 5px; outline: none;" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" style="margin-bottom: 10px;padding: 15px; width:55%;margin-left: 23%;  border: 2px solid #888a85; border-radius: 5px; outline: none;" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" style="margin-bottom: 20px;padding: 15px; width:55%;margin-left: 23%;  border: 2px solid #888a85; border-radius: 5px; outline: none;" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" style="position: relative;margin-left: 45%;" type="submit">Далее</button>

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
