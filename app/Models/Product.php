<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations; //trait
use App\Category;
use App\Cart;


class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    

    protected $guarded  = ['id'];
    
    public $translatable = ['name'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function img()
    {
        return $this->hasMany(Img::class);
    }

}
