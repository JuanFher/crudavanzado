<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'document', 'address', 'phone', 'email', 'status' ];
}
