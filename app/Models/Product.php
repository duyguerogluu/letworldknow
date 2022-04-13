<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Product extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = 'letworldknow_mongo';
    protected $collection = 'letworldknow_mongo_collection';

    protected $fillable = [
        'phone_company', 'model','price'
    ];
}
