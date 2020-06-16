@extends('layouts.app')

@section('content')
<div class="ndnhanvien">
    <div class="noidungthemmoi">
        <div class="">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="cangiua">
                    <a href="{{ url('dangnhap') }}" class="btn btn-primary">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
