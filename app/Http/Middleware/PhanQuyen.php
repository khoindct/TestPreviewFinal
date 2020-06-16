<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class PhanQuyen
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
        $phanquyen = Session::get('phancap');

        if (empty($phanquyen)) {
            return redirect('dangnhap');
        }

        if($phanquyen[0] == 1) {
            return $next($request);
        }

        return redirect('thanhcong');
    }
}
