<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::created([
            'name' => 'Admin',
            'email' => 'raja@pcr.ac.id',
            'password' => Hash::make('rajamuiz')
        ]);
    }
}
