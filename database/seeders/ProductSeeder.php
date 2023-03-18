<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'milk'
        ]);
        DB::table('products')->insert([
            'name' => 'rice'
        ]);
        DB::table('products')->insert([
            'name' => 'meat'
        ]);
        DB::table('products')->insert([
            'name' => 'chicken'
        ]);
        DB::table('products')->insert([
            'name' => 'fruit'
        ]);
    }
}
