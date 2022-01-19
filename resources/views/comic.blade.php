@extends('layouts.app')

@section('page-title', 'comic')

@section('main_content')
<main id="single_comic">
    <div class="jumbo"></div>
    <div class="comic_hero">
        <div class="container">
            <div class="hero_wrapper">
                <span class="comic_type text-uppercase">
                    {{$comic['type']}}
                </span>
                <img src="{{$comic['thumb']}}" alt="">
                <div class="gallery_cta text-uppercase">View Gallery</div>
            </div>
        </div>
    </div>

    <section class="container comic_info my-5">
        <div class="row justify-content-between gx-2">
            <div class="content col-8">
                <h2>{{ $comic['title'] }}</h2>

                <div class="buy_info my-3 d-flex justify-content-between">
                    <div class="d-flex justify-content-between flex-grow-1">
                        <span class="price"> U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></span>
                        <span class="text-uppercase fw-bold">Available</span>
                    </div>
                    <span class="availability text-white">Check Availability</span>
                </div>

                <p class="comic_more">
                    {{ $comic['description'] }}
                </p>
            </div>
        
            <div class="adv col-3">
                <h5>advertisement</h5>
                <img src="{{ asset('img/adv.jpg') }}" alt="" width="100%">
            </div>
        </div>
    </section>

    <section class="comic_details">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-6">
                    <h5>Talent</h5>
                    <div class="row">
                        <h6 class="col-3">Art by:</h6>
                        <p class="col-8">
                            @foreach ($comic['artists'] as $artist)
                            <a href="#">{{ $artist }}</a>
                            @if(!$loop->last)
                                ,
                            @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="row">
                        <h6 class="col-3">Written by:</h6>
                        <p class="col-8">
                            @foreach ($comic['writers'] as $writer)
                            <a href="#">{{ $writer }}</a>
                            @if(!$loop->last)
                                ,
                            @endif
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <h5>Specs</h5>
                    <div class="row">
                        <h6 class="col-3">Series:</h6>
                        <div class="col-8">{{ $comic['series']}}</div>
                    </div>
                    <div class="row">
                        <h6 class="col-3">U.S. Price: </h6>
                        <div class="col-8">{{ $comic['price']}}</div>
                    </div>
                    <div class="row">
                        <h6 class="col-3">On Sale Date: </h6>
                        <div class="col-8">{{ $comic['sale_date']}}</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <nav class="widgets_links mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-3 p-2">
                        <a href="">
                            DIGITAL COMICS
                            <img src="{{asset('img/cta-icons.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-3 p-2">
                        <a href="">
                            SHOP DC
                            <img src="{{asset('img/cta-icons.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-3 p-2">
                        <a href="">
                            COMIC SHOP LOCATOR
                            <img src="{{asset('img/cta-icons.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-3 p-2">
                        <a href="">
                            SUBSCRIPTIONS
                            <img src="{{asset('img/cta-icons.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </nav> --}}
    </section>

</main>

@endsection