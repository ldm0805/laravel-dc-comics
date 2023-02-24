{{-- Pagina 1 --}}
{{-- Stampa card fumetti --}}
<div class="album-card">
    <div>
        <a href="{{route('comics.edit', ['comic' => $albumcover->id])}}">
            <i class="fa-regular fa-pen-to-square text-white"></i>
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
            <div class="album-image">
                <img class="thumb" src="{{$albumcover['thumb']}}" alt="{{$albumcover['title']}}">
            </div>
            <h6>{{$albumcover['title']}}</h6>
        </a>
</div>
@include ('comics.modal_delete_comic');

