<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'discount_price',
        'qty',
        'image_url',
        'description_1',
        'description_2',
        'description_3',
        'cpu',
        'ram',
        'hard_drive',
        'graphics_card',
        'screen',
        'keyboard',
        'lan',
        'webcam',
        'pin',
        'color',
        'weight',
        'communication_port',
        'slug',
        'product_category_id',
        'brands_id',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id')->withTrashed()
            ->orWhere(function ($query) {
                $query->belongsTo(Brands::class, 'brands_id')->withTrashed();
            });
    }
    public function products()
    {
        return $this->hasMany(Images::class, 'product_id');
    }
}
