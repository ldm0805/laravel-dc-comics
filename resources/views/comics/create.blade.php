{{-- Pagina form --}}

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between-align-items-center">
                    <h1>inserisci pasta nuova</h1>
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Homepage</a>
                </div>
            </div>
            <div>
                {{-- Visualizza errori --}}
            </div>
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label">title</label>
                    <input type="text" name="title" class="form-control" placeholder="inserisci title">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="inserisci la description"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">thumb</label>
                    <input class="form-control" name="thumb" placeholder="inserisci la thumb">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">price</label>
                    <input class="form-control" name="price" placeholder="inserisci la price">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">series</label>
                    <input class="form-control" name="series" placeholder="inserisci la series">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">type</label>
                    <input class="form-control" name="type" placeholder="inserisci la type">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">sale_date</label>
                    <input class="form-control" name="sale_date" placeholder="inserisci la sale_date">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success">save</button>
                </div>     
            </form>
        </div>
    </div>

@endsection