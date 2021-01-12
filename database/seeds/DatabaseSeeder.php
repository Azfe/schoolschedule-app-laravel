<?php

namespace Database\Seeders;

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
        //llama a los seeders personalizados
        $this->call([
            StudentSeeder::class,
            TeacherSeeder::class
        ]);
    }
}
