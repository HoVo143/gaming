<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'images';

    protected $fillable = [
        'filename',
        'image_url',
        'product_id',
    ];

    public function category()
    {
        return $this->belongsTo(Products::class, 'product_id')->withTrashed();
    }
}
