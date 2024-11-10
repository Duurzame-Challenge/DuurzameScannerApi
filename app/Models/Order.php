<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'status',
        'product_names',

    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // sustains
    public function sustainabilities()
    {
        return $this->belongsToMany(Sustainability::class);
    }

    // Accessor to get concatenated product names
    public function getProductNamesAttribute()
    {
        return $this->products->pluck('name')->implode(', ');
    }
}
