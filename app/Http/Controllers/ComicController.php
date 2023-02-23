<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $products = Comic::all();
            $productsmenu = config('comics.menu');
            $productsicon = config('comics.icon');
            $productsocial = config('comics.social');
            return view('comics.index', compact('products','productsmenu','productsicon','productsocial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            $productsmenu = config('comics.menu');
            $productsicon = config('comics.icon');
            $productsocial = config('comics.social');
            return view('comics.create', compact('productsmenu','productsicon','productsocial'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $form_data = $request->all();
            $newComic = new Comic();
            $newComic->title = $form_data['title'];
            $newComic->description = $form_data['description'];
            $newComic->thumb = $form_data['thumb'];
            $newComic->price = $form_data['price'];
            $newComic->series = $form_data['series'];
            $newComic->series = $form_data['type'];
            $newComic->series = $form_data['sale_date'];
            $newComic->save();
            
            return redirect()->route('comics.show',['comic' => $newComic-> id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if($comic){
            $single=[
                'single'=> $comic
            ];
        }
        $productsmenu = config('comics.menu');
        $productsicon = config('comics.icon');
        $productsocial = config('comics.social');
        return view('comics.show',$single, compact('productsmenu','productsicon','productsocial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
