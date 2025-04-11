<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);
         User::create([
            'name' => 'Toko Bu Joni',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);

        

        User::factory()->count(5)->create([
            'role' => 'user'
        ]);
    }
}
