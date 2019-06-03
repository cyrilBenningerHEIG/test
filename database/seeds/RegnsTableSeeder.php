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
        ]);
    }
}
