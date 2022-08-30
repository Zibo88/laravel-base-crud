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
            // richiamo il model creando una nuova riga
            $new_comic = new Comic;
            // popolo le righe
            $new_comic -> title = $comic['title'];
            $new_comic -> description = $comic['description'];
            $new_comic -> thumb = $comic['thumb'];
            $new_comic -> price = $comic['price'];
            $new_comic -> series = $comic['series'];
            $new_comic -> sale_date = $comic['sale_date'];
            $new_comic -> type = $comic['type'];
            // salvo le assegnazioni
            $new_comic -> save();

        }
        
    }
}
