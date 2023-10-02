<?php

namespace App\Repository\Admin;

use App\Owner;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProfileRepository
{
    function getSingleData() {
        $data = Owner::first();
        return $data;
    }

    function update($request) {
        $data = Owner::first();
        $array = [
            'name' => request('name'),
            'description' => request('description'),
        ];
        if ($request->hasFile('file_photo')) {
            if ($data->photo) {
                $publicId = explode('/', $data->photo);
                $publicId = explode('.', $publicId[6]);
                $publicId = $publicId[0];
                Cloudinary::destroy($publicId);
            }
            $array['photo'] = Cloudinary::upload($request->file('file_photo')->getRealPath())->getSecurePath();
        }
        if ($data) {
            $data->update($array);
        } else {
            $array['photo'] = Cloudinary::upload($request->file('file_photo')->getRealPath())->getSecurePath();
            Owner::create($array);
        }
    }
}
