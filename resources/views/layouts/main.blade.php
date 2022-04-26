<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/img/icon.ico">
    <link rel="stylesheet" href="/assets/css/style-card.css">
    <link rel="stylesheet" href="/assets/css/style-login.css">


    <!-- <link rel="stylesheet" href="assets/css/slider.css">
    <script src="assets/js/slider.js"></script> -->

    <script src="/assets/js/tabs.js"></script>

    <title>Доставка еды и продуктов</title>
</head>
<body>

<header>
    <h1></h1>
    <div class="logo">
        <a href="{{ route('index') }}"><img src="/assets/img/logo.png" alt=""></a>
        <a href="{{ route('index') }}"><h1>EFODIN</h1></a>
    </div>
    <div class="buttons">
        @if(\Illuminate\Support\Facades\Auth::guest())
            <div class="login">
                <a href="{{ route('login') }}">
                    <button>
                        Войти
                    </button>
                </a>
            </div>

        @endif
        @if(\Illuminate\Support\Facades\Auth::user())
            <div class="basket">
                <a href="#">
                    <button>
                        Корзина
                    </button>
                </a>
            </div>
            <div class="basket">
                <a href="{{ route('logout') }}">
                    <button>
                        Выйти
                    </button>
                </a>
            </div>
        @endif
    </div>
</header>

@yield('content')

<footer>
    <div class="footer-top">
        <div class="logo-footer">
            <img class src="assets/img/logo-footer.png" alt="">
        </div>
        <div class="socials">
            <a target="_blank" href="https://vk.com/"><img src="/assets/img/social/vk.png" alt=""></a>
            <a target="_blank" href="https://www.youtube.com/"><img src="/assets/img/social/youtube.png" alt=""></a>
            <a target="_blank" href="https://github.com/Efodin"><img src="/assets/img/social/github.png" alt=""></a>
            <a target="_blank" href="https://www.instagram.com/"><img src="/assets/img/social/inst.png" alt=""></a>
        </div>
    </div>

    <div class="contact container">
        <li><a href=""></a></li>
{{--        <li><a href="">Стать курьером</a></li>--}}
{{--        <li><a href="">Стать партнером</a></li>--}}
    </div>
    <div class="copyright">
        <a target="_blank" href="https://github.com/Efodin"><p>&copy; Efodin 2022</p></a>
    </div>

</footer>

</body>
</html>
