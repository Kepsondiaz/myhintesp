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

            [   'intitule' => 'Génie Electique',
                'departement_id' => 3
            ],
            
            [   'intitule' => 'informatique',
                'departement_id' => 4
            ],

            [   'intitule' => 'Réseaux Et Télécommunications',
                'departement_id' => 4
            ],

            [   'intitule' => 'Génie Mécanique Et Productique',
                'departement_id' => 5
            ],

            [   'intitule' => 'Comptabilité Et Gestion Des Organisa',
                'departement_id' => 6
            ],
            
        ]);
    }
}
