<?php

namespace App;

use App\Role;
use App\Module;
use App\AuthorizationType;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    protected $table = 'authorizations';
    protected $fillable = [
        'module_id',
        'authorization_type_id',
        'role_id',
        'type'
    ];

    public function Module() {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public function AuthorizationType() {
        return $this->belongsTo(AuthorizationType::class, 'authorization_type_id');
    }

    public function Role() {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
