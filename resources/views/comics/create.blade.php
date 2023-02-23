@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between-align-items-center">
                    <h1>inserisci pasta nuova</h1>
                    <a href="{{route('pastas.index')}}" class="btn btn-primary">torna indietro</a>
                </div>
            </div>
            <div>
                {{-- Visualizza errori --}}
            </div>
            <form action="{{route('pastas.show')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label">titolo</label>
                    <input type="text" name="titolo" class="form-control" placeholder="inserisci titolo">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">titolo</label>
                    <select class="form-control" name="tipo">
                        <option value="lunga">lunga</option>
                        <option value="corta">corta</option>
                        <option value="cortissima">cortissima</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">peso</label>
                    <input type="text" name="peso" class="form-control" placeholder="inserisci peso">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">cottura</label>
                    <input type="text" name="cottura" class="form-control" placeholder="inserisci cottura">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">descrizione</label>
                    <textarea class="form-control" name="descrizione" cols="30" rows="10" placeholder="inserisci la descrizione"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">immagine</label>
                    <textarea class="form-control" name="image" cols="30" rows="10" placeholder="inserisci la immagine"></textarea>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success">save</button>
                </div>
            </form>
@endsection