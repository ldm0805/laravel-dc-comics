{{-- Pagina 1 --}}
{{-- Stampa card fumetti --}}
<div class="album-card">
    <div>
        <a href="{{route('comics.edit', ['comic' => $albumcover->id])}}">
            <button class="confirm-delete-button btn btn-sm btn-square btn-warning">
                <i class="fa-regular fa-pen-to-square text-white"></i>
            </button>
        </a>
        <form class="d-inline-block" method="POST" action="{{route('comics.destroy', ['comic' => $albumcover->id])}}">
            @csrf
            @method('DELETE')
            {{-- data-cicclo --}}
            <button type="submit" class="confirm-delete-button btn btn-sm btn-square btn-danger" data-title="{{$albumcover->title}}"> 
                <i class="fa-solid fa-trash"></i>
            </button>
            </form>
    </div>
        <a href="{{ route('comics.show', ['comic' => $albumcover['id']]) }}">
            @if(@getimagesize($albumcover->thumb))
            <div class="album-image">
                <img class="thumb" src="{{$albumcover->thumb}}" alt="{{$albumcover->title}}">
            </div>
            @else 
            <div class="album-image">
                <img src="https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg" alt="">
            </div>
            @endif
            <h6>{{$albumcover['title']}}</h6>
        </a>
</div>





