@extends('layouts.main')

@section('content')
    <div class="content container">
        <style>
            .card-information{
                background: url({{ $restaurant->imagePage }}) no-repeat;
                background-size: 100%;
                box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.25) inset;
                height: 300px;
                padding: 1%;
                object-fit: cover;
                /* height: 100%;
                margin-left: 50px;    */
                display: flex;
                flex-direction: column;
                justify-content: end;
            }

            .content {
                flex-direction: row;
            }
        </style>
        <div class="content-area">
            <div class="card-information">
                <h1>{{ $restaurant->name }}</h1>
                <div class="card-information-text">
                    <p>Заказ от 1 ₽</p>
                    <p id="1">Доставка от {{ $restaurant->delivery }} ₽</p>
                </div>
            </div>

            <div class="menu-area">
                <div class="menu-list" >
                    <nav>
                        <a href="#1">Популярное</a>
                        <a href="#2">Акции</a>
                        <a href="#3">Все меню</a>
                    </nav>
                </div>

                <div class="menu-cards">
                    <h2>Популярное</h2>
                    <div class="menu-card">
                        @foreach($populars as $item)
                            <div class="card-card">
                                <a href="">
                                    <img class="card-image" src="{{ $item->image }}" alt="image">
                                    <div class="card-text">
                                        <h1>{{ $item->name }}</h1>
                                        <p>{{ $item->price }} ₽</p>
                                        {{--<button>В корзину</button>--}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div >
                    <div id="2" class="probel"></div>
                    <h1>Акции</h1>
                    <div class="menu-card">
                        @foreach($sales as $item)
                            <div class="card-card">
                                <a href="">
                                    <img class="card-image" src="{{ $item->image }}" alt="image">
                                    <div class="card-text">
                                        <h1>{{ $item->name }}</h1>
                                        <div class="price-text">
                                            <p>{{ $item->price }} ₽</p>
                                            {{--<p><strike>{{ $item->discount }} ₽</strike></p>--}}
                                            {{--<button>В корзину</button>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div id="3" class="probel"></div>
                    <h1>Все меню</h1>
                    <div class="menu-card">
                        @foreach($restaurant->menu as $item)
                            <div class="card-card">
                                <a href="">
                                    <img class="card-image" src="{{ $item->image }}" alt="image">
                                    <div class="card-text">
                                        <h1>{{ $item->name }}</h1>
                                        <div class="price-text">
                                            <p>{{ $item->price }} ₽</p>
                                            {{--<p><strike>{{ $item->discount }} ₽</strike></p>--}}
                                            {{--<button>В корзину</button>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <div class="basket-area">
            <h1>Так же попробуйте</h1>
            <style>
                .basket-area {
                    margin-left: 10px;
                    height: 1000px;
                    overflow: auto;
                    overflow-y: scroll;
                }

                .basket-area h1 {
                    margin-bottom: 10px ;
                    padding-left: 15px;
                    height: 45px;
                    border-bottom: 1px solid #2e2e3e;
                    position: sticky;
                    top: 0;
                    background: white;

                }
                .card {
                    width: 94%;
                    margin-left: 5%;
                    margin-bottom: 40px;
                    background: #f6f6f6;
                    box-shadow: #2e2e3e 0px 3px 6px;
                }
                .card h2{
                    font-size: 32px;
                    font-weight: 500;
                }
                .card p {
                    margin-bottom: 10px;
                }


            </style>
            @foreach($restaurants as $item)
                <a href="{{ route('restaurant', $item->id) }}">
                    <div class="card">
                        <div><img src="{{$item->image}}" alt=""></div>
                        <div class="card-text">
                            <h2>{{$item->name}}</h2>
                            <div class="card-desc">
                                <p>{{$item->time}} Минут</p>
                                <p>{{$item->rating}} &#9733;</p>
                                {{--                                <p> {{$item->delivery}} ₽</p>--}}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

@endsection
