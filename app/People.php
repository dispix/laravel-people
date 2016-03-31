<?php

namespace laravelPeople;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'birthday'
    ];
}
