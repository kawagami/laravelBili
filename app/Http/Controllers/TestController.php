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
        echo '這是add頁面';
    }
    public function del()
    {
        echo '這是del頁面';
    }
    public function update()
    {
        echo '這是update頁面';
    }
    public function select()
    {
        echo '這是select頁面';
    }
}
