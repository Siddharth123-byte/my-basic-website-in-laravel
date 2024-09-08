<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;  // Import the base Controller
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }
}
