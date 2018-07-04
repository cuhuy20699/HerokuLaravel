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
            ['UserId'=>3,'title'=>'Apple iPhone X 64GB Chính hãng','category'=>1,'description'=>'iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.','img'=>'https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-20-400x400.jpg','price'=>16000000],
            ['UserId'=>4,'title'=>'iPhone 8 Plus Red 256GB (Đỏ)','category'=>1,'description'=>'iPhone 8 Plus đỏ bản 256GB là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đỏ đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến cũng như màu sắc nổi bật, cá tính.\nThiết kế quen thuộc\nVề ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước','img'=>'https://cdn1.tgdd.vn/Products/Images/42/164236/iphone-8-plus-do-256gb-400x400.jpg','price'=>15000000],
            ['UserId'=>5,'title'=>'iPhone 8 Plus 256GB','category'=>1,'description'=>'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.Thiết kế quen thuộc\nVề ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.','img'=>'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg','price'=>18000000],
            ['UserId'=>2,'title'=>'Samsung Galaxy S9+ 128GB','category'=>1,'description'=>'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.Thiết kế quen thuộc\nVề ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.','img'=>'https://cdn.tgdd.vn/Products/Images/42/154695/samsung-galaxy-s9-plus-128gb-400x400.jpg','price'=>13099000],
            ['UserId'=>6,'title'=>'Apple iPhone 8 Plus 64GB','category'=>1,'description'=>'Samsung Galaxy S9 Plus 128GB, siêu phẩm smartphone hàng đầu trong thế giới Android đã ra mắt với màn hình vô cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn.','img'=>'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg','price'=>8990000],
            ['UserId'=>7,'title'=>'Samsung Galaxy A6','category'=>1,'description'=>'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.\nThiết kế quen thuộc.Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.','img'=>'https://ptelemoveis.pt/5694-large_default/samsung-galaxy-a600-a6-2018-32gb3gb-dual-sim-lavender.jpg','price'=>7990000],
            ['UserId'=>4,'title'=>'Xiaomi Redmi S2 32GB','category'=>1,'description'=>'Sau sự ra mắt của bộ đôi Samsung Galaxy A8, A8 Plus, hãng điện thoại Samsung  tiếp tục cho ra mắt sản phẩm mới thuộc phân khúc tầm trung. Sản phẩm giữ nguyên thiết kế của dòng Galaxy A và tính năng giống với A8, Samsung A6 hứa hẹn sẽ được nhiều người hài lòng và sử dụng nhiều nhất trong các dòng Samsung Galaxy.','img'=>'https://cdn.fptshop.com.vn/Uploads/Originals/2018/5/19/636623236912499129_xiaomi-s2-3-xam.jpg','price'=>8190000],
            ['UserId'=>5,'title'=>'Oppo A71 32GB (2018)','category'=>1,'description'=>'Phiên bản OPPO A71 (2018) bản 32 GB ra mắt với vi xử lý Snapdragon 450 mạnh mẽ hơn, chụp ảnh selfie làm đẹp bằng AI thông minh và giá rẻ hơn.','img'=>'http://dienmaythienhoa.vn/images/thumbnails/55/315/315/Untitled-1150546302359bb8aefe6d27.jpg','price'=>14490000],
        ]);

    }
}
