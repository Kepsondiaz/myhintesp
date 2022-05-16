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
           ['nom' => 'Génie Chimique et Biologique Appliquée'],
           ['nom' => 'Génie Civile'], 
           ['nom' => 'Génie Electrique'], 
           ['nom' => 'Génie Informatique'], 
           ['nom' => 'Génie Mécanique'], 
           ['nom' => 'Gestion'], 
        ]);
    }
}
