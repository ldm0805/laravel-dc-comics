@extends('layouts.app')
@section('content')
<div class="container-fluid bg_gray">
    <section>
        <div class="album">
            @foreach($products as $albumcover)
                    @include('/partials/detail_card')
            @endforeach
        </div>
        <div class="col-but">
            <a href="{{route('comics.create')}}" >
                <button class="footer-button">Aggiungi Comic!</button>
            </a>
        </div>
    </section>
</div>
@include ('comics.modal_delete_comic')
@endsection