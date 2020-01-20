<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name'];

    public function products(){
        
        //return $this->hasMany('App\Product');
        return $this->hasMany(Product::class);
    }
}
