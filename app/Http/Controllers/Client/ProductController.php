<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductByCategory($categoryName, $viewName)
    {
        $productCategory = ProductCategory::where('name', $categoryName)->first();
        $product = Products::where('product_category_id', $productCategory->id)->get();
        return view('client.pages.products.' . $viewName, compact('product'));
    }
    
    public function mouse()
    {
        return $this->getProductByCategory('Mouse', 'mouses');
    }
    
    public function laptop()
    {
        return $this->getProductByCategory('Laptop', 'laptop');
    }
    
    public function keyboard()
    {
        return $this->getProductByCategory('keyboard', 'keyboard');
    }
    
    public function monitor()
    {
        return $this->getProductByCategory('monitor', 'monitor');
    }
    
    public function headset()
    {
        return $this->getProductByCategory('headset', 'headset');
    }
    
}
