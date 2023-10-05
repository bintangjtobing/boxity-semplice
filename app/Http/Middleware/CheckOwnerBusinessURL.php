<?php

namespace App\Http\Middleware;

use Closure;
use App\OwnerBusiness;
use Illuminate\Support\Facades\Auth;

class CheckOwnerBusinessURL
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::guard('admin')->user();
        $businessOwner = OwnerBusiness::where('admin_id', $user->id)->first();
        if ($businessOwner->url == null) {
            return redirect()->route('dashboard_view_index');
        }
        return $next($request);
    }
}
