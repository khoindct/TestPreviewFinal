<?php


namespace App\Http\Controllers;

use App\HinhThucYeuCau;
use App\LoaiYeuCau;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\YeuCau;
use Illuminate\Support\Facades\Auth;
use Validator;

class YeuCauController extends BaseController
{
    public function display() {
        $loai = LoaiYeuCau::all();
        $hinhthuc = HinhThucYeuCau::all();
        $yeucau = YeuCau::all();

        return view('yeuCau', ['yeucau' => $yeucau, 'loai' => $loai, 'hinhthuc' => $hinhthuc]);
    }

    public function add(Request $request) {
        $max_yeucau = LoaiYeuCau::all()->count();
        $max_hinhthuc = HinhThucYeuCau::all()->count();

        $validate = Validator::make(
            $request->all(),
            [
                'nguoiyeucau' => 'required|max:255',
                'loaiyeucau' => 'required|integer|min:1|max:'.$max_yeucau,
                'hinhthucyeucau' => 'required|integer|min:1|max:'.$max_hinhthuc,
            ],
            [
                'nguoiyeucau.required' => ' Họ tên không được để trống',
                'nguoiyeucau.max' => ' Họ tên không được lớn hơn :max',
                'integer' => "Int - Lựa chọn không hợp lệ",
                'min' => "Min - Lựa chọn không hợp lệ",
                'max' => "Max - Lựa chọn không hợp lệ",
            ]
        );


//        return redirect('yeucau')->with('thongbao', 'Thêm thành công');
        if($validate->fails()) {
            return redirect('yeucau')->withErrors($validate);
        } else {
            $yeucau = new YeuCau();
            $yeucau->nguoiyeucau = $request->get('nguoiyeucau');
            $yeucau->loaiyeucau_id = $request->get('loaiyeucau');
            $yeucau->hinhthuc_id = $request->get('hinhthucyeucau');
            $yeucau->save();
            return redirect('yeucau')->with('thongbao', 'Thêm thành công');
        }
    }
}
