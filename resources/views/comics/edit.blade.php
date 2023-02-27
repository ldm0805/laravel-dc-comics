{{-- Pagina form modifica --}}

@extends('layouts.app')
@section('content')
<div class="bg-create">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-center align-items-center">
                    <h2>Modifica Comic: {{ $single->title}}</h2>
                </div>
            </div>
            <div>
                <form action="{{route('comics.update', $single->id)}}" method="POST">
                    @csrf
                    @method('PUT') 
                    <div class="form-group mb-3">
                        <label class="control-label">Titolo</label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo "  value="{{old('title') ?? $single->title}}">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Descrizione</label>
                        <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Inserisci la descrizione">{{old('description') ?? $single->description}}</textarea>
                        @error('description')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Immagine</label>
                        <input class="form-control" name="thumb" placeholder="Inserisci l'immagine" value="{{old('thumb') ?? $single->thumb}}">
                        @error('thumb')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Prezzo</label>
                        <input type="number" step="0.01" class="form-control" name="price" placeholder="Inserisci il prezzo" value="{{old('price') ?? $single->price}}">
                        @error('price')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Serie</label>
                        <input class="form-control" name="series" placeholder="Inserisci la Serie" value="{{old('series') ?? $single->series}}">
                        @error('series')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Tipo</label>
                        <input class="form-control" name="type" placeholder="Inserisci la tipologia" value="{{old('type') ?? $single->type}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Data di uscita</label>
                        <input type="date" class="form-control datepicker" name="sale_date" placeholder="Inserisci la Data di uscita" value="{{old('sale_date') ?? $single->sale_date}}">
                        @error('sale_date')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <div class="col-but">
                            <button type="submit" class="footer-button">Salva</button>
                        </div>
                    </div>     
                </form>
            </div>
        </div>
    </div>
</div>



@endsection