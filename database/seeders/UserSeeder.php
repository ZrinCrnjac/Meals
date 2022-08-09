<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userTest = ['name' => 'Zrin',
                    'email' => 'zrin@mail.com',
                    'password' => Hash::make('12345678'),
                    'created_at' => now()];
        
        DB::table('users')->insert($userTest);

        User::factory()->count(10)->create();
    }
}
