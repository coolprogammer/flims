<?php

use Illuminate\Database\Seeder;

use App\Flim;

class FlimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $flim = new Flim();
        
	    $flim->name = 'The Movie';
	    $flim->description = 'The misadventures of an Indian film director as he attempts to make the leap from Bollywood to Hollywood.';
        $flim->realease_date = \Carbon\Carbon::today();
        $flim->rating = 1;
        $flim->ticket_price = 500;
        $flim->country = "Pakistan";
        $flim->genre = "action";
        $flim->photo = 'images/the-movie.jpg';
        $flim->save();
        
    }
}
