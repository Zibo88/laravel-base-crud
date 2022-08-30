<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');
       
        foreach($comics_array as $comic){
            // richiamo il model creando una nuvo riga
            $comic = new Comic;
            // popolo le righe
            $comic -> title = $comic['title'];
            $comic -> description = $comic['description'];
            $comic -> thumb = $comic['thumb'];
            $comic -> price = $comic['price'];
            $comic -> series = $comic['series'];
            $comic -> sale_date = $comic['sale_date'];
            $comic -> type = $comic['type'];
            // salvo le assegnazioni
            $comic -> save();

        }
        
    }
}
