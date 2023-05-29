<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.pages.home');
    }

    public function productDetail()
    {
        return view('client.pages.product-detail');
    }

    public function account(){
        return view('client.pages.account');
    }
    
}
