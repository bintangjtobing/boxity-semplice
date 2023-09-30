<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repository\Admin\LocationRepository;

class LocationController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new LocationRepository;
    }

    public function view()
    {
        $data['data'] = $this->repo->getSingleData();
        if ($data['data']) {
            $content = view('admin.location.edit', $data);
            return view('admin.common.main', compact('content'));
        }
    }

    function update(Request $request){
        DB::beginTransaction();
        try {
            $data = $this->repo->update();
            DB::commit();
            $message = [
                'status' => true,
                'success' => 'Data has been updated'
            ];
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => $exception->getMessage()
            ];
        }
        return response()->json($message);
    }
}