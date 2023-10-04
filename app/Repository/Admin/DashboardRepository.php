<?php

namespace App\Repository\Admin;

use App\Owner;
use Exception;
use App\Product;
use App\Testimoni;
use Carbon\Carbon;
use App\ProductType;
use App\ProductImage;
use App\PromoOrEvent;
use App\OwnerBusiness;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class DashboardRepository
{
    function getUrl()
    {
        $user = Auth::guard('admin')->user();
        $businessOwner = OwnerBusiness::where('admin_id', $user->id)->first();
        $url = $businessOwner->url;
        return $url;
    }

    function create($request)
    {
        // dd(request($product));
        // dd($request->all());
        $user = Auth::guard('admin')->user();
        $businessOwner = OwnerBusiness::where('admin_id', $user->id)->first();
        if ($request->hasFile('file_photo_owner')) {
            $owner_path = Cloudinary::upload($request->file('file_photo_owner')->getRealPath())->getSecurePath();
        }

        if ($request->hasFile('file_photo_header')) {
            $business_path = Cloudinary::upload($request->file('file_photo_header')->getRealPath())->getSecurePath();
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
            'is_show_location' => $request->business_location_show ? 1 : 0,
            'whatsapp_number' => $request->whatsapp_number,
            'phone_number' => $request->phone_number,
            'email' => $request->email
        ];
        OwnerBusiness::find($businessOwner->id)->update($businessData);
        for ($i= 0; $i < count($request->client_name) ; $i++) {
            $testiData = [
                'owner_business_id' => $businessOwner->id,
                'client_name' => $request->client_name[$i],
                'message' => $request->client_testimoni[$i],
                'is_show' => $request->client_testimoni_show[$i] ?? 0
            ];
            Testimoni::create($testiData);
        }

        for ($t=1; $t <= 3 ; $t++) {
            $promoData = [
                'owner_business_id' => $businessOwner->id,
                'name' => $request->promo_name_+$t,
                'sub_title' => $request->promo_sub_title_+$t,
                'link' => $request->link_teks_button_+$t ?? 0
            ];
            PromoOrEvent::create($promoData);
        }

        for ($p=1; $p <= 3; $p++) {
            $productData = [
                'owner_business_id' => $businessOwner->id,
                'product_type_id' => $request->product_type_id+$p,
                'name' => $request->product_name_+$p,
                'description' => $request->product_description_+$p
            ];
            $product = Product::create($productData);
            $text = 'file_product_' . $p;
            foreach (request($text) as $pi) {
                $product_image_path = Cloudinary::upload($pi->getRealPath())->getSecurePath();# code...
                ProductImage::create([
                    'product_id' => $product->id,
                    'photo' => $product_image_path
                ]);
            }
        }
    }

    function getProductTypes()
    {
        $data = ProductType::get();
        return $data;

   }
}
