<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')
            ->join('product_category', 'products.product_category_id', '=', 'product_category.id')
            ->select('products.*', 'product_category.name as category_name')
            ->where('product_category.deleted_at', NULL)
            ->orderBy('products.id', 'desc')
            ->limit(10)
            ->get();

        $arrayProductCategory = $products->pluck('category_name')->unique();

        $latestProducts = Products::orderBy('id', 'desc')->limit(10)->get();

        return view('client.pages.home', compact('products', 'arrayProductCategory', 'latestProducts'));
    }
    public function productDetail()
    {
        return view('client.pages.product-detail');
    }

    public function account()
    {
        return view('client.pages.account');
    }
}
