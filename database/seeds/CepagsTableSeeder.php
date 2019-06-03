<?php

use Illuminate\Database\Seeder;

class CepagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cepags')->insert([
            'nom' => 'Merlot',
        ],
        [
            'nom' => 'Cabernet Sauvignon', 
        ],
        [
            'nom' => 'Cabernet franc',
        ],
        [
            'nom' => 'Petit Verdot',
        ],
        [
            'nom' => 'Pinot Noir',
        ],
        [
            'nom' => 'Chardonnay',
        ]
        );
    }
}
