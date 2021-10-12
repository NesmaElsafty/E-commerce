<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations; //trait

class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded  = ['id'];
    
    public $translatable = ['name'];

public function product()
    {
        return $this->hasMany(Product::class);
    }


}
