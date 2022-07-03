<?php

namespace Database\Seeders;

use App\Models\commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commande::create([
            "nom"=>"Rchid",
            "adresse"=>"beb saadoun",
            "phone"=>"24982361",
            "prix"=>100,

        ]);
    }
}
