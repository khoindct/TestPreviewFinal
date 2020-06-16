@extends('layouts.app')

@section('title', 'Đăng nhập')

@section('content')
    <div class="ndnhanvien">
        <div class="noidungthemmoi">
            <h3 class="display-4 text-xs-center">Đăng nhập</h3>

            <form method="POST" action=" {{ url('nvdangnhap') }}">
                {{ csrf_field()}}

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
                @if(session('thatbai'))
                    <div class="alert alert-danger text-xs-center">{{session('thatbai')}}</div>
                @endif
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </form>
        </div>
    </div>
@endsection
