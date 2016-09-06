<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cellar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'brewery', 'size', 'bottle_date', 'in_cellar', 'in_fridge',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
}
