<?php

namespace App\Repository\Admin;

use App\Owner;
use Exception;
use App\Product;
use Carbon\Carbon;
use App\Marketplace;
use App\OwnerBusiness;
use App\MarketplaceType;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AboutRepository
{
    function getSingleData() {
        $data = OwnerBusiness::first();
        return $data;
    }

    function update($request) {
        $data = OwnerBusiness::first();
        $array = [
            'description' => request('description'),
        ];
        if ($request->hasFile('file_photo_header')) {
            $array['photo'] = Cloudinary::upload($request->file('file_photo_header')->getRealPath())->getSecurePath();
        }
        $data->update($array);
    }
}
