<?php

namespace App;

use App\OwnerBusiness;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';
    protected $fillable = [
        'name', 'photo', 'description'
    ];

    public function ownerBusinesses()
    {
        return $this->hasMany(OwnerBusiness::class, 'owner_id');
    }
}