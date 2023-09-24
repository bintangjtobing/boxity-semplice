<?php

namespace App\Repository\Admin;

use App\Owner;
use Exception;
use App\Product;
use Carbon\Carbon;
use App\OwnerBusiness;

class DashboardRepository
{
    function create($request)
    {
        dd($request->all());
        if ($request->hasFile('file_photo_owner')) {
            $file = $request->file('file_photo_owner');
            $file->move('images/owner', $file->getClientOriginalName());
            $owner_path = 'images/owner/' . $file->getClientOriginalName();
        }

        if ($request->hasFile('file_photo_header')) {
            $file = $request->file('file_photo_header');
            $file->move('images/business', $file->getClientOriginalName());
            $business_path = 'images/business/' . $file->getClientOriginalName();
        }

        $ownerData = [
            'name' => $request->name_owner,
            'description' => $request->bio_owner,
            'photo' => $owner_path
        ];

        $owner = Owner::create($ownerData);

        $businessData = [
            'owner_id' => $owner->id,
            'url' => $request->url_semplice,
            'photo' => $business_path,
            'description' => $request->business_description,
            'address' => $request->business_address,
            'link_location' => $request->link_google_business_or_map_location,
            'is_show_location' => $request->business_location_show,
            'whatsapp_number' => $request->whatsapp_number,
            'phone_number' => $request->phone_number,
            'email' => $request->email
        ];

        $business = OwnerBusiness::create($businessData);

        $productData = [
            'owner_business_id' => $business->id,
            'product_type_id' => $request->product_type_id,
            'link' => $request->product_link
        ];

        $product = Product::create($productData);
    }
}