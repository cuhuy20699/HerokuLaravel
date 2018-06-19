<?php

use Illuminate\Database\Seeder;

class UserMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_members')->insert([
            ['fullname'=>'Phan Hải','phone'=>'0123456789','gender'=>'orther','email'=>'hung@gmail.com','password'=>'123456','salt'=>'778877', 'role'=>'1', 'status'=>1, 'avatar'=>'https://i.ytimg.com/vi/OsFjcXkc2_E/maxresdefault.jpg'],
            ['fullname'=>'Angela Phương Trinh','phone'=>'0123456789','gender'=>'orther','email'=>'trinh@gmail.com','password'=>'123456','salt'=>'874523', 'role'=>'1', 'status'=>1, 'avatar'=>'http://static2.yan.vn/YanNews/2167221/201707/20170711-051652-angela-phuong-trinh-ivy-moda-4-6907-1491671388_550x744.jpg'],
            ['fullname'=>'Ngọc Trinh','phone'=>'0123456789','gender'=>'orther','email'=>'trinh@gmail.com','password'=>'123456','salt'=>'124532', 'role'=>'1', 'status'=>1, 'avatar'=>'http://static.bongdacuocsong.net/uploaded/lypham/2016_08_25/137759368444662823508541796408154462878282n_dzpp.jpg'],
            ['fullname'=>'Bích Phương','phone'=>'0123456789','gender'=>'orther','email'=>'phuong@gmail.com','password'=>'123456','salt'=>'412537', 'role'=>'1', 'status'=>1, 'avatar'=>'https://image.vtc.vn/files/chubi/2017/04/02/20140707-0731-1f0a0933-0142.jpg'],
            ['fullname'=>'Tiểu Cường','phone'=>'0123456789','gender'=>'orther','email'=>'cuong@gmail.com','password'=>'123456','salt'=>'896575', 'role'=>'1', 'status'=>1, 'avatar'=>'https://cdn.muabannhanh.com/asset/frontend/img/gallery/2017/07/27/59794a114b11b_1501121041.jpg'],
            ['fullname'=>'Bella','phone'=>'0123456789','gender'=>'orther','email'=>'bella@gmail.com','password'=>'123456','salt'=>'852144', 'role'=>'1', 'status'=>1, 'avatar'=>'https://i.ytimg.com/vi/NDiTT72c65I/maxresdefault.jpg'],
            ['fullname'=>'Khánh Trắng','phone'=>'0123456789','gender'=>'orther','email'=>'khanh@gmail.com','password'=>'123456','salt'=>'452144', 'role'=>'1', 'status'=>1, 'avatar'=>'https://thumbnailer.mixcloud.com/unsafe/300x300/extaudio/0/d/b/f/75ff-9b98-4ea1-b88f-fe2fe178be00'],
            ]);
    }
}
