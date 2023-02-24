<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            $form_data = $this->validation($request->all());
            $newComic = new Comic();

            $newComic->fill($form_data);

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
        $comic = Comic::find($id);
        if($comic){
            $single=[
                'single'=> $comic
            ];
        }
        $productsmenu = config('comics.menu');
        $productsicon = config('comics.icon');
        $productsocial = config('comics.social');
        return view('comics.edit',$single, compact('productsmenu','productsicon','productsocial'));
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
        $newComic = Comic::findOrFail($id);

        $form_data = $this->validation($request->all());
        $newComic->update($form_data);
        return redirect()->route('comics.show',['comic' => $newComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
    private function validation($data){
        $validator = Validator::make($data,[
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',

        ],
        [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare :max caratteri.',
            'description.required' => 'Il descrizione è obbligatoria.',
            'thumb.required' => 'Il link dell\'immagine è obbligatorio.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'series.required' => 'La serie è obbligatoria.',

        ])->validate();
        return $validator;
    }
}
