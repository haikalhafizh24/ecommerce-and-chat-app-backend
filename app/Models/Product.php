<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'price',
        'descriptions',
        'categories_id',
        'tags',
    ];

    public function gelleries () {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public function category () {
        return $this->hasMany(ProductCategory::class, 'categories_id', 'id');
    }
}
