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
            ['userId'=>10,'productName'=>'Bánh mỳ','price'=>12212],
        ]);
    }
}
