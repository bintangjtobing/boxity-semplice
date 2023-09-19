<?php

namespace App\Repository\Admin;

use Exception;
use Carbon\Carbon;

class DashboardRepository
{
    function create($request)
    {
        dd($request->all());
        $file = $request->file('file_photo_owner');
        dd($file);
        dd(request());
        if ($request->hasFile('file_photo_owner')) {
            $file = $request->file('file_photo_owner');
            dd($file);
        }
        dd('out');
    }
}
