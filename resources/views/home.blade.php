@extends('layouts.app')

@section('page-title', 'Home')

@section('main_content')
<div id="main_comics">
    <div class="jumbo"></div>

    <section class="current_series">
        <div class="container">
            <div class="title_tag">
                <h1>
                    Current Series
                </h1>
            </div>
            <div class="row d-flex">
                @foreach ($comics as $index => $comic)
                    <div class="comic_card col-2 mb-5">
                        <div class="text-center">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <a class="card_info" href="{{ route('comic', ['id' => $index]) }}">
                            {{$comic['series']}}
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="text-center">
                <button class="btn btn_primary">
                    Load More
                </button>
            </div>
        </div>
    </section>

    <div class="buy_info">
        <nav class="container">
            <ul class="d-flex">
                <li>
                    <i>
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="" width="80%">
                    </i>
                    <a href="">Digital comics</a>
                </li>
                <li>
                    <i>
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="" width="80%">
                    </i>
                    <a href="">DC Merchandise</a>
                </li>
                <li>
                    <i>
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="" width="90%">
                    </i>
                    <a href="">Subscription</a>
                </li>
                <li>
                    <i>
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="" width="65%">
                    </i>
                    <a href="">Comic Shop Locator</a>
                </li>
                <li>
                    <i>
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="" width="100%">
                    </i>
                    <a href="">DC Power Visa</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

@endsection