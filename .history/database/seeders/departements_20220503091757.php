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
           ['name' => 'Génie Chimique et Biologique'], 
           ['name' => 'Génie Electrique'], 
           ['name' => 'Génie Informatique'], 
           ['name' => ''], 
           ['name' => ''], 
        ]);
    }
}
