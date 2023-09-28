<?php

namespace App\Repository\Admin;

use Exception;
use Carbon\Carbon;
use App\SocialMedia;
use App\SocialMediaType;
use Illuminate\Support\Facades\Auth;

class SocialMediaSiteRepository
{
    function getSocialMediaSiteType()
    {
        $data = SocialMediaType::all();
        return $data;
    }

    function getSingleData($id) {
        $data = SocialMedia::find($id);
        return $data;
    }

    function getData($n) {
        $search = request('search');
        $data = SocialMedia::orderBy('id', 'asc');
        if ($search) {
            $data = $data->where('name', 'like', '%' . $search . '%');
        }
        return $data->paginate($n);
    }

    function add() {
        $owner_business_id = Auth::guard('admin')->user()->ownerBusiness->id;
        $data = [
            'owner_business_id' => $owner_business_id,
            'social_media_type_id' => request('social_media_site_type_id'),
            'link' => request('link')
        ];
        SocialMedia::create($data);
    }

    function update($id) {
        $data = SocialMedia::find($id);
        $array = [
            'social_media_type_id' => request('social_media_site_type_id'),
            'link' => request('link')
        ];
        $data->update($array);
    }

    function delete($id) {
        $data = SocialMedia::find($id);
        $data->delete();
    }
}
