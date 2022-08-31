<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';
    protected $fillable = [
        'src',
        'title',
        'type',
        'cook_time',
        'weight',
        'description'
    ];
}
