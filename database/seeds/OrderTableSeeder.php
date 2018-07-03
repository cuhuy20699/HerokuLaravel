<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['UserId'=>3,'product'=>'Iphone X','price'=>18000000],
            ['UserId'=>6,'product'=>'Samsung Galaxy','price'=>1000000],
            ['UserId'=>7,'product'=>'Sony','price'=>12000000],
            ['UserId'=>7,'product'=>'Iphone 6s','price'=>8000000],
        ]);

    }
}
