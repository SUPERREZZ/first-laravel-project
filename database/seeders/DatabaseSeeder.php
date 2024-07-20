<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::query()->create([
            'nama_depan' => 'reza',
            'nama_belakang' => 'ghiyats',
            'jabatan' => 'CTO',
            'email' => 'rezaghiyats@gmail.com',
            'password' => Hash::make('password'),

        ]);
        $this->call(CategorySeeder::class);
    }
}