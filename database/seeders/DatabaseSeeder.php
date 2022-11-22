<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \DB::table('roles')->insert([
            'name' => 'user'
        ]);

        \DB::table('roles')->insert([
            'name' => 'admin'
        ]);

        \DB::table('roles')->insert([
            'name' => 'nerd'
        ]);

        \DB::table('users')->insert([
            'name' => 'Fons',
            'email' => 'fons@gmail.boys',
            'password' => 'gayseks',
            'role_id' => 1,
        ]);

        \DB::table('users')->insert([
            'name' => 'Axl',
            'email' => 'axl@gmail.men',
            'password' => 'kattenvrouwen',
            'role_id' => 3,
        ]);

        \App\Models\User::factory(1000)->create();
    }
}
