<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use TransformableTrait;
    
    /**
     * The attributes taht are mass assingnable.
     * 
     * @var array
     */
     protected $fillable = [
         'name',
         'email',
         'subject',
         'content',
         ];
}
