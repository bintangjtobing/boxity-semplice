<?php
namespace App\Helper;

use App\Paket;
use App\Module;
use App\ModuleGroup;
use App\Transaction;
use App\BusinessHasPaket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/**
 *
 */
class Helper
{
    public static function getSuperadminMenu()
    {
        $role_id = Auth::guard('superadmin')->user()->role_id;
        $menus = collect([]);

        $withoutSub = Module::query()
        ->with(['Authorization' => function ($query) use ($role_id) {
            $query->where('role_id', $role_id)->where('authorization_type_id', 1);
        }])
        ->whereHas('Authorization', function ($query) use ($role_id) {
            $query->where('role_id', $role_id)->where('authorization_type_id', 1);
        })
        ->where('module_group_id', null)
        ->where('type', 1)
        ->orderBy('order', 'asc')
        ->get();
        $withSub = ModuleGroup::query()
        ->with(['Modules' => function ($query) use ($role_id) {
            $query->whereHas('Authorization', function ($query) use ($role_id) {
                $query->where('role_id', $role_id)->where('authorization_type_id', 1)->where('type', 1);
            });
        }])
        ->whereHas('Modules', function ($query) use ($role_id) {
            $query->whereHas('Authorization', function ($query) use ($role_id) {
                $query->where('role_id', $role_id)->where('authorization_type_id', 1)->where('type', 1);
            });
        })->get();
        foreach ($withSub as $ws) {
            $menus = $withoutSub->push($ws);
        }
        $array = collect($menus)->sortBy('order');
        return $array;
    }

    public static function getAdminMenu()
    {
        $role_id = Auth::guard('admin')->user()->role_id;
        $menus = collect([]);

        $withoutSub = Module::query()
        ->with(['Authorization' => function ($query) use ($role_id) {
            $query->where('role_id', $role_id)->where('authorization_type_id', 1);
        }])
        ->whereHas('Authorization', function ($query) use ($role_id) {
            $query->where('role_id', $role_id)->where('authorization_type_id', 1);
        })
        ->where('module_group_id', null)
        ->orderBy('order', 'asc')
        ->where('type', 2)
        ->get();
        $withSub = ModuleGroup::query()
        ->with(['Modules' => function ($query) use ($role_id) {
            $query->whereHas('Authorization', function ($query) use ($role_id) {
                $query->where('role_id', $role_id)->where('authorization_type_id', 1)->where('type', 2);
            });
        }])
        ->whereHas('Modules', function ($query) use ($role_id) {
            $query->whereHas('Authorization', function ($query) use ($role_id) {
                $query->where('role_id', $role_id)->where('authorization_type_id', 1)->where('type', 2);
            });
        })->get();
        if (count($withSub) != 0) {
            foreach ($withSub as $ws) {
                $menus = $withoutSub->push($ws);
            }
        } else {
            $menus = $withoutSub;
        }
        return $menus;
    }

    public static function getCurrentUrlAdmin() {
        $currentUrl = url()->current();
        $implode = explode('/', $currentUrl);
        $currentUrl = $implode[3];
        return $currentUrl;
    }

    public static function getCurrentRouteAdmin() {
        $currentUrl = url()->current();
        $implode = explode('/', $currentUrl);
        $currentUrl = $implode[3];
        $route = $currentUrl . '_view_index';
        return $route;
    }

    public static function changeRouteName()
    {
        $currentUrl = url()->current();
        $implode = explode('/', $currentUrl);
        $route = $implode[3];
        $menu = Module::where('route', $route)->first();
        if ($menu) {
            $route = $menu->name;
        }
        return $route;
    }

    public static function strReplace($str, $from, $to) {
        $str = str_replace($from, $to, $str);
        return $str;
    }

    public static function getMaxUploadProduct($owner_business_id)
    {
        $now = \Carbon\Carbon::now();
        $businessHasPaket = BusinessHasPaket::where('owner_business_id', $owner_business_id)->where('expired_date', '>', $now)->first();
        $transaction = Transaction::find($businessHasPaket->transaction_id);
        $paket = Paket::find($transaction->paket_id);
        return $paket->max_upload_product;
    }

    public static function getMaxUploadTestimoni($owner_business_id)
    {
        $now = \Carbon\Carbon::now();
        $businessHasPaket = BusinessHasPaket::where('owner_business_id', $owner_business_id)->where('expired_date', '>', $now)->first();
        $transaction = Transaction::find($businessHasPaket->transaction_id);
        $paket = Paket::find($transaction->paket_id);
        return $paket->max_upload_testimonial;
    }

    public static function checkFileExistInTable($product_id, $file)
    {
        $check = DB::table('product_images')->where('product_id', $product_id)->where('photo', 'LIKE', '%' . $file . '%')->first();
        if ($check) {
            return true;
        } else {
            return false;
        }
    }
}
