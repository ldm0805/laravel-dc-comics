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
     * Restituisce una view, in questo caso create.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            //Recupero i dati per la configurazione
            $productsicon = config('comics.icon');
            $productsocial = config('comics.social');
            //Passo i dati
            return view('comics.create', compact('productsicon','productsocial'));
        }
    }

    /**
     * Store a newly created resource in storage.
     * Recuperiamo i dati dalla form e li mostriamo nella view chiamata comics.show.
     * Inseriamo nel model una propietà prodected al quale assegnamo un'array di stringe [singole_propietà];
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Creazione di una nuova istanza della classe Comic
        $newComic = new Comic();
        
        // Validazione dei dati inseriti dal form
        $form_data = $this->validation($request->all());
         
        // Riempimento della nuova istanza con i dati validati dal form
        // Proprietà protected $fillable nel Model Comic
        $newComic->fill($form_data);

        // Salvataggio della nuova istanza nel database
        $newComic->save();

        // Reindirizzamento alla view.show
        return redirect()->route('comics.show',['comic' => $newComic-> id]);
    }

    /**
     * Display the specified resource.
     * Visualizzazione del singolo comic con i relativi dati.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Metodo findOrFail, se non trova il comic restituisce in automatico l'errore 404.
        $single = Comic::findOrFail($id);
        $productsicon = config('comics.icon');
        $productsocial = config('comics.social');
        return view('comics.show', compact('single','productsicon','productsocial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
       {

        //Metodo findOrFail, se non trova il comic restituisce in automatico l'errore 404.
        $single = Comic::findOrFail($id);
        $productsicon = config('comics.icon');
        $productsocial = config('comics.social');
        return view('comics.edit', compact('single','productsicon','productsocial'));
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

       //Metodo findOrFail, se non trova il comic restituisce in automatico l'errore 404.
        $newComic = Comic::findOrFail($id);

        //Valido i dati recuperati nella form con il metodo validation.
        $form_data = $this->validation($request->all());

        //Aggiorno i dati del comic con i nuovi.
        $newComic->update($form_data);

        //Reindirizzo alla pagina di visualizzazione del comic.
        return redirect()->route('comics.show',['comic' => $newComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     * Eliminazione del comic
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //Metodo findOrFail, se non trova il comic restituisce in automatico l'errore 404.
        $comic = Comic::findOrFail($id);

        //Elimino il comic dal database.
        $comic->delete();

        //Reindirizzamento alla pagina dei comics.
        return redirect()->route('comics.index');
    }

    //Validazione dei dati
    private function validation($data){
        $validator = Validator::make($data,[
            // nomeparametro => regole di validazione separate da | (or).
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'nullable|date_format:Y-m-d',
        ],
        [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare :max caratteri.',
            'description.required' => 'Il descrizione è obbligatoria.',
            'thumb.required' => 'Il link dell\'immagine è obbligatorio.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'series.required' => 'La serie è obbligatoria.',
            'sale_date.required' => 'La data è obbligatoria.',
            'sale_date.date_format' => 'La data inserita non è nel formato corretto',
        ])->validate();
        return $validator;
    }
}
