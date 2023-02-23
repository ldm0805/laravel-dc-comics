{{-- Pagina 1 --}}
@extends('layouts.app')
@section('content')
    {{-- Contenitore e stampa di tutti i fumetti --}}
    <div class="container-fluid bg_gray">
        <section>
            <div class="album">
                @foreach($products as $albumcover)
                        @include('/partials/detail_card')
                @endforeach
            </div>
            <div class="text-center">
                <button class="button_load">Load more</button>
            </div>
        </section>
    </div>
        @include('partials.icon-cont')
    @endsection
