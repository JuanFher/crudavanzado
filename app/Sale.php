<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['client_id', 'user_id', 'purchase_date', 'tax', 'total', 'status' ];

    public function user()
    {
    	$this->belongsTo(User::class);
    }

    public function client()
    {
    	$this->belongsTo(Provider::class);
    }

    public function saleDetails()
    {
    	$this->hasMany(SaleDetail::class);
    }
}
