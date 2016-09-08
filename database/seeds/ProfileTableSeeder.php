<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('profile')->delete();

        $users = [
            ['id' => 1, 'name' => 'Stephan de Vries', 'username' => 'stephan', 'email' => 'stephan-v@gmail.com', 'password' => bcrypt('carrotz124')],
            ['id' => 2, 'name' => 'John doe', 'username' => 'johnny', 'email' => 'johndoe@gmail.com', 'password' => bcrypt('carrotz1243')],
        ];

        foreach($users as $user){
		    profile::create($user);
		}
    }
}
