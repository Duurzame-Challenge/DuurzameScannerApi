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
        return $this->belongsTo(Categorie::class);
    }

    public function merk()
    {
        return $this->belongsTo(Merk::class);
    }

    public function duurzaamheden()
    {
        return $this->belongsToMany(Duurzaamheid::class, 'product_sustainability');
    }

    public function allergenen()
    {
        return $this->belongsToMany(Allergenen::class, 'product_allergen');
    }

    public function alternatieven()
    {
        return $this->hasMany(Alternatief::class, 'product_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
    }
}
