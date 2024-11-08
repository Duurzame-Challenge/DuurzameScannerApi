<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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

    public function sustainbilities()
    {
        return $this->belongsToMany(Sustainability::class, 'product_sustainability');
    }

    public function allergens()
    {
        return $this->belongsToMany(Allergen::class, 'product_allergen');
    }

    public function alternatives()
    {
        return $this->hasMany(Alternative::class, 'product_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
    }
}
