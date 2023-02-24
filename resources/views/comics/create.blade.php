{{-- Pagina form --}}

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
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                    @error('title')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Descrizione</label>
                    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
                     @error('description')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Immagine</label>
                    <input class="form-control" name="thumb" placeholder="Inserisci l'immagine">
                     @error('thumb')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Prezzo</label>
                    <input class="form-control" name="price" placeholder="Inserisci il prezzo">
                     @error('price')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Serie</label>
                    <input class="form-control" name="series" placeholder="Inserisci la Serie">
                     @error('series')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Tipo</label>
                    <input class="form-control" name="type" placeholder="Inserisci la Tipo">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Data di uscita</label>
                    <input type="date" class="form-control" name="sale_date" placeholder="Inserisci la Data di uscita">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>     
            </form>
        </div>
    </div>

@endsection