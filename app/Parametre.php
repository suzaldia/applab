<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'name', 'unit', 'limit','observations',
    ];
}
