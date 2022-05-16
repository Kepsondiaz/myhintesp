<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departements extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departements')->insert([
           ['' => 'Génie Chimique et Biologique Appliquée'],
           ['' => 'Génie Civile'], 
           ['' => 'Génie Electrique'], 
           ['' => 'Génie Informatique'], 
           ['' => 'Génie Mécanique'], 
           ['' => 'Gestion'], 
        ]);
    }
}
