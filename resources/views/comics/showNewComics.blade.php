@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 py-3">
            <div class="d-flex justify-content-between-align-items-center">
                <h1>visualizza {{$albumcover['thumb']}}</h1>
                <a href="{{route('comics.index')}}" class="btn btn-primary">torna indietro</a>
            </div>
        </div>
        @if(!empty($albumcover['image']))
        <img src="{{$albumcover['image']}}" alt="">
        @else
        <h5>immagine non disp</h5>
        @endif
        <table class="table">
            <tbody>
                <tr>
                    <th>titolo</th>
                    <td> {{$albumcover['title']}}</td>
                </tr>
                <tr>
                    <th>tipo</th>
                    <td> {{$albumcover['slug']}}</td>
                </tr>
                <tr>
                    <th>cottura</th>
                    <td> {{$albumcover['sale_date']}}</td>
                </tr>
                <tr>
                    <th>peso</th>
                    <td> {{$albumcover['price']}}</td>
                </tr>
                <tr>
                    <th>peso</th>
                    <td> {{$albumcover['type']}}</td>
                </tr>
                <tr>
                    <th>peso</th>
                    <td> {{$albumcover['artists']}}</td>
                </tr>
                <tr>
                    <th>peso</th>
                    <td> {{$albumcover['price']}}</td>
                </tr>
                <tr>
                    <th>descrizione</th>
                    <td>
                        @if(!empty($single['description']))
                        {{$single['description']}}
                        @else
                        <h5>descrizione non disp</h5>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection