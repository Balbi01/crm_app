<?php

namespace Database\Seeders;

use App\Models\Prospect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

/**
 * Clase seeder de la tabla prospectos.
 *
 */
class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prospect::factory(20)->create();
    }
}
