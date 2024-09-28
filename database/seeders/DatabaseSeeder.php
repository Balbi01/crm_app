<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Método encargado de llamar a los seeders de la aplicación,
     * que a su vez se encargan de poblar la base de datos mediante las factorías.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProspectSeeder::class
        ]);
    }
}
