<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::Create([
            'name'=>'Amien Yahya',
            'email'=>'amienyahya@gmail.com',
            'email_verified_at'=> now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
