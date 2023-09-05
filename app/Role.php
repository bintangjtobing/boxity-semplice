<?php

namespace App;

use App\Admin;
use App\Authorization;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'type'
    ];

    public function Admins() {
        return $this->hasMany(Admin::class, 'role_id');
    }

    public function Authorizations() {
        return $this->hasMany(Authorization::class, 'role_id');
    }
}
