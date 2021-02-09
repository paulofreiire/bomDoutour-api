<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Patient;
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
        Patient::factory(10)->create();
        Consultation::factory(10)->create();
    }
}
