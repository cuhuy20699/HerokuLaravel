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
            ['fullname'=>'Huy Ngọc','phone'=>'0123456789','gender'=>'orther','email'=>'huy@gmail.com','password'=>'123456','salt'=>'null', 'role'=>'1', 'status'=>1, 'avatar'=>'null'],
            ['fullname'=>'Huy Ngọc','phone'=>'0123456789','gender'=>'orther','email'=>'huy@gmail.com','password'=>'123456','salt'=>'null', 'role'=>'1', 'status'=>1, 'avatar'=>'null'],
            ['fullname'=>'Huy Ngọc','phone'=>'0123456789','gender'=>'orther','email'=>'huy@gmail.com','password'=>'123456','salt'=>'null', 'role'=>'1', 'status'=>1, 'avatar'=>'null'],
            ['fullname'=>'Huy Ngọc','phone'=>'0123456789','gender'=>'orther','email'=>'huy@gmail.com','password'=>'123456','salt'=>'null', 'role'=>'1', 'status'=>1, 'avatar'=>'null'],
            ['fullname'=>'Huy Ngọc','phone'=>'0123456789','gender'=>'orther','email'=>'huy@gmail.com','password'=>'123456','salt'=>'null', 'role'=>'1', 'status'=>1, 'avatar'=>'null'],
            ['fullname'=>'Huy Ngọc','phone'=>'0123456789','gender'=>'orther','email'=>'huy@gmail.com','password'=>'123456','salt'=>'null', 'role'=>'1', 'status'=>1, 'avatar'=>'null'],
            ['fullname'=>'Huy Ngọc','phone'=>'0123456789','gender'=>'orther','email'=>'huy@gmail.com','password'=>'123456','salt'=>'null', 'role'=>'1', 'status'=>1, 'avatar'=>'null'],
            ]);
    }
}
