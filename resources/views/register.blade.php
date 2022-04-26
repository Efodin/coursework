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
        <form class="login-area" method='POST' action="{{ route('post_register') }}">
            @csrf
            <a href="{{ route('index') }}"><img src="assets/img/logo-footer.png" alt=""></a>
            <input type="text" name="name" placeholder="Имя" value="{{ old( 'name') }}">
            @error('name')
            <small>Необходимо ввести имя!</small>
            @enderror
            <input type="text" name="phone" placeholder="Телефон" value="{{ old('phone') }}">
            @error('phone')
            <small>Необходимо ввести телефон!</small>
            @enderror
            <input type="password" name="password" placeholder="Пароль">
            @error('password')
            <small>Необходимо ввести пароль!</small>
            @enderror
            <input type="submit" class="reg-button" value="Зарегистрироваться">
                <a href="{{ route('login') }}">
                Войти
            </a>
        </form>
    </div>
@endsection
