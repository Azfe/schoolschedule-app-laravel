<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeachertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::factory(10)->create();
    }
}
