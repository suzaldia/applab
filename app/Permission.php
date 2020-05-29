<?php

namespace App;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name',
    ];

    public function roles() {

        return $this->belongsToMany(Role::class,'permission_role');
            
     }

     public function users() {

        return $this->belongsToMany(User::class,'permission_user');
            
     }
}
