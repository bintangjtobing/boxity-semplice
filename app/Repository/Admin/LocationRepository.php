<?php

namespace App\Repository\Admin;

use App\Marketplace;
use App\MarketplaceType;
use App\Owner;
use Exception;
use App\Product;
use Carbon\Carbon;
use App\OwnerBusiness;
use Illuminate\Support\Facades\Auth;

class LocationRepository
{
    function getSingleData() {
        $data = OwnerBusiness::first();
        return $data;
    }

    function update() {
        $data = OwnerBusiness::first();
        $array = [
            'address' => request('address'),
            'link_location' => request('link_location'),
            'is_show_location' => request('is_show_location') ?? 0,
        ];
        $data->update($array);
    }
}