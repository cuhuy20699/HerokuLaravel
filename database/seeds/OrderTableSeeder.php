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
        DB::table('orders_detail')->insert([
            ['UserId'=>3,'title'=>'Apple iPhone X 64GB Chính hãng','category'=>1,'description'=>'c không dây cùng khả năng chống nước bụi cao cấp.','img'=>'https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-20-400x400.jpg','price'=>16000000],
            ['UserId'=>4,'title'=>'iPhone 8 Plus Red 256GB (Đỏ)','category'=>1,'description'=>'iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước','img'=>'https://cdn1.tgdd.vn/Products/Images/42/164236/iphone-8-plus-do-256gb-400x400.jpg','price'=>15000000],
            ['UserId'=>5,'title'=>'iPhone 8 Plus 256GB','category'=>1,'description'=>' đi trước.','img'=>'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg','price'=>18000000],
            ['UserId'=>2,'title'=>'Samsung Galaxy S9+ 128GB','category'=>1,'description'=>'so với người đàn anh đi trước.','img'=>'https://cdn.tgdd.vn/Products/Images/42/154695/samsung-galaxy-s9-plus-128gb-400x400.jpg','price'=>13099000],
            ['UserId'=>6,'title'=>'Apple iPhone 8 Plus 64GB','category'=>1,'description'=>'cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn.','img'=>'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg','price'=>8990000],
            ['UserId'=>7,'title'=>'Samsung Galaxy A6','category'=>1,'description'=>' đàn anh đi trước.','img'=>'https://ptelemoveis.pt/5694-large_default/samsung-galaxy-a600-a6-2018-32gb3gb-dual-sim-lavender.jpg','price'=>7990000],
            ['UserId'=>4,'title'=>'Xiaomi Redmi S2 32GB','category'=>1,'description'=>'thuộc phân khúc tầm trung. Sản phẩm giữ nguyên thiết kế của dòng Galaxy A và tính năng giống với A8, Samsung A6 hứa hẹn sẽ được nhiều người hài lòng và sử dụng nhiều nhất trong các dòng Samsung Galaxy.','img'=>'https://cdn.fptshop.com.vn/Uploads/Originals/2018/5/19/636623236912499129_xiaomi-s2-3-xam.jpg','price'=>8190000],
            ['UserId'=>5,'title'=>'Oppo A71 32GB (2018)','category'=>1,'description'=>'bằng AI thông minh và giá rẻ hơn.','img'=>'http://dienmaythienhoa.vn/images/thumbnails/55/315/315/Untitled-1150546302359bb8aefe6d27.jpg','price'=>14490000],
        ]);

    }
}
