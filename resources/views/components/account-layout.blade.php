<!DOCTYPE html>
<title>{{$title ?? "Chưa có tiêu đề"}}</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    .sidebar {
        background-color: #343a40;
        min-height: 100vh;
        color: white;
    }

    .nav-link {
        color: #ccc;
    }

    .nav-link:hover {
        color: white;
    }
</style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 sidebar">
                <ul class="nav flex-column mt-3">
                    <li class="nav-item p-3">
                        <a class="nav-link font-weight-bold" href="{{ route('account.update')}} ">
                            Thông tin tài khoản
                        </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link" href="{{url('home')}}">Quản lý sách</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 p-0">
                <div class="bg-light p-3 border-bottom">
                    <b class="ml-3">Trang chủ</b>
                </div>

                <div class="main-content p-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>


</body>

</html>