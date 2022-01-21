@extends('layouts.app')

@section('page-title', 'comic')

@section('main_content')
    <main id="single_comic">
        <div class="jumbo"></div>
        <div class="comic_hero">
            <div class="container">
                <div class="hero_wrapper w-25">
                    <img src="{{ $game->cover }}" alt="" class="w-100">
                    <div class="gallery_cta text-uppercase">View Gallery</div>
                </div>
            </div>
        </div>

        <section class="container comic_info my-5">
            <div class="row justify-content-between gx-2">
                <div class="content col-8">
                    <h2>{{ $game->title }}</h2>

                    <p class="comic_more">
                        {{ $game->description }}
                    </p>
                </div>

                <div class="adv col-3">
                    <h5>advertisement</h5>
                    <img src="{{ asset('img/adv.jpg') }}" alt="" width="100%">
                </div>
            </div>
        </section>

    </main>

@endsection
