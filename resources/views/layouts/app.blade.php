<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    <nav class="navbar navbar-light bg-faded">
        <div class="container thanhmenu">
            <a class="navbar-brand" href="{{ url('yeucau') }}">TestPreview</a>

            <div class="col-sm-3 thanhnhanvien">
                @if(session('username'))
                    <div>Hello, {{ session('username')[0] }}</div>
                    <a href="{{ url('dangxuat') }}" class="btn btn-info">Log out</a>
                @else
                <a href="{{ url('dangnhap') }}">Đăng nhập</a>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')

    @if(session('phancap')[0] == 1)

        <div class="nutphongban">
            <a href="{{ url('phongban') }}" class="btn btn-danger"><i class="fa fa-home"></i></a>
        </div>
    @endif

    <script type="text/javascript" src="{{ asset('vendor/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
