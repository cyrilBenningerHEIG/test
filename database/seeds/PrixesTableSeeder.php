<?php

use Illuminate\Database\Seeder;

class PrixesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prixes')->insert([
            [
                'prixht' => 36,
            ],
            [
                'prixht' => 15,
            ],
            [
                'prixht' => 16,
            ],
            [
                'prixht' => 26,
            ],
            [
                'prixht' => 22,
            ],
            [
                'prixht' => 64,
            ],
        ]);
    }
}
