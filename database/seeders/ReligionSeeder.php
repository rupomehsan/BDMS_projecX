<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Religion;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::truncate();
        Religion::create([
            'name' => 'Islam',
        ]);
        Religion::create([
            'name' => 'Christianity',
        ]);
        Religion::create([
            'name' => 'Hinduism',
        ]);
        Religion::create([
            'name' => 'Nonreligious',
        ]);
        Religion::create([
            'name' => 'Other',
        ]);
    }
}
