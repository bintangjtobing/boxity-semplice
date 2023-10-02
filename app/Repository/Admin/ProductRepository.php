<?php

namespace App\Repository\Admin;

use Exception;
use App\Product;
use Carbon\Carbon;
use App\ProductType;
use App\ProductImage;
use App\Helper\Helper;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductRepository
{
    function getProductType() {
        $data = ProductType::orderBy('id', 'asc')->get();
        return $data;
    }

    function getSingleData($id) {
        $data = Product::find($id);
        return $data;
    }

    function getData($n) {
        $search = request('search');
        $data = Product::orderBy('id', 'asc');
        if ($search) {
            $data = $data->where('name', 'like', '%' . $search . '%');
        }
        return $data->paginate($n);
    }

    function add() {
        $owner_business_id = Auth::guard('admin')->user()->ownerBusiness->id;
        $productData = [
            'owner_business_id' => $owner_business_id,
            'product_type_id' => request('product_type_id'),
            'name' => request('name'),
            'description' => request('description')
        ];
        $count = Product::where('owner_business_id', $owner_business_id)->count();
        $max_upload_product = Helper::getMaxUploadProduct($owner_business_id);
        if ($count >= $max_upload_product) {
            throw new Exception('Maksimal ' . $max_upload_product . ' Produk');
        }
        $product = Product::create($productData);

        $file = request('file_product');
        foreach ($file as $key => $value) {
            $path = Cloudinary::upload($value->getRealPath())->getSecurePath();

            $productImage = ProductImage::create([
                'product_id' => $product->id,
                'photo' => $path
            ]);
        }
    }

    function update($id) {
        $data = Product::find($id);
        $array = [
            'social_media_type_id' => request('social_media_site_type_id'),
            'link' => request('link')
        ];
        $data->update($array);
    }

    function delete($id) {
        $data = Product::find($id);
        $data->delete();
    }
}
