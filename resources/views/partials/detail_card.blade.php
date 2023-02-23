{{-- Pagina 1 --}}
{{-- Stampa card fumetti --}}
<div class="album-card">
        <a href="{{ route('single-card', ['slug' => $albumcover['slug']]) }}">
            <div class="album-image">
                <img class="thumb" src="{{$albumcover['thumb']}}" alt="{{$albumcover['title']}}">
            </div>
            <h6>{{$albumcover['title']}}</h6>
        </a>
</div>
