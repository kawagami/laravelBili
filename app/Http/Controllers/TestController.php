<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test()
    {
        phpinfo();
    }
    public function add()
    {
        $db = DB::table('users');
        $db->insert([
            [
                'name' => '東風馬',
                'email' => 'madofong@gmail.com'
            ],
            [
                'name' => '北風馬',
                'email' => 'mado1234@gmail.com'
            ],
        ]);
    }
    public function del()
    {
        echo '這是del頁面';
    }
    public function update()
    {
        $db = DB::table('member');
        $result = $db->where('id', '=', '1')->update([
            'name' => 'Julia',
        ]);
        dd($result);
    }
    public function select()
    {
        echo '這是select頁面';
    }
    public function connectMysqlTest()
    {
        $db = DB::table('users');
        $data = $db->get();
        dd($data);
    }
}
