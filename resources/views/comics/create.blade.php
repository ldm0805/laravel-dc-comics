{{-- Pagina form create--}}

@extends('layouts.app')
@section('content')
<div class="bg-create">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-center align-items-center">
                    <h2>Aggiungi un nuovo comic</h2>
                </div>
            </div>
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                    @error('title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Descrizione</label>
                    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
                    @error('description')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Immagine</label>
                    <input class="form-control" name="thumb" placeholder="Inserisci l'immagine">
                    @error('thumb')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Prezzo</label>
                    <input type="number" step="0.01" class="form-control" name="price" placeholder="Inserisci il prezzo">
                    @error('price')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Serie</label>
                    <input class="form-control" name="series" placeholder="Inserisci la Serie">
                    @error('series')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Tipo</label>
                    <input class="form-control" name="type" placeholder="Inserisci la tipologia">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Data di uscita</label>
                    <input type="date" class="form-control datepicker" name="sale_date" placeholder="Inserisci la data di uscita">
                    @error('sale_date')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
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
@endsection