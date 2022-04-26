@extends('layouts.main')

@section('content')
    <div class="content container">
        <div class="tabs">
{{--            <button class="tablinks" onclick="openTabs(event, 'restaurant')">Рестораны</button>--}}
{{--            <button class="tablinks" onclick="openTabs(event, 'shops')">Магазины</button>--}}
            <a href="{{ route('index' ) }}" >Рестораны</a>
            <a href="{{ route('shops') }}" >Магазины</a>
        </div>

        <div id="restoraunt" class="cards tabcontent">
            @foreach($restaurants as $item)
                <a href="{{ route('restaurant', $item->id) }}">
                    <div class="card">
                        <div><img src="{{$item->image}}" alt=""></div>
                        <div class="card-text">
                            <h1>{{$item->name}}</h1>
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
