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
                'departement_id' => 1
            ],

            [   'intitule' => 'biologie',
                'departement_id' => 1
            ],

            [   'intitule' => 'civile',
                'departement_id' => 2
            ],
            
            [   'intitule' => 'génie',
                'departement_id' => 2
            ],

            [   'intitule' => 'elec',
                'departement_id' => 3
            ],

            [   'intitule' => 'génie-elec',
                'departement_id' => 3
            ],

            [   'intitule' => 'informatique',
                'departement_id' => 4
            ],

            [   'intitule' => 'réseau télécom',
                'departement_id' => '4
            ],

            [   'intitule' => 'meca',
                'departement_id' => '5'
            ],

            [   'intitule' => 'génie-méca',
                'departement_id' => '5'
            ],

            [   'intitule' => 'gest',
                'departement_id' => '6'
            ],
            
        ]);
    }
}
