<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Admin\DashboardRepository;

class DashboardController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new DashboardRepository;
    }

    public function view()
    {
        $data['marketplace_types'] = $this->repo->getMarketplaceType();
        $data['social_media_types'] = $this->repo->getSocialMediaType();
        $data['url'] = $this->repo->getUrl();
        $data['product_types'] = $this->repo->getProductTypes();
        $data['owner_business'] = $this->repo->getOwnerBusiness();
        $content = view('admin.dashboard.view', $data);
        return view('admin.common.main', compact('content'));
    }

    function create(Request $request)
    {
        $banner = $this->repo->create($request);
        $data = [
            'status' => true,
            'message' => 'Success create data',
            'data' => $banner
        ];

        return response()->json($data, 200);
    }
}
