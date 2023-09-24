<?php

namespace App;

use App\Marketplace;
use Illuminate\Database\Eloquent\Model;

class MarketplaceType extends Model
{
    protected $table = 'marketplace_types';
    protected $fillable = [
        'name'
    ];

    public function marketplaces()
    {
        return $this->hasMany(Marketplace::class, 'marketplace_type_id');
    }
}