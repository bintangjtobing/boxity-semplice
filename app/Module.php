<?php

namespace App;

use App\ModuleGroup;
use App\Authorization;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $fillable = [
        'module_group_id',
        'name',
        'order',
        'icon',
        'route',
        'is_shown',
        'type'
    ];

    public function ModuleGroup() {
        return $this->belongsTo(ModuleGroup::class, 'module_group_id');
    }

    public function Authorization() {
        return $this->hasMany(Authorization::class, 'module_id');
    }
}
