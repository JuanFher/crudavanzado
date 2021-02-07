<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable =[
    	'code', 'name', 'stock', 'image', 'sell_price', 'buy_price', 'status', 'category_id', 'provider_id', 
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    public function provider()
    {
    	return $this->belongsTo(Provider::class);
    }

    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetail::class);
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }

    
}
