<?php

namespace App\Repository\Admin;

use App\MarketplaceType;
use Exception;
use Carbon\Carbon;
use App\Testimoni;
use Illuminate\Support\Facades\Auth;

class TestimoniRepository
{
    function getMarketplaceType()
    {
        $data = MarketplaceType::all();
        return $data;
    }

    function getSingleData($id) {
        $data = Testimoni::find($id);
        return $data;
    }

    function getData($n) {
        $search = request('search');
        $data = Testimoni::orderBy('id', 'asc');
        if ($search) {
            $data = $data->where('client_name', 'like', '%' . $search . '%');
        }
        return $data->paginate($n);
    }

    function add() {
        $owner_business_id = Auth::guard('admin')->user()->ownerBusiness->id;
        $data = [
            'owner_business_id' => $owner_business_id,
            'client_name' => request('client_name'),
            'message' => request('message'),
            'is_show' => request('is_show') ?? 0
        ];
        Testimoni::create($data);
    }

    function update($id) {
        $data = Testimoni::find($id);
        $array = [
            'client_name' => request('client_name'),
            'message' => request('message'),
            'is_show' => request('is_show') ?? 0
        ];
        $data->update($array);
    }

    function delete($id) {
        $data = Testimoni::find($id);
        $data->delete();
    }
}
