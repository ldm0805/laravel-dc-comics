{{-- Pagina 1 e 2 in comune --}}
<header>
    {{-- Prima parte DC visa --}}
    <div class="visa-cont">
        <div class="visa">
            <p>Dc Power Visa<i class="fa-solid fa-trademark"></i></p>
            <p>Additional Dc Sites<i class="fa-regular fa-registered ps-1"></i></p>
        </div>
    </div>
    {{-- Stampa del logo e della navbar --}}
    <section>
        <div>
            <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
        </div>
        <div>
            <nav class="nav_cont">
                <ul>
                    <li>
                        <a class="{{Route::currentRouteName() == 'homepage' ? 'active' : ''}}" href="{{route('homepage')}}">Home</a>
                        <a class="{{Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">Prodotti</a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- Searchbar --}}
        <div class="search">
            <nav class="input-cont">
                <input type="text" placeholder="Type something...">
            </nav>
        </div>
    </section>
</header>
