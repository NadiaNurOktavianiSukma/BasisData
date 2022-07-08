<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
        User::create([
            'name' => 'Nadia Nur Oktaviani Sukma',
            'level' => 'admin',
            'email' => 'admin_kost@admin.com',
            'password' => bcrypt('nadiacantik123'),
            'remember_token' => Str::random(60),
        ]);
    }
}