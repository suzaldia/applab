<?php

namespace App;

use App\User;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    protected $fillable = [
        'title', 'description', 'actions', 'category_id', 'priority', 'status', 'user_id', 'support_id', 'resolved_at',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
