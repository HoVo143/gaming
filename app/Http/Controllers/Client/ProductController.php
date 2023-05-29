<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function mouse(){
        return view('client.pages.products.mouses');
    }
    public function laptop(){
        return view('client.pages.products.laptop');
    }
    public function keyboard(){
        return view('client.pages.products.keyboard');
    }
    public function monitor(){
        return view('client.pages.products.monitor');
    }
    public function headset(){
        return view('client.pages.products.headset');
    }   
    
    
}
