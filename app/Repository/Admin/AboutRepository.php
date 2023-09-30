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

class AboutRepository
{
    function getSingleData() {
        $data = OwnerBusiness::first();
        return $data;
    }

    function update() {
        dd(request());
        $data = OwnerBusiness::first();
        $array = [
            'description' => request('description'),
        ];
        $data->update($array);
    }
}