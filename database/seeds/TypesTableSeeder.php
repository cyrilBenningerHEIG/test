<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'type' => 'vin rouge',
            ],
            [
                'type' => 'vin blanc',
            ],
            [
                'type' => 'vin mousseux',
            ],
        ]);
    }
}
