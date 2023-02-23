{{-- Pagina 2 --}}
@extends('layouts.app')
@section('content')
{{-- Immagine di copertina del fumetto sul Jumbo --}}
<div class="single-card">
    <div class="position">
        <div class="view">
            <img class="thumb" src="{{$single['thumb']}}" alt="{{$single['title']}}">
            <div>View Gallery</div>
            <div class="comic">{{$single['type']}}</div>
        </div>
    </div>
    {{-- Descrizione del fumetto con prezzo e disponibilità --}}
    <div class="d-flex">
        <div class="title-desc">
            <div>
                <h4 class="upbold">{{$single['title']}}</h4>
            </div>
            <div class="green-cont">
                <div class="avaible col-7">
                    <span class="upbold">U.S. Price: <span class="text-white">{{$single['price']}}</span></span>
                    <span class="upbold">Avaiable</span>
                </div>
                <div class="check-avaible col-3">
                    <span class="text-white">Check Availability</span>
                </div>
            </div>
            
            <div class="col-10">
                <p>{{$single['description']}}</p>
            </div>
        </div>
        
        <div class="advertisement">
            <span>Advertisement</span>
            <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
        </div>
    </div>
</div>
{{-- Sezione con talent e specs --}}
<div class="talentspecscont">
    <div class="talentspecs">
        <div class="talent col-6">
            <h2>Talent</h2>
            <p>Art by: <a href="#"> {{$single['artists']}} </a></p>
            <p>Written by: <a href="#"> {{$single['writers']}} </a></p>
        </div>
        <div class="specs col-4">
            <h2>Specs</h2>
            <p>Series: <a href="#">{{$single['series']}}</a></p>
            <p>U.S. Price: {{$single['price']}}</p>
            <p>On Sale Date: {{ changeDate($single) }}</p>
        </div>
    </div>
</div>

<div class="image-cont">
    <div class="col-3 flex-image">
        <h6>
            Digital comics
        </h6>
        <div class="icon phone-cont">
        </div>
    </div>
    <div class="col-3 flex-image">
        <h6>
            Shop Dc
        </h6>
        <div class="icon tshirt-cont">
        </div>
    </div>
    <div class="col-3 flex-image">
        <h6>
            Comic Shop Locator
        </h6>
        <div class="icon position-cont">
        </div>
    </div>
    <div class="col-3 flex-image">
        <h6>
            Subscriptions
        </h6>
        <div class="icon card-cont">
        </div>
    </div>

</div>
        
@endsection