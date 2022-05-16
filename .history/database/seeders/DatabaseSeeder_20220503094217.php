<?php

namespace Database\Seeders;


use Database\Seeders\departements;
use Database\Seeders\filieres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(departements::class);

        $this->call(filieres::class);
        
        // \App\Models\User::factory(10)->create();
    }
}
