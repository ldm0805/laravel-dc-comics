{{-- Stampa card fumetti --}}

<div class="album-card ">
    <div class="card-cont">
        <a class="link-single" href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
            <div class="album-image">
                @if(@getimagesize($comic->thumb))
                    <img class="thumb" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                @else 
                    <img src="https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg" alt="">
                @endif
            </div>
        </a>
        <div class="button-hover">
            <a class="link-single" href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
                <div class="col-but">
                    <button class="footer-button confirm-delete-button">Visualizza Comic</button>
                </div>
            </a>
            <a href="{{route('comics.edit', ['comic' => $comic->id])}}">
                <div class="col-but">
                    <button class="footer-button confirm-delete-button">Modifica</button>
                </div>
            </a>
            <div class="col-but">
            <form class="d-inline-block" method="POST" action="{{route('comics.destroy', ['comic' => $comic->id])}}">
                @csrf
                @method('DELETE')
                    <button type="submit" class="footer-button confirm-delete-button">Elimina</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <a class="link-single" href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
            <h6>{{$comic['title']}}</h6>
        </a>
    </div>
</div>





