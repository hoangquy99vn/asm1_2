<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function type_product() {
        return $this->belongsTo('App\ProductType','ma_loai','id');
    }
}
