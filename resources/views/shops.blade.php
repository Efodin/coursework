@extends('layouts.main')

@section('content')
    <div class="content container">
        <style>
            .tabs a{
                color: #2e2e3e;
            }
            .tabs a:first-child {
                color: #2e2e3e90;
            }
            .tabs a:first-child:hover {
                color: #2e2e3e;
            }
        </style>
        <div class="tabs">
            {{--            <button class="tablinks" onclick="openTabs(event, 'restaurant')">Рестораны</button>--}}
            {{--            <button class="tablinks" onclick="openTabs(event, 'shops')">Магазины</button>--}}
            <a href="{{ route('index' ) }}" >Рестораны</a>
            <a href="{{ route('shops')}}" class="fix" >Магазины</a>
        </div>

        <div id="shops" class="cards tabcontent">
                @foreach($shops as $item)
                    <a href="{{ route('page', $item->id) }}">
                        <div class="card">
                            <div><img src=" " alt=""></div>
                            <div class="card-text">
                                <h1>{{$item->name}}</h1>
                                <div class="card-desc">
                                    <p>{{$item->time}} Минут</p>
                                    <p>{{$item->rating}} &#9733;</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
        </div>

    </div>
@endsection
