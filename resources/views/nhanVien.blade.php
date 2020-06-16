@extends('layouts.app')

@section('title', 'Nhân viên')

@section('content')
    <div class="bocngoai">

        <div class="tranghienthi">
            <div class="container">
                @foreach($to as $t)
                <h3 class="display-4 text-xs-center mt-2" style="text-transform: uppercase">
                    {{ $t->PhongBan->tenphongban }}
                </h3>
                <div class="gioithieu my-2 text-xs-center">
                    Tổ {{ $t->to }}: {{ $t->nhiemvu }}
                </div>
                @endforeach
                @if($errors->any())
                    <div class="alert alert-danger thongbaoadd">
                        Thất bại: <br>
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success thongbaoadd">
                        {{session('thongbao')}}
                    </div>
                @endif
                <div class="phanloai my-2">

                        <button class="btn btn-primary btn-block nutthem">Thêm mới</button>
                </div>
                <table class="table table-striped table-hover text-xs-center">
                    <thead>
                    <tr>
                        <th scope="col" class="text-xs-center">Họ tên</th>
                        <th scope="col" class="text-xs-center">Giới tính</th>
                        <th scope="col" class="text-xs-center">Số điện thoại</th>
                        <th scope="col" class="text-xs-center">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($nhanvien as $nv)
                    <tr>
                        <td>{{ $nv->hoten }}</th>
                        <td>{{ $nv->gioitinh }}</td>
                        <td>{{ $nv->sodienthoai }}</td>
                        <td>{{ $nv->email }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- het hienhiyeucau -->
        <div class="trangthemmoi bienmat">
            <div class="nenden bienmat"></div>
            <div class="noidungthemmoi">
                <button class="btn btn-danger nuttat"><i class="fa fa-remove"></i></button>
                <h3 class="display-4 text-xs-center">Thêm mới nhân viên</h3>

                <form method="POST" action="{{ url('themnhanvien') }}">
                    {{ csrf_field()}}

                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Họ tên</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Họ tên" name="hoten">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Giới tính</label>
                            <div class="col-sm-8">
                                <select name="gioitinh" id="" class="form-control">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Số điện thoại</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Số điện thoại" name="sodienthoai">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Mật khẩu</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                            </div>
                        </div>
                    </fieldset>
                    @foreach($to as $t)
                    <input type="hidden" value="{{ $t->phongban_id }}" name="phongban_id">
                    <input type="hidden" value="2" name="phancap_id">
                    <input type="hidden" value="{{ $t->to }}" name="to">
                    @endforeach
                    <button type="submit" class="btn btn-primary btn-block">Thêm mới</button>
                </form>
            </div>
        </div> <!-- het trangthemmoi -->
    </div> <!-- het bocngoai -->

    <script>
        var thongbaoadd = document.getElementsByClassName('thongbaoadd');
        setTimeout(function () {
            for (i = 0; i < thongbaoadd.length; i++) {
                thongbaoadd[i].classList.add('xoa');
            }
        }, 5000);
    </script>
@endsection
