<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repository\Admin\AuthRepository;

class AuthController extends Controller
{
    protected $repo;

    function __construct() {
        $this->repo = new AuthRepository;
    }

    function viewBusinessLanding() {

    }

    function viewLogin() {
        if (auth()->guard('admin')->check()) {
            return redirect('dashboard');
        } else {
            return view('admin.page.login');
        }
    }

    function processLogin(Request $request) {
        $email = request('username_or_email');
        $password = request('password');
        $timezone = 'Asia/Jakarta';
        $now = \Carbon\Carbon::now($timezone);
        $admin = Admin::whereHas('Role', function($query) {
            $query->where('type', 2);
        });
        if (str_contains($request->username_or_email, '@')) {
            $admin = $admin->where('email', $request->username_or_email)->first();
        } else {
            $admin = $admin->where('username', $request->username_or_email)->first();
        }

        if ($admin) {
            if (Hash::check($password, $admin->password)) {
                Auth::guard('admin')->login($admin);
                $message = [
                    'status' => true,
                    'success' => 'Login Success'
                ];
                return response()->json($message);
            } else {
                $message = [
                    'status' => false,
                    'error' => 'Password Missmatch'
                ];
                return response()->json($message);
            }
        } else {
            $message = [
                'status' => false,
                'error' => 'Username or Email Not Found'
            ];
            return response()->json($message);
        }
    }

    function viewRegister() {
        return view('admin.page.register');
    }

    function processRegister(Request $request) {
        DB::beginTransaction();
        try {
            $this->repo->register();
            DB::commit();
            $message = [
                'status' => true,
                'message' => 'Register Successfull'
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
