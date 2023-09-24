<?php

namespace App;

use App\OwnerBusiness;
use Illuminate\Database\Eloquent\Model;

class PromoOrEvent extends Model
{
    protected $table = 'promo_or_events';
    protected $fillable = [
        'owner_business_id', 'name', 'sub_title', 'link'
    ];

    public function ownerBusiness()
    {
        return $this->belongsTo(OwnerBusiness::class, 'owner_business_id');
    }
}