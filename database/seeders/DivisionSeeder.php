<?php

namespace Database\Seeders;
use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::truncate();

        Division::create([
            'name' => 'Dhaka-ঢাকা',
            'status' =>1
        ]);
        Division::create([
            'name' => 'Barisal-বরিশাল',
            'status' =>1
        ]);
        Division::create([
            'name' => 'Khulna-খুলনা',
            'status' =>1
        ]);
        Division::create([
            'name' => 'Rajshahi-রাজশাহী',
            'status' =>1
        ]);
        Division::create([
            'name' => 'Rangpur-রংপুর',
            'status' =>1
        ]);
        Division::create([
            'name' => 'Sylhet-সিলেট',
            'status' =>1
        ]);
        Division::create([
            'name' => 'Mymensingh-ময়মনসিংহ',
            'status' =>1
        ]);
        Division::create([
            'name' => 'Chittagong - চট্টগ্রাম',
            'status' =>1
        ]);
    }
}
