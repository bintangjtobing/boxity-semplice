<?php

namespace App\Repository\Admin;

use App\Admin;
use App\BusinessHasPaket;
use Exception;
use Carbon\Carbon;
use App\OwnerBusiness;
use App\Transaction;
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
        $admin = Admin::create($data);
        $business = OwnerBusiness::create([
            'owner_id' => null,
            'url' => null,
            'photo' => null,
            'description' => null,
            'address' => null,
            'link_location' => null,
            'is_show_location' => null,
            'whatsapp_number' => null,
            'phone_number' => null,
            'email' => null,
            'admin_id' => $admin->id
        ]);

        $transaction = Transaction::create([
            'price' => 0,
            'value' => 1,
            'duration_type' => 'Bulanan',
            'transaction_date' => Carbon::now(),
            'status' => 1,
            'paket_id' => 1
        ]);

        BusinessHasPaket::create([
            'expired_date' => Carbon::now()->addMonth(),
            'transaction_id' => $transaction->id,
            'owner_business_id' => $business->id
        ]);
    }
}
