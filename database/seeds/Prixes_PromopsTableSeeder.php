<?php

use Illuminate\Database\Seeder;

class Prixes_PromopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prixes_promops')->insert([
            [
                'prix_id' => '7',
                'promop_id' => '1',
            ],
            [
                'prix_id' => '13',
                'promop_id' => '2',
            ],
        ]);
    }
}
