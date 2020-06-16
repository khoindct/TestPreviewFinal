<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DangNhapController extends Controller
{
    public function login() {
        return view('dangnhap');
    }

    public function authenticate(Request $request) {
        $data = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if(Auth::attempt($data)) {
            $hoten = Auth::user()->hoten;
            $phancap = Auth::user()->phancap_id;

            Session::push('username', $hoten);
            Session::push('phancap', $phancap);

            if ($phancap == 1) {
                return redirect('phongban');
            }
            elseif ($phancap == 2) {
                return redirect('yeucau');
            }
        } else {
            return back()->withInput()->with('thatbai', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }

    public function logout() {
        Session::flush();
        return redirect()->back();
    }
}
