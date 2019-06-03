<?php

use Illuminate\Database\Seeder;

class RegnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regns')->insert([
            [
                'pays_id' => '2',
                'nom' => 'Bordeaux',
            ],
            [
                'pays_id' => '2',
                'nom' => 'Champagne',
            ],
            [
                'pays_id' => '2',
                'nom' => 'Bourgogne'
            ],
            [
                'pays_id' => '2',
                'nom' => 'Rhône'
            ],
            [
                'pays_id' => '3',
                'nom' => 'Campania'
            ],
            [
                'pays_id' => '4',
                'nom' => 'Ribera del Duero'
            ],
            [
                'pays_id' => '1',
                'nom' => 'Vaud'
            ],
        ]);
    }
}
