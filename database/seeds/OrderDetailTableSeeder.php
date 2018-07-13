<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            ['orderId'=>2,'productId'=>2,'quantity'=>1],
            ['orderId'=>3,'productId'=>5,'quantity'=>1],
            ['orderId'=>4,'productId'=>7,'quantity'=>1],
            ['orderId'=>5,'productId'=>8,'quantity'=>1],
            ['orderId'=>6,'productId'=>9,'quantity'=>1],
        ]);
    }
}
