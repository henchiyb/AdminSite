<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
