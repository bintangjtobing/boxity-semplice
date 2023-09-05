<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Admin\AuthRepository;

class AuthController extends Controller
{
    protected $repo;

    function __construct() {
        $this->repo = new AuthRepository;
    }

    function viewLogin() {
        return view('admin.page.login');
    }
}
