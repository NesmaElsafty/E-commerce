<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations; //trait


class Branch extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded  = ['id'];

    public $translatable = ['name', 'address'];

}
