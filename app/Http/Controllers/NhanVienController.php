<?php

namespace App\Http\Controllers;

use App\NhanVien;
use App\To;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class NhanVienController extends Controller
{
    public function display($to, $phongban_id) {
        $nhanvien = NhanVien::where('to', $to)->where('phongban_id', $phongban_id)->get();
        $to = To::where('to', $to)->where('phongban_id', $phongban_id)->get();

        return view('nhanVien', ['nhanvien' => $nhanvien, 'to' => $to]);
    }

    public function insert(Request $request) {
        $validate = Validator::make(
            $request->all(),
            [
                'hoten' => 'required|max:255',
                'gioitinh' => 'required|max:10',
                'sodienthoai' => 'required|regex:/[0-9]{10}/',
                'email' => 'required|email',
                'password' => 'required|max:255',
                'phongban_id' => 'required',
                'to' => 'required',
            ],
            [
                'hoten.required' => 'Họ tên không được để trống',
                'password.required' => 'Mật khẩu không được để trống',
                'sodienthoai.required' => 'Mật khẩu không được để trống',
                'sodienthoai.regex' => 'Điện thoại không hợp lệ',
                'email.required' => 'Điện thoại không hợp lệ',
                'email' => "Email không hợp lệ",
                'max' => "Độ dài nhỏ hơn 255",
            ]
        );

        if($validate->fails()) {
            return redirect('nhanvien/'.$request->get('phongban_id').'/'.$request->get('to'))
                ->withErrors($validate);
        } else {
            $nhanvien = new NhanVien();
            $nhanvien->hoten = $request->get('hoten');
            $nhanvien->gioitinh = $request->get('gioitinh');
            $nhanvien->sodienthoai = $request->get('sodienthoai');
            $nhanvien->email = $request->get('email');
            $nhanvien->password = Hash::make($request->get('password'));
            $nhanvien->phongban_id = $request->get('phongban_id');
            $nhanvien->phancap_id = $request->get('phancap_id');
            $nhanvien->to = $request->get('to');
            $nhanvien->save();
            return redirect('nhanvien/'.$request->get('phongban_id').'/'.$request->get('to'))
                ->with('thongbao', 'Thêm thành công');
        }
    }

}
