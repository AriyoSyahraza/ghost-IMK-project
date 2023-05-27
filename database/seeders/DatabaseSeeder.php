<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'admin'
        ]);
        User::create([
            'name' => 'Uariyo',
            'email' => 'uariyo@gmail.com',
            'password' => bcrypt('ariyo123'),
            'level' => 'user'
        ]);

        User::create([
            'name' => 'Aariyo',
            'email' => 'aariyo@gmail.com',
            'password' => bcrypt('ariyo123'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'Oariyo',
            'email' => 'oariyo@gmail.com',
            'password' => bcrypt('ariyo123'),
            'level' => 'owner'
        ]);

        Post::factory(100)->create();
    }
}
