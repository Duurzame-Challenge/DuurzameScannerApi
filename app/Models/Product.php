<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'name',
        'description',
        'price',
        'categorie_id',
        'brand_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function sustainabilities()
    {
        return $this->belongsToMany(Sustainability::class, 'product_sustainability');
    }

    public function allergens()
    {
        return $this->belongsToMany(Allergen::class, 'product_allergen');
    }

    public function alternatives()
    {
        return $this->belongsToMany(Product::class, 'product_alternative', 'product_id', 'alternative_id')->withPivot('reason');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
