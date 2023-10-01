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

class UrlRepository
{
    function getSingleData() {
        $data = OwnerBusiness::first();
        return $data;
    }
}