<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function getUsersCountAttribute()
    {
    	return \DB::table('users')->where('users.team_id', $this->id)->sum('users.id');
    }

    public $appends = ['users_count'];

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = ucwords($value);
    }
}
