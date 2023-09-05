<?php

namespace App;

use App\Authorization;
use Illuminate\Database\Eloquent\Model;

class AuthorizationType extends Model
{
    protected $table = 'authorization_types';
    protected $fillable = [
        'name',
        'type'
    ];

    public function Authorizations() {
        return $this->hasMany(Authorization::class, 'authorization_type_id');
    }
}
