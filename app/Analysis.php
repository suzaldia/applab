<?php

namespace App;

use App\User;
use App\Sample;
use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
    protected $fillable = [
        'result', 'sample_id', 'user_id', 'observations',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
