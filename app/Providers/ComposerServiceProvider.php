<?php

namespace App\Providers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $arrayProductCategorryView = [
            'client.pages.products.headset',
            'client.pages.products.keyboard',
            'client.pages.products.laptop',
            'client.pages.products.monitor',
            'client.pages.products.mouses',
            'client.pages.home',
            'client.pages.product-detail',
            'client.pages.account',

        ];
        View::composer($arrayProductCategorryView, function ($view) {
            $productCategories = ProductCategory::orderBy('name', 'desc')->get()->filter(function ($productCategory) {
                return $productCategory->products->count() > 0;
            })->slice(0, 10);
            $view->with('productCategories', $productCategories);
        });
    }
}
