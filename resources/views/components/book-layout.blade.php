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
                        <ul>
                            <li>
                                <a href='{{url("/home")}}' class='text-white'>Trang Chủ</a>
                            </li>
                            <li>
                                <a href='{{url("/home?book_id=1")}}' class='text-white'>Tiểu Thuyết</a>
                            </li>
                            <li>
                                <a href='{{url("/home?book_id=2")}}' class='text-white'>Truyện ngắn-Tản văn</a>
                            </li>
                            <li>
                                <a href='{{url("/home?book_id=3")}}' class='text-white'>Tác phẩm kinh điển</a>
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
</body>

</html>