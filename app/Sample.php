<?php

namespace App;

use App\Type;
use App\Analysis;
use App\Parametre;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
        'tag', 'description', 'collected_at', 'type_id', 'parametre_id', 'status',
    ];



    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function parametre(){
        return $this->belongsTo(Parametre::class);
    }

    public function analyses(){
        return $this->hasMany(Analysis::class);
    }
}
