<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected static function boot()
    {
    	parent::boot();
    	static::addGlobalScope(new \App\Scope\PointScope());
    }
}
