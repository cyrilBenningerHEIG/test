<?php

use Illuminate\Database\Seeder;

class AppelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appels')->insert([
            'libelle' => 'Haut-Médoc',
        ],
        [
            'libelle' => 'Corton-Bressandes', 
        ],
        );
    }
}
