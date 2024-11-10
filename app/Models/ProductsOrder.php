<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsOrder extends Model
{
    use HasFactory;

    protected $table = 'product_order';

    protected $fillable = [
        'product_id',
        'barcode',
        'name',
        'description',
        'price',
        'categorie_id',
        'brand_id',
        'user_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
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
        return $this->belongsToMany(Sustainability::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
