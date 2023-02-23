@extends('layouts.app')
@section('content')
<div class="container-fluid bg_gray">
    <section>
        <div class="album">
            @foreach($products as $albumcover)
                    @include('/partials/detail_card')
                    
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{route('comics.create')}}" class="btn btn-primary">aggiungi comic</a>
        </div>
    </section>
</div>
@endsection