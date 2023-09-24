<?php

namespace App;

use App\OwnerBusiness;
use App\MarketplaceType;
use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    protected $table = 'marketplaces';
    protected $fillable = [
        'owner_business_id', 'marketplace_type_id', 'link'
    ];

    public function ownerBusiness()
    {
        return $this->belongsTo(OwnerBusiness::class, 'owner_business_id');
    }

    public function marketplaceType()
    {
        return $this->belongsTo(MarketplaceType::class, 'marketplace_type_id');
   }
}