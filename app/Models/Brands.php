<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brands extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'brands';

    public $timestamps = true;

    public function products()
    {
        return $this->hasMany(Products::class, 'brands_id');
    }
}
