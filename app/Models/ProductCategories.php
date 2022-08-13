<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class ProductCategories extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'product_categories';
}
