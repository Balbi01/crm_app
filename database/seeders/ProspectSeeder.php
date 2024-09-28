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
        $prospect = new Prospect();

        $prospect->legal_name = 'Juan Rulfo';
        $prospect->business_name = 'Juan Rulfo Libros';
        $prospect->email = 'juan.rulfo@mail.com';
        $prospect->rfc = 'RULJU123098';
        $prospect->phone = '1234567890';

        $prospect->save();

        Prospect::factory(10)->create();
    }
}
