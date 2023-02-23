<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class PagesController extends Controller
{
    public function index(){
        $productsmenu = config('comics.menu');
        $productsicon = config('comics.icon');
        $productsocial = config('comics.social');
        return view('partials/homepage', compact('productsmenu','productsicon','productsocial'));
    }
}