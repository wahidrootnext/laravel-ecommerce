<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id',
        'value',
        'price',
    ];

    /**
     * Get the attribute that owns the value.
     */
    public function attribute() {
        return $this->belongsTo(Attribute::class);
    }
}
