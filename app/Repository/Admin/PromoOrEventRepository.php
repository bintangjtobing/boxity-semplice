<?php

namespace App\Repository\Admin;

use Exception;
use App\Testimoni;
use Carbon\Carbon;
use App\PromoOrEvent;
use App\Helper\Helper;
use App\MarketplaceType;
use Illuminate\Support\Facades\Auth;

class PromoOrEventRepository
{
    function getSingleData($id) {
        $data = PromoOrEvent::find($id);
        return $data;
    }

    function getData($n) {
        $search = request('search');
        $data = PromoOrEvent::orderBy('id', 'asc');
        if ($search) {
            $data = $data->where('name', 'like', '%' . $search . '%');
        }
        return $data->paginate($n);
    }

    function add() {
        $owner_business_id = Auth::guard('admin')->user()->ownerBusiness->id;
        $count = PromoOrEvent::count();
        $data = [
            'owner_business_id' => $owner_business_id,
            'name' => request('name'),
            'sub_title' => request('sub_title'),
            'link' => request('link') ?? 0
        ];
        if ($count < 3) {
            PromoOrEvent::create($data);
        } else {
            throw new Exception('Maksimal 3 Promo/Event');
        }
    }

    function update($id) {
        $data = PromoOrEvent::find($id);
        $array = [
            'name' => request('name'),
            'sub_title' => request('sub_title'),
            'link' => request('link') ?? 0
        ];
        $data->update($array);
    }

    function delete($id) {
        $data = PromoOrEvent::find($id);
        $data->delete();
    }
}