<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Bloodgroup;

class BloodgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bloodgroup::truncate();

        Bloodgroup::create([
            'id' => 1,
            'name' => 'A(posative)',
            'status' => '1',
            
        ]);
        Bloodgroup::create([
            'id' => 2,
            'name' => 'A(negative)',
            'status' => '1',
            
        ]);
        Bloodgroup::create([
            'id' => 3,
            'name' => 'AB(posative)',
            'status' => '1',
            
        ]);
        Bloodgroup::create([
            'id' => 4,
            'name' => 'AB(negative)',
            'status' => '1',
            
        ]);
        Bloodgroup::create([
            'id' => 5,
            'name' => 'O(negative)',
            'status' => '1',
            
        ]);
        Bloodgroup::create([
            'id' => 6,
            'name' => 'O(posative)',
            'status' => '1',
            
        ]);
        Bloodgroup::create([
            'id' => 7,
            'name' => 'B(posative)',
            'status' => '1',
            
        ]);
        Bloodgroup::create([
            'id' => 8,
            'name' => 'B(negative)',
            'status' => '1',
            
        ]);
    }
}
