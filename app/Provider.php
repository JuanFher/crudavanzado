<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable =[
    	'name', 'email', 'ruc_number', 'address', 'phone', 'status', 'logo'
    ];

    public function products()
    {
    	return $thisp->hasMany(Product::class);
    }

    public function purchases()
    {
    	return $this->HasMany(Purchase::class);
    }
}
