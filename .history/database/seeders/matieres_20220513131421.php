<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class matieres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([
          ['nom_matiere' => 'chimie',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'semestre1',
          'filiere_id'=> 1 
          ],
          
          ['nom_matiere' => 'Biologie',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'semestre1',
          'filiere_id'=> 1 
          ],
          
          ['nom_matiere' => 'civil',
          'niveau_matiere' => 'dic2-master1',
          'semestres' => 'semestre',
          'filiere_id'=> 3 
          ],

          ['nom_matiere' => 'Biologie',
          'niveau_matiere' => 'dic1-licence',
          'filiere_id'=> 3 
          ],

          
        ]);
    }
}
