{{-- Pagina 1 --}}
{{-- Stampa card fumetti --}}
<div class="album-card">
    <div>
        <a href="#">
            <i class="fa-regular fa-pen-to-square text-white"></i>
        </a>
    </div>
        <a href="{{ route('comics.show', ['comic' => $albumcover['id']]) }}">
            <div class="album-image">
                <img class="thumb" src="{{$albumcover['thumb']}}" alt="{{$albumcover['title']}}">
            </div>
            <h6>{{$albumcover['title']}}</h6>
        </a>
</div>

