<?php
$navlinks = config('navlinks');
?>
<header id="site_header">
    <div id="top_header">
        <!-- Top banner -->
        <div id="top_banner">
            <div class="container">
                <ul class="justify-content-end">
                    <li>DC POWER&trade; VISAS</li>
                    <li>ADDITIONAL DC SITES</li>
                </ul>
            </div>
        </div>
        <!-- Navbar -->
        <div class="container">
            <nav class="row align-items-center" id="header_nav">
                <div class="col">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo" width="70px">
                </div>
                <div class="col h-100">

                    <ul>
                        @foreach ($navlinks as $navitem)
                            <li class="{{ Route::currentRouteName() === $navitem['route'] ? 'active' : '' }}"><a
                                    href="{{ route($navitem['route']) }}">{{ $navitem['name'] }}</a></li>
                        @endforeach
                    </ul>

                </div>
                <div class="col searchbar d-flex">
                    <input type="search" name="header_search" id="header_search" placeholder="Search">
                    <span><i class="fas fa-search"></i></span>
                </div>
            </nav>
        </div>
    </div>
</header>
