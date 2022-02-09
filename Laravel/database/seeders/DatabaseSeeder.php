<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Taller;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<15;$i++){
            User::factory()->create();
            Curso::factory()->create();
            Taller::factory()->create();
        }
        
    }
}
