<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('admins')->insert([
            'name' => 'admin1',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',

        ]);

        DB::table('admins')->insert([
            'name' => 'avivah',
            'email' => 'avivah@gmail.com',
            'password' => 'avivah123',

        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
