<?php

namespace App\Repository\Admin;

use App\Marketplace;
use App\MarketplaceType;
use App\Owner;
use Exception;
use App\Product;
use App\Testimoni;
use Carbon\Carbon;
use App\ProductType;
use App\ProductImage;
use App\PromoOrEvent;
use App\OwnerBusiness;
use App\SocialMedia;
use App\SocialMediaType;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class DashboardRepository
{
    function getOwnerBusiness()
    {
        $user = Auth::guard('admin')->user();
        $businessOwner = OwnerBusiness::where('admin_id', $user->id)->first();
        return $businessOwner;
    }

    function getSocialMediaType()
    {
        $data = SocialMediaType::get();
        return $data;
    }

    function getMarketplaceType()
    {
        $data = MarketplaceType::get();
        return $data;
    }

    function getUrl()
    {
        $user = Auth::guard('admin')->user();
        $businessOwner = OwnerBusiness::where('admin_id', $user->id)->first();
        $url = $businessOwner->url;
        return $url;
    }

    // function create($request)
    // {
    //     $user = Auth::guard('admin')->user();
    //     $businessOwner = OwnerBusiness::where('admin_id', $user->id)->first();
    //     if ($request->hasFile('file_photo_owner')) {
    //         $owner_path = Cloudinary::upload($request->file('file_photo_owner')->getRealPath())->getSecurePath();
    //     }

    //     if ($request->hasFile('file_photo_header')) {
    //         $business_path = Cloudinary::upload($request->file('file_photo_header')->getRealPath())->getSecurePath();
    //     }

    //     $ownerData = [
    //         'name' => $request->name_owner,
    //         'description' => $request->bio_owner,
    //         'photo' => $owner_path
    //     ];
    //     $owner = Owner::create($ownerData);

    //     $businessData = [
    //         'owner_id' => $owner->id,
    //         'url' => $request->url_semplice,
    //         'photo' => $business_path,
    //         'description' => $request->business_description,
    //         'address' => $request->business_address,
    //         'link_location' => $request->link_google_business_or_map_location,
    //         'is_show_location' => $request->business_location_show ? 1 : 0,
    //         'whatsapp_number' => $request->whatsapp_number,
    //         'phone_number' => $request->phone_number,
    //         'email' => $request->email
    //     ];

    //     OwnerBusiness::find($businessOwner->id)->update($businessData);
    //     $testiDatas = [];
    //     for ($i= 0; $i < count($request->client_name) ; $i++) {
    //         $testiData = [
    //             'owner_business_id' => $businessOwner->id,
    //             'client_name' => request('client_name')[$i],
    //             'message' => request('client_testimoni')[$i],
    //             'is_show' => request('client_testimoni_show')[$i] ?? 0
    //         ];
    //         array_push($testiDatas, $testiData);
    //     }
    //     Testimoni::insert($testiDatas);

    //     $promoDatas = [];
    //     for ($t=1; $t <= 3; $t++) {
    //         $name = 'promo_name_' . $t;
    //         $sub_title = 'promo_sub_title_' . $t;
    //         $link = 'link_teks_button_' . $t;
    //         $promoData = [
    //             'owner_business_id' => $businessOwner->id,
    //             'name' => request($name),
    //             'sub_title' => request($sub_title),
    //             'link' => request($link)
    //         ];
    //         array_push($promoDatas, $promoData);
    //     }
    //     PromoOrEvent::insert($promoDatas);

    //     $marketplaceDatas = [];
    //     $m = 0;
    //     foreach (request('marketplace_name') as $value) {
    //         $marketplaceData = [
    //             'owner_business_id' => $businessOwner->id,
    //             'marketplace_type_id' => $value,
    //             'link' => request('marketplace_address')[$m++]
    //         ];
    //         array_push($marketplaceDatas, $marketplaceData);
    //     }
    //     Marketplace::insert($marketplaceDatas);

    //     $websiteDatas = [];
    //     $w = 0;
    //     foreach (request('situs_name') as $value) {
    //         $websiteData = [
    //             'owner_business_id' => $businessOwner->id,
    //             'social_media_type_id' => $value,
    //             'link' => request('username')[$w++]
    //         ];
    //         array_push($websiteDatas, $websiteData);
    //     }

    //     for ($p=1; $p <= 3; $p++) {
    //         $product_type_id = 'product_type_id' . $p;
    //         $name = 'product_name_' . $p;
    //         $description = 'product_description_' . $p;
    //         $productData = [
    //             'owner_business_id' => $businessOwner->id,
    //             'product_type_id' => request($product_type_id),
    //             'name' => request($name),
    //             'description' => request($description)
    //         ];
    //         $product = Product::insert($productData);
    //         $text = 'file_product_' . $p;
    //         foreach (request($text) as $pi) {
    //             $product_image_path = Cloudinary::upload($pi->getRealPath())->getSecurePath();
    //             ProductImage::create([
    //                 'product_id' => $product->id,
    //                 'photo' => $product_image_path
    //             ]);
    //         }
    //     }
    // }

    function create($request)
    {
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

        // Testimoni
        $testiDatas = [];
        for ($i = 0; $i < count($request->client_name); $i++) {
            $client_name = request('client_name')[$i];
            $existingTestimoni = Testimoni::where('client_name', $client_name)->first();

            if (!$existingTestimoni) {
                $testiData = [
                    'owner_business_id' => $businessOwner->id,
                    'client_name' => $client_name,
                    'message' => request('client_testimoni')[$i],
                    'is_show' => request('client_testimoni_show')[$i] ?? 0
                ];
                array_push($testiDatas, $testiData);
            }
        }
        Testimoni::insert($testiDatas);

        // PromoOrEvent
        $promoDatas = [];
        for ($t = 1; $t <= 3; $t++) {
            $name = 'promo_name_' . $t;
            $sub_title = 'promo_sub_title_' . $t;
            $link = 'link_teks_button_' . $t;
            $promoData = [
                'owner_business_id' => $businessOwner->id,
                'name' => request($name),
                'sub_title' => request($sub_title),
                'link' => request($link)
            ];
            array_push($promoDatas, $promoData);
        }
        PromoOrEvent::insert($promoDatas);

        // Marketplace
        $marketplaceDatas = [];
        $m = 0;
        foreach (request('marketplace_name') as $value) {
            $marketplaceData = [
                'owner_business_id' => $businessOwner->id,
                'marketplace_type_id' => $value,
                'link' => request('marketplace_address')[$m++]
            ];
            array_push($marketplaceDatas, $marketplaceData);
        }
        Marketplace::insert($marketplaceDatas);

        // Website
        $websiteDatas = [];
        $w = 0;
        foreach (request('situs_name') as $value) {
            $websiteData = [
                'owner_business_id' => $businessOwner->id,
                'social_media_type_id' => $value,
                'link' => request('username')[$w++]
            ];
            array_push($websiteDatas, $websiteData);
        }
        // Masukkan data ke dalam tabel
        SocialMedia::insert($websiteDatas);

        // Produk
        for ($p = 1; $p <= 3; $p++) {
            $product_type_id = 'product_type_id' . $p;
            $name = 'product_name_' . $p;
            $description = 'product_description_' . $p;
            $productData = [
                'owner_business_id' => $businessOwner->id,
                'product_type_id' => request($product_type_id),
                'name' => request($name),
                'description' => request($description)
            ];
            $product = Product::create($productData);

            // Unggah gambar produk
            $text = 'file_product_' . $p;
            foreach (request($text) as $pi) {
                $product_image_path = Cloudinary::upload($pi->getRealPath())->getSecurePath();
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
