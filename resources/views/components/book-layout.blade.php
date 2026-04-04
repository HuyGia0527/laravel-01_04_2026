<!DOCTYPE html>
<html>

<head>
    <title>{{$title ?? "Chưa có tiêu đề"}}</title>
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .book-cover-container {
            width: 100%;
            aspect-ratio: 3 / 4;
            overflow: hidden;
            border: 1px solid #ddd;
            padding: 10px;
            background: white;
        }

        .book-cover-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <header style='text-align:center'>
        <img src="{{asset('Banner/banner_sach.jpg')}}" width="1000px" class='container-fluid'>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div style="background-color: red" class="w-100 p-3 font-weight-bold text-white mt-3">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link menu-the-loai" href="#" the_loai="">Trang Chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-the-loai" href="#" the_loai="1">Tiểu Thuyết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-the-loai" href="#" the_loai="2">Truyện ngắn-Tản văn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-the-loai" href="#" the_loai="3">Tác phẩm kinh điển</a>
                            </li>
                        </ul>
                    </div>
                    <div><img src="{{asset('Sidebar/sidebar_1.jpg')}}" class="w-100 mt-3"></div>
                    <div><img src="{{asset('Sidebar/sidebar_2.jpg')}}" class="mt-2 w-100"></div>
                </div>
                <div class="col-9">
                    {{$slot ?? "Đang trống"}}
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class='row' style='text-align:center'>
            <div class='col-4'>TRỤ SỞ</div>
            <div class='col-4'>THÔNG TIN CHUNG</div>
            <div class='col-4'>BẢN ĐỒ</div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>