<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->delete();

        DB::table('users')->insert([
        ['firstname'=> 'Richard',
         'lastname' => 'Garcia',
         'username' => 'fly_moe',
         'email'    => 'rrgarcia@gmail.com',
         'password' => Hash::make('family99')
        ],
        ['firstname'=> 'John',
         'lastname' => 'Stevens',
         'username' => 'dardlord',
         'email'    => 'bob@gmail.com',
         'password' => Hash::make('florida')],
        ]);

    }
}
