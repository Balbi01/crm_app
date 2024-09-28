<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Clase seeder de la tabla usuarios.
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'David Castañeda';
        $user->email = 'omar.ibanez343@gmail.com';
        $user->password = bcrypt('admin123');

        $user->save();

        User::factory(10)->create();
    }
}
