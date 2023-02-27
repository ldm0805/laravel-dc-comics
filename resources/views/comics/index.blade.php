@extends('layouts.app')
@section('content')
<div class="container-fluid bg_gray">
    <section>
      
        <div class="album">
            @foreach($products as $comic)
                    @include('/partials/detail_card')
            @endforeach
        </div>
        <div class="col-but">
            <a href="{{route('comics.create')}}" >
                <button class="footer-button">Aggiungi Comic!</button>
            </a>
        </div>
    </section>
    <div class="mt-4">
        @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
@include ('partials.icon-cont')
@include ('comics.modal_delete_comic')
@endsection