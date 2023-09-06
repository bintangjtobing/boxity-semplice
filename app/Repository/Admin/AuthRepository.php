<?php

namespace App\Repository\Admin;

use App\Admin;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class AuthRepository
{
    function register() {
        $data = [
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'role_id' => 2,
            'is_active' => 1
        ];
        Admin::create($data);
    }
}
