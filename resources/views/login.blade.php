@extends('layouts.main')

@section('content')
    <style>
        .content {
            max-width: 400px;
            margin: 0 auto;
            padding-top: 100px;
        }
    </style>

    <div class="content container">
        <form class="login-area" method="POST" action="{{ route('post_login') }}">
            @csrf
            <a href="{{ route('index') }}"><img src="assets/img/logo-footer.png" alt=""></a>
            <input type="text" name="phone" placeholder="Телефон" value="{{ old('phone') }}">
            @error('phone')
            <small>Телефон должен быть 11-значным.</small>
            @enderror
            <input type="password" name="password" placeholder="Пароль">
            @error('password')
            <small>Поле пароля обязательно.</small>
            @enderror
            <input type="submit" class="login-button" value="Войти">
            <a href="{{route('register')}}">
                Регистрация
            </a>
        </form>
    </div>
@endsection
