{{-- Stampa card fumetti --}}
<div class="album-card ">
    <div class="card-cont">
        <a class="link-single" href="{{ route('comics.show', ['comic' => $albumcover['id']]) }}">
            @if(@getimagesize($albumcover->thumb))
                <div class="album-image">
                    <img class="thumb" src="{{$albumcover->thumb}}" alt="{{$albumcover->title}}">
                </div>
            @else 
                <div class="album-image">
                    <img src="https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg" alt="">
                </div>
            @endif
        </a>
        <div class="button-hover">
            <a class="link-single" href="{{ route('comics.show', ['comic' => $albumcover['id']]) }}">
                <div class="col-but">
                    <button class="footer-button confirm-delete-button">Visualizza Comic</button>
                </div>
            </a>
            <a href="{{route('comics.edit', ['comic' => $albumcover->id])}}">
                <div class="col-but">
                    <button class="footer-button confirm-delete-button">Modifica</button>
                </div>
            </a>
            <div class="col-but">
            <form class="d-inline-block" method="POST" action="{{route('comics.destroy', ['comic' => $albumcover->id])}}">
                @csrf
                @method('DELETE')
                    <button type="submit" class="footer-button confirm-delete-button">Elimina</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <a class="link-single" href="{{ route('comics.show', ['comic' => $albumcover['id']]) }}">
            <h6>{{$albumcover['title']}}</h6>
        </a>
    </div>
</div>





