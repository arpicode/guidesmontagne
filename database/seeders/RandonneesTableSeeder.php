<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RandonneesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('randonnees')->insert([
            [
                'code_Randonnees' => 1,
                'nbPersonnes_Randonnees' => 6,
                'dateDebut_Randonnees' => "2019-05-10",
                'dateFin_Randonnees' => "2019-05-15",
                'code_Guides' => 1,
            ],

            // Données supplémentaires
            [
                'code_Randonnees' => 2,
                'nbPersonnes_Randonnees' => 5,
                'dateDebut_Randonnees' => "2019-07-05",
                'dateFin_Randonnees' => "2019-07-08",
                'code_Guides' => 2,
            ],
        ]);
    }
}
