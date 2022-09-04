<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                "name"       =>    "John Doe",
                "email"      =>    "b@b.b",
                "prenom"      =>    "dfgdgdg",
                "password"        =>    Hash::make('12345678910'),
                "adresse"    =>    "USA, California",
                "ville" =>    "gggg",
                "region" =>    "gggg",
                "societe_name" =>    "gggg",
                "site_web" =>    "gggg",
                "rc" =>    "gggg",
                "ice" =>    "gggg",
                "tel" => "52525"
            ]);

    }
}
