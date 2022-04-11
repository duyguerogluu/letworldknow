<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable AS TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model implements TranslatableContract
{
    use NodeTrait;
    use HasFactory;
    use Translatable;

    public $translatedAttributes =['title','description'];

    protected $fillable=[
        'slug',
        'parent_id',
        'icon',
        'status'
    ];
}
