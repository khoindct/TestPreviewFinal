@extends('layouts.app')

@section('title', 'Phòng ban')

@section('content')
    <div class="container mt-2">
            <form action="{{ url('phongban') }}" method="GET" class="form-control">
                {{ csrf_field() }}
                <div class="canchinh">
                    <div>
                        <select name="chon_ban" id="" class="form-control">
                            @foreach($phongban as $ban)
                                <option value="{{ $ban->phongban_id }}"> {{ $ban->tenphongban }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary">Xem chi tiết</button>
                     </div>
                </div>
            </form>
        @if($errors->any())
            <div class="alert alert-danger thongbaoadd">
                Thất bại:
                @foreach($errors->all() as $err)
                    {{$err}} <br>
                @endforeach
            </div>
        @endif
        @foreach ($to as $t)
            <h3 class="display-4 text-xs-center">Ban {{ $t->PhongBan->tenphongban }}</h3>
            <div class="gioithieu my-2">
                {{ $t->PhongBan->chucnang }}
            </div>
        @break
        @endforeach
    </div>

    <div class="table-responsive">
    <table class="table table-striped table-fixed" style="max-width: 80%; margin: auto">
        <thead>
        <tr>
            <th scope="col" class="text-xs-center">Tổ</th>
            <th scope="col" style="max-width: 60%" class="text-xs-center">Nhiệm vụ</th>
            <th scope="col" class="text-xs-center">Chi tiết</th>
        </tr>
        </thead>
        <tbody>
        @foreach($to as $t)
        <tr>
            <th width="20%" scope="row" class="text-xs-center">{{ $t->to }}</th>
            <td width="60%"> {{ $t->nhiemvu }}</td>
            <td width="20%" class="text-xs-center">
                <a href="{{ url('nhanvien/'.$t->to.'/'.$t->phongban_id) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
