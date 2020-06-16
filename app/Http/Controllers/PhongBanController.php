<?php


namespace App\Http\Controllers;

use App\PhongBan;
use App\To;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Validator;

class PhongBanController extends BaseController
{
    public function display(Request $request) {
        if(empty($request->all())) {
            $phongban = PhongBan::all();
            $to = To::where('phongban_id', '1')->get();

            return view('phongBan', ['phongban' => $phongban, 'to' => $to]);
        } else {
            $phongban_id = $request->get('chon_ban');

            $max_phongban = PhongBan::all()->count();

            $validate = Validator::make(
                $request->all(),
                [
                    'chon_ban' => 'integer|min:1|max:' . $max_phongban,
                ],
                [
                    'integer' => 'Int: Lựa chọn không hợp lệ',
                    'min' => 'Min: Lựa chọn không hợp lệ',
                    'max' => 'Max: Lựa chọn không hợp lệ :max',

                ]
            );

            if ($validate->fails()) {
                return redirect('phongban')->withErrors($validate);
            } else {
                $phongban = PhongBan::all();
                $to = To::where('phongban_id', $phongban_id)->get();

                return view('phongBan', ['phongban' => $phongban, 'to' => $to]);
            }
        }
    }

    public function detail(Request $request) {
        $phongban_id = $request->get('chon_ban');

        $max_phongban = PhongBan::all()->count();

        $validate = Validator::make(
            $request->all(),
            [
                'chon_ban' => 'integer|min:1|max:'.$max_phongban,
            ],
            [
                'integer' => 'Int: Lựa chọn không hợp lệ',
                'min' => 'Min: Lựa chọn không hợp lệ',
                'max' => 'Max: Lựa chọn không hợp lệ :max',

            ]
        );

        if ($validate->fails()) {
            return redirect('phongban')->withErrors($validate);
        } else {
            $phongban = PhongBan::all();
            $to = To::where('phongban_id', $phongban_id)->get();

            return view('phongBan', ['phongban' => $phongban, 'to' => $to]);
        }
    }

}
