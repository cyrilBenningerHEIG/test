<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // données de test

        $this->call(ProdusTableSeeder::class);
        $this->call(PaysTableSeeder::class);
        $this->call(CondisTableSeeder::class);
        $this->call(CepagsTableSeeder::class);
        $this->call(AppelsTableSeeder::class);
        $this->call(FrmtsTableSeeder::class);
        $this->call(RegnsTableSeeder::class);
        $this->call(PrixesTableSeeder::class);
        $this->call(VinsTableSeeder::class);
    }
}
