<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function product()
    {
        return view('storeFrontend.pages.product');
    }
    public function checkOut()
    {
        return view('storeFrontend.pages.checkOut');
    }
    public function cart()
    {
        return view('storeFrontend.pages.checkOut');
    }
}
