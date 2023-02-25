{{-- Nuova view per la visualizzazione dei comics --}}

@extends('layouts.app')
@section('content')
<div class="homepage-cont">
    <div class="homepage">
        <h1>Benvenuto nel mondo dei comics</h1>
    </div>
    <div class="col-but">
        <a href="{{route('comics.index')}}" >
            <button class="footer-button">Esplora i nostri comic</button>
        </a>
        <a href="{{route('comics.create')}}" >
            <button class="footer-button">Aggiungi un comic</button>
        </a>
    </div>
</div>
@include ('partials.icon-cont')
@endsection