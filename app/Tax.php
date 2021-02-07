<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = ['name', 'value'];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    
}
