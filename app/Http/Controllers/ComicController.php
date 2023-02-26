<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     * Visualizzare tutto il contenuto di una determinata tabella.
     * Pagina dove mostro tutti i comic.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //Recupero tutti i record della tabella con metodo ::all().
            $products = Comic::all();
            $productsicon = config('comics.icon');
            $productsocial = config('comics.social');
            //Ritorno della views index contenuta nella cartella comics e compact degli elementi che sono nell'array.
            return view('comics.index', compact('products','productsicon','productsocial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            $productsicon = config('comics.icon');
            $productsocial = config('comics.social');
            return view('comics.create', compact('productsicon','productsocial'));
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
        $productsicon = config('comics.icon');
        $productsocial = config('comics.social');
        return view('comics.show',$single, compact('productsicon','productsocial'));
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
        $productsicon = config('comics.icon');
        $productsocial = config('comics.social');
        return view('comics.edit',$single, compact('productsicon','productsocial'));
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
            'sale_date' => 'max:10',


        ],
        [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare :max caratteri.',
            'description.required' => 'Il descrizione è obbligatoria.',
            'thumb.required' => 'Il link dell\'immagine è obbligatorio.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'series.required' => 'La serie è obbligatoria.',
            'sale_date.required' => 'La data è obbligatoria.',
            'sale_date.max' => 'La data non può superare :max caratteri.',

            


        ])->validate();
        return $validator;
    }
}
