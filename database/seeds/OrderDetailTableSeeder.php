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
            ['orderId'=>12,'productId'=>62,'quantity'=>1],
            ['orderId'=>32,'productId'=>82,'quantity'=>1],
            ['orderId'=>42,'productId'=>162,'quantity'=>1],
            ['orderId'=>52,'productId'=>82,'quantity'=>1],
        ]);
    }
}
