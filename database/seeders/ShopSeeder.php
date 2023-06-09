<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            'name' => 'Carls'
        ]);
        DB::table('shops')->insert([
            'name' => 'Ldl'
        ]);
        DB::table('shops')->insert([
            'name' => 'Tesco'
        ]);
        DB::table('shops')->insert([
            'name' => 'Sails'
        ]);
    }
}
