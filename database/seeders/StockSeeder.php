<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Product 1

        DB::table('stock')->insert([
            'shop_id' => 1,
            'product_id' => 1,
            'amount' => 30
        ]);

        DB::table('stock')->insert([
            'shop_id' => 2,
            'product_id' => 1,
            'amount' => 15
        ]);

        DB::table('stock')->insert([
            'shop_id' => 3,
            'product_id' => 1,
            'amount' => 10
        ]);

        DB::table('stock')->insert([
            'shop_id' => 4,
            'product_id' => 1,
            'amount' => 5
        ]);

        // Product 2

        DB::table('stock')->insert([
            'shop_id' => 1,
            'product_id' => 2,
            'amount' => 30
        ]);

        DB::table('stock')->insert([
            'shop_id' => 2,
            'product_id' => 2,
            'amount' => 15
        ]);

        DB::table('stock')->insert([
            'shop_id' => 3,
            'product_id' => 2,
            'amount' => 10
        ]);

        DB::table('stock')->insert([
            'shop_id' => 4,
            'product_id' => 2,
            'amount' => 5
        ]);

        // Product 3

        DB::table('stock')->insert([
            'shop_id' => 1,
            'product_id' => 3,
            'amount' => 30
        ]);

        DB::table('stock')->insert([
            'shop_id' => 2,
            'product_id' => 3,
            'amount' => 15
        ]);

        DB::table('stock')->insert([
            'shop_id' => 3,
            'product_id' => 3,
            'amount' => 10
        ]);

        DB::table('stock')->insert([
            'shop_id' => 4,
            'product_id' => 3,
            'amount' => 5
        ]);

        // Product 4

        DB::table('stock')->insert([
            'shop_id' => 1,
            'product_id' => 4,
            'amount' => 30
        ]);

        DB::table('stock')->insert([
            'shop_id' => 2,
            'product_id' => 4,
            'amount' => 15
        ]);

        DB::table('stock')->insert([
            'shop_id' => 3,
            'product_id' => 4,
            'amount' => 10
        ]);

        DB::table('stock')->insert([
            'shop_id' => 4,
            'product_id' => 4,
            'amount' => 5
        ]);

        // Product 5

        DB::table('stock')->insert([
            'shop_id' => 1,
            'product_id' => 5,
            'amount' => 30
        ]);

        DB::table('stock')->insert([
            'shop_id' => 2,
            'product_id' => 5,
            'amount' => 15
        ]);

        DB::table('stock')->insert([
            'shop_id' => 3,
            'product_id' => 5,
            'amount' => 10
        ]);

        DB::table('stock')->insert([
            'shop_id' => 4,
            'product_id' => 5,
            'amount' => 5
        ]);
    }
}
