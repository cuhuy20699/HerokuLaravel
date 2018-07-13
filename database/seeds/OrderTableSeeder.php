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
            ['UserId'=>2,'nameBuyes'=>'Anh Huy1','nameReceiver'=>'Khánh Trắng1',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0123456789',
                'phoneReceiver'=>'012345687','totalMoney'=>'25000','note'=>'Giao Gap'],

            ['UserId'=>12,'nameBuyes'=>'Anh Huy2','nameReceiver'=>'Khánh Trắng2',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0125211789',
                'phoneReceiver'=>'012777687','totalMoney'=>'35000','note'=>'Giao Gap'],

            ['UserId'=>22,'nameBuyes'=>'Anh Huy3','nameReceiver'=>'Khánh Trắng3',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'012222789',
                'phoneReceiver'=>'017777777','totalMoney'=>'40000','note'=>'Giao Gap'],

            ['UserId'=>32,'nameBuyes'=>'Anh Huy4','nameReceiver'=>'Khánh Trắng4',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0145741189',
                'phoneReceiver'=>'014541487','totalMoney'=>'50000','note'=>'Giao Gap'],

            ['UserId'=>42,'nameBuyes'=>'Anh Huy5','nameReceiver'=>'Khánh Trắng5',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0722256789',
                'phoneReceiver'=>'0421525687','totalMoney'=>'55000','note'=>'Giao Gap'],

            ['UserId'=>52,'nameBuyes'=>'Anh Huy6','nameReceiver'=>'Khánh Trắng6',
                'addressReceiver'=>'Ha Noi','phoneBuyes'=>'0124242489',
                'phoneReceiver'=>'09685687','totalMoney'=>'60000','note'=>'Giao Gap'],

        ]);
    }
}
