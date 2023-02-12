<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
 
    public function run()
    {
        User::create([
            'name'=>'Oliver Andres Torres Rivero',
            'email'=>'olivertorres1997@gmail.com',
            'password'=>bcrypt('26269828')
        ]);

    }
}
