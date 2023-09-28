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

class MarketplaceRepository
{
    function getMarketplaceType()
    {
        $data = MarketplaceType::all();
        return $data;
    }

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
        $owner_business_id = Auth::guard('admin')->user()->ownerBusiness->id;
        $data = [
            'owner_business_id' => $owner_business_id,
            'marketplace_type_id' => request('marketplace_type_id'),
            'link' => request('link')
        ];
        Marketplace::create($data);
    }

    function update($id) {
        $data = Marketplace::find($id);
        $array = [
            'marketplace_type_id' => request('marketplace_type_id'),
            'link' => request('link')
        ];
        $data->update($array);
    }

    function delete($id) {
        $data = Marketplace::find($id);
        $data->delete();
    }
}
