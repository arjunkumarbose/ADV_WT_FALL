<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert([
            'id' => 10,
            'name' => 'iPhone',
            'price' => '1000',
            'quantity' => '2'
        ]);
        DB::table('products')->insert([
            'id' => 11,
            'name' => 'Samsung',
            'price' => '699',
            'quantity' => '5'
        ]);
        DB::table('products')->insert([
            'id' => 12,
            'name' => 'Nintendo',
            'price' => '450',
            'quantity' => '14'
        ]);
    }
}
