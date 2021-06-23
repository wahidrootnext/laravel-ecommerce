<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand',
        'sku',
        'name',
        'slug',
        'description',
        'quantity',
        'weight',
        'price',
        'sale_price',
        'status',
        'featured',
        'ratings',
        'shop_id',
    ];

    /**
     * Get the shop that owns the product.
     */
    public function shop() {
        return $this->belongsTo(Shop::class);
    }

    /**
     * Get the images for the product.
     */
    public function productImages() {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * The orders that belong to the product.
     */
    public function orders() {
        return $this->belongsToMany(Order::class)->withTimestamps()->withPivot(['quantity', 'price']);
    }

    /**
     * The categories that belong to the product.
     */
    public function categories() {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    /**
     * The attributes that belong to the product.
     */
    public function attributes() {
        return $this->belongsToMany(Attribute::class)->withTimestamps()->withPivot(['value', 'quantity', 'price']);
    }

}
