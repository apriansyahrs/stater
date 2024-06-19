<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@dev.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ])->syncRoles('Super Admin');

        User::create([
            'name' => 'User',
            'email' => 'user@dev.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password'),
        ])->syncRoles('User');


    }
}
