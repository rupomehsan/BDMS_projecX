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
        $this->call([
            BloodgroupSeeder::class,
            DivisionSeeder::class,
            DistrictSeeder::class,
            StationSeeder::class,
            UserSeeder::class,
            ReligionSeeder::class,
            RoleSeeder::class,
            ]);
    }
}
