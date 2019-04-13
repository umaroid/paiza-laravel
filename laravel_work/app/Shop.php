<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function category()
    {
        // Categoryテーブルと関連ずけ
        return $this->belongsTo('App\Category');
    }
}
