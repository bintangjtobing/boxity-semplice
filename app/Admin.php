<?php

namespace App;

use App\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'photo',
        'role_id',
        'is_active'
    ];

    public function Role() {
        return $this->belongsTo(Role::class, 'role_id');
    }
}