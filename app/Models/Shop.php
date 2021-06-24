<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'ratings',
        'user_id',
    ];

    /**
     * Get the user that owns the shop.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the products for the shop.
     */
    public function products() {
        return $this->hasMany(Product::class);
    }
}
