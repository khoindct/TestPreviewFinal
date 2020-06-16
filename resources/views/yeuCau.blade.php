@extends('layouts.app')

@section('title', 'Yêu cầu')

@section('content')
    <div class="bocngoai">

        <div class="tranghienthi">
            <div class="container">
                <h3 class="display-4 text-xs-center mt-2">Danh sách yêu cầu</h3>
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
                        <th scope="col">#</th>
                        <th scope="col" class="text-xs-center">Họ tên</th>
                        <th scope="col" class="text-xs-center">Loại</th>
                        <th scope="col" class="text-xs-center">Hình thức</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($yeucau as $yeucau)
                    <tr>
                        <th scope="row">{{ $yeucau->id }}</th>
                        <td>{{ $yeucau->nguoiyeucau }}</td>
                        <td>{{ $yeucau->LoaiYeuCau->tenyeucau }}</td>
                        <td>{{ $yeucau->HinhThucYeuCau->hinhthuc }}</td>
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
                @if(session('username'))
                <h3 class="display-4 text-xs-center">Thêm mới yêu cầu</h3>

                <form method="POST" action="{{ url('themmoi') }}">
                    {{ csrf_field()}}

                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Người yêu cầu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Họ tên" name="nguoiyeucau">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label for="loaiyeucau" class="col-sm-4 col-form-label">Loại yêu cầu</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="loaiyeucau">
                                @foreach($loai as $l)
                                        <option value="{{ $l->loaiyeucau_id }}">{{ $l->tenyeucau }}</option>
                                @endforeach
                                    <option value="7">Test</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label for="hinhthuc" class="col-sm-4 col-form-label">Hình thức tiếp nhận</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="hinhthucyeucau">
                                @foreach($hinhthuc as $h)
                                    <option value="{{ $h->hinhthuc_id }}">{{ $h->hinhthuc }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-block">Thêm mới</button>
                </form>
                @else
                    <div class="alert alert-danger">Bạn cần đăng nhập để thực hiện chức năng này</div>

                @endif
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
