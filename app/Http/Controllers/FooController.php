<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FooController extends Controller
{
    // 
    public function show() {
        $phones = DB::select('select * from phones');
        return $phones;
    }
}
