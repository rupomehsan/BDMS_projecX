<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $admin =  User::create([
            // 'role_id' => 1,
            'name' => 'rupom',
            'email' => 'developerupom@gmail.com',
            'password' => Hash::make('developerrupom')
        ]);

        if($admin){
            
        }
    }
}
