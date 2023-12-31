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
        $content = view('admin.dashboard.view');
        return view('admin.common.main', compact('content'));
    }
}
