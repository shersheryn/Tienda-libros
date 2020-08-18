<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function test()
    {
        dd('hello');
    }
}
