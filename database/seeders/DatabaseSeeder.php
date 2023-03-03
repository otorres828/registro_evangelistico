<?php

namespace Database\Seeders;

use App\Models\CelulasEvangelistica;
use App\Models\Visita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        $this->call(UserSeeder::class);
        CelulasEvangelistica::factory(15)->create();
        Visita::factory(20)->create();

    }
}
