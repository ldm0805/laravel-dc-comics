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
            // $form_data = $request->all();
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
            'type' => 'required',
            'sale_date' => 'required'

        ],
        [
            'title.required' => 'Il title è obbligatorio',
            'title.max' => 'il tiolo non può superare :max caratteri',
            'description.required' => 'Il description è obbligatorio',
            'description.max' => 'il description non può superare :max caratteri',
            'price.required' => 'la price è obbligatorio',
            'price.max' => 'la price non può superare :max caratteri',
            'series.required' => 'Il series è obbligatorio',
            'series.max' => 'il series non può superare :max caratteri',
            'type.required' => 'Il type è obbligatorio',
            'type.max' => 'il type non può superare :max caratteri',
            'sale_date.required' => 'Il sale_date è obbligatorio',
            'sale_date.max' => 'il sale_date non può superare :max caratteri',

        ])->validate();
        return $validator;
    }
}
