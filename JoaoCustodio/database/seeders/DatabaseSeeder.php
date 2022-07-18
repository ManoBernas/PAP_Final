<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Rodrigo Bernardino",
            "email" => "rodrigobernardino03@gmail.com",
            "password" => Hash::make("rbernardino5")
        ]);

        Categoria::create([
            "designacao" => "Carros",
            "tipo" => 1
        ]);

        Categoria::create([
            "designacao" => "Motas",
            "tipo" => 1
        ]);

        Categoria::create([
            "designacao" => "Pessoas",
            "tipo" => 1
        ]);
    }
}
