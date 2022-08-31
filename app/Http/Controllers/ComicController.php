<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// includo il model
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // utilizzo il model
        $comics = Comic::all();

        // passo i dati alla pagina dove verranno visualizzati
        $data = [
            'comics' => $comics,
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validazione 
        $request -> validate([
            // nome colonna -> parametri (altre validazioni sulla documentazione)
            'title' => 'required | max:200',
            'description' => 'max:60000',
            'price' => 'required | max:5',
            'series' => 'max:500',
            'type' => 'required | max:500'

        ]);
    
        // leggo i dati
        $form_data = $request->all();
        dump($form_data);

        

        // creo una nuova riga
        $add_comic = new Comic;

        // popolo le righe assegnando il valore
        $add_comic -> title = $form_data['title'];
        $add_comic -> description = $form_data['description'];
        $add_comic -> thumb = $form_data['thumb'];
        $add_comic -> price = $form_data['price'];
        $add_comic -> series = $form_data['series'];
        $add_comic -> sale_date = $form_data['sale_date'];
        $add_comic -> type = $form_data['type'];

        // salvo i dati
        $add_comic -> save();

        // reindirizzo l'utente verso la pagina show con l'id di riferimento (secondo parametro dentro route:list)
        return redirect()-> route('comics.show', ['comic' => $add_comic->id ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // creo il collegamento con l'id attraverso il model così da mostrare il singolo elemento
        $comics = Comic::FindOrFail($id);

        $data = [
            'comics' => $comics
        ];
        // assegno la view dove mostrare i dati
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // assegno alla variabile il valore $id attraverso il model
        $comic = Comic::FindOrFail($id);
        // dd($comic);

        // trasferisco i dati
        $data = [
            'comic' => $comic
        ];

        return view('comics.edit',$data);
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
        // richiedo tutti i dati del form compilato 
        $form_data = $request->all();
        // dd($form_data) ;

        // ricerco i comic attraverso l'id, richiamando il model
        $change_comic = Comic::FindOrFail($id);

        // modifico la riga attraverso l'assegnazione del mothod update()
        $change_comic->update($form_data)
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
