<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
	    $user = new User();
	    $user->name = 'Asif Raza';
		$user->email = 'asif@asif.com';
	    $user->password = bcrypt('asif1234');
        $user->save();
        $user = new User();
	    $user->name = 'Asif Panhwar';
		$user->email = 'panhwar64@gmail.com';
	    $user->password = bcrypt('asif1234');
	    $user->save();
	    
    }
}
