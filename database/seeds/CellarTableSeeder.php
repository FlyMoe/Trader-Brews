<?php

use App\Cellar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CellarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('cellars')->delete();

        $cellars = [
            ['user_id'     => '1',
             'name'        => 'Hunahpu', 
             'brewery'     => 'Cigar City',
             'size'        => '20 oz',
             'bottle_date' => '2016-09-01',
             'in_cellar'   => '2',
             'in_fridge'   => '1'
            ],
            ['user_id'     => '2',
             'name'        => 'Darklord', 
             'brewery'     => '3Floyds',
             'size'        => '20 oz',
             'bottle_date' => '2016-01-15',
             'in_cellar'   => '4',
             'in_fridge'   => '0'
            ],
        ];

        foreach($cellars as $cellar){
            Cellar::create($cellar);
        }

    }
}
