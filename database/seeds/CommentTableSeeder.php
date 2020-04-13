<?php

use Illuminate\Database\Seeder;

use App\Comment;
use App\User;
use App\Flim;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $flim = Flim::where('name', 'The Movie')->first();
	    $user  = User::where('name', 'Asif Raza')->first();
       
        $comment = new Comment();        
	    $comment->name = 'The Movie';
	    $comment->comment = 'The misadventures of an Indian film director as he attempts to make the leap from Bollywood to Hollywood.';
        $comment->user_id = $user->id;
        $comment->flim_id = $flim->id;
        $comment->save();

        $flim = Flim::where('name', 'The Mask')->first();       
        $comment = new Comment();        
	    $comment->name = 'Mask Man';
	    $comment->comment = 'The misadventures of an Indian film director as he attempts to make the leap from Bollywood to Hollywood.';
        $comment->user_id = $user->id;
        $comment->flim_id = $flim->id;
        $comment->save();


        $flim = Flim::where('name', 'Joker')->first();       
        $comment = new Comment();        
	    $comment->name = 'Joker';
	    $comment->comment = 'The misadventures of an Indian film director as he attempts to make the leap from Bollywood to Hollywood.';
        $comment->user_id = $user->id;
        $comment->flim_id = $flim->id;
        $comment->save();
        
    }
}
