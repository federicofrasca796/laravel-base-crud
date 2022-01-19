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
                    <img src="{{asset('img/dc-logo.png')}}" alt="DC logo" width="70px">
                </div>
                <div class="col h-100">

                    <ul>
                        <li class="{{ Route::currentRouteName() === 'Characters'? 'active' : ''}}"><a href="">Characters</a></li>
                        <li class="{{ Route::currentRouteName() === 'Comics'? 'active' : ''}}"><a href="">Comics</a></li>
                        <li class="{{ Route::currentRouteName() === 'TV'? 'active' : ''}}"><a href="">TV</a></li>
                        <li class="{{ Route::currentRouteName() === 'Movies'? 'active' : ''}}"><a href="">Movies</a></li>
                        <li class="{{ Route::currentRouteName() === 'Games'? 'active' : ''}}"><a href="">Games</a></li>
                        <li class="{{ Route::currentRouteName() === 'Collectibles'? 'active' : ''}}"><a href="">Collectibles</a></li>
                        <li class="{{ Route::currentRouteName() === 'Videos'? 'active' : ''}}"><a href="">Videos</a></li>
                        <li class="{{ Route::currentRouteName() === 'Fans'? 'active' : ''}}"><a href="">Fans</a></li>
                        <li class="{{ Route::currentRouteName() === 'News'? 'active' : ''}}"><a href="">News</a></li>
                        <li class="{{ Route::currentRouteName() === 'Shop'? 'active' : ''}}"><a href="">Shop</a></li>
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