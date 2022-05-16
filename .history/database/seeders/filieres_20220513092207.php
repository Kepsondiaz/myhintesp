<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class filieres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->insert([
            [   'intitule' => 'Biologie Appliquée',
                'departement_id' => 1
            ],

            [   'intitule' => 'Industries Chimiques Et AgroAlimentaires',
                'departement_id' => 1
            ],

            [   'intitule' => 'Génie Civile',
                'departement_id' => 2
            ],

            [   'intitule' => 'Génie ',
                'departement_id' => 3
            ],

            [   'intitule' => 'génie-elec',
                'departement_id' => 3
            ],

            [   'intitule' => 'informatique',
                'departement_id' => 4
            ],

            [   'intitule' => 'Réseaux Et Télécommunications',
                'departement_id' => 4
            ],

            [   'intitule' => 'meca',
                'departement_id' => 5
            ],

            [   'intitule' => 'génie-méca',
                'departement_id' => 5
            ],

            [   'intitule' => 'gest',
                'departement_id' => 6
            ],
            
        ]);
    }
}
