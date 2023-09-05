<?php

namespace App;

use App\Module;
use Illuminate\Database\Eloquent\Model;

class ModuleGroup extends Model
{
    protected $table = 'module_groups';
    protected $fillable = [
        'name',
        'order',
        'icon',
        'type'
    ];

    public function Modules() {
        return $this->hasMany(Module::class, 'module_group_id');
    }
}
