<?php

namespace App\Repository\Admin;

use App\Marketplace;
use App\Owner;
use Exception;
use App\Product;
use Carbon\Carbon;
use App\OwnerBusiness;

class MarketplaceRepository
{
    function getSingleData($id) {
        $data = Marketplace::find($id);
        return $data;
    }

    function getData($n) {
        $search = request('search');
        $data = Marketplace::orderBy('id', 'asc');
        if ($search) {
            $data = $data->where('name', 'like', '%' . $search . '%');
        }
        return $data->paginate($n);
    }

    function add() {
    }

    function update($id) {
    }

    function delete($id) {
    }
}