<?php

use Illuminate\Database\Seeder;
use database\seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        Eloquent::unguard();
        $this->call('UserTableSeeder');
        $this->call('CellarTableSeeder');
    }
}
