<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class filieres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->DB::insert([
            [   'intitule' => 'blabla',
                'departement_id' => '1'
            ],

            [   'intitule' => 'biologie',
                'departement_id' => '1'
            ],

            [   'intitule' => 'civile',
                'departement_id' => '2'
            ],
            
            [   'intitule' => 'blabla',
                'departement_id' => '1'
            ],
        ]);
    }
}
