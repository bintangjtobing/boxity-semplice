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

class ContactRepository
{
    function getSingleData() {
        $data = OwnerBusiness::first();
        return $data;
    }

    function update() {
        $data = OwnerBusiness::first();
        $array = [
            'whatsapp_number' => request('whatsapp_number'),
            'phone_number' => request('phone_number'),
            'email' => request('email'),
        ];
        $data->update($array);
    }
}
