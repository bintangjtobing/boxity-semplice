<?php

namespace App;

use App\OwnerBusiness;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimonis';
    protected $fillable = [
        'owner_business_id', 'client_name', 'message', 'is_show'
    ];

    public function ownerBusiness()
    {
        return $this->belongsTo(OwnerBusiness::class, 'owner_business_id');
    }
}