{{-- Pagina form modifica --}}

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between-align-items-center">
                    <h1>Un nuovo fumetto</h1>
                    <a href="{{route('homepage')}}" >
                        <button class="footer-button">Homepage</button>
                    </a>
                </div>
            </div>
            <div>
                {{-- Visualizza errori --}}
            </div>
            <form action="{{route('comics.update'), $comic->id}}" method="POST">
                @csrf
                @method('PUT') 
                <div class="form-group mb-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo "  value="{{old('title') ?? $comic->title}}">
                    @error('title')
                    <div>{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Descrizione</label>
                    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Immagine</label>
                    <input class="form-control" name="thumb" placeholder="Inserisci l'immagine" value="{{old('thumb') ?? $comic->thumb}}">
                     @error('thumb')
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Prezzo</label>
                    <input class="form-control" name="price" placeholder="Inserisci il prezzo" value="{{old('price') ?? $comic->price}}">
                     @error('price')
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Serie</label>
                    <input class="form-control" name="series" placeholder="Inserisci la Serie" value="{{old('series') ?? $comic->series}}">
                     @error('series')
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Tipo</label>
                    <input class="form-control" name="type" placeholder="Inserisci la Tipo" value="{{old('type') ?? $comic->type}}">
                     @error('type')
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Data di uscita</label>
                    <input type="date" class="form-control" name="sale_date" placeholder="Inserisci la Data di uscita" value="{{old('sale_date') ?? $comic->sale_date}}">
                     @error('sale_date')
                        <div>{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>     
            </form>
        </div>
    </div>

@endsection