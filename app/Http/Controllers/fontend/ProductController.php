<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.product');
    }
    
        public function detail()
    
    {
        return view('frontend.product_detail');
    }
}
