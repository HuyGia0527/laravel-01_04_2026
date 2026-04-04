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
        <nav class="navbar navbar-dark bg-danger">
            <ul class="navbar-nav navbar-expand mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold mr-3" href="{{url('/home')}}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold mr-3" href="{{url('/home?book_id=1')}}">Tiểu thuyết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold mr-3"  href="{{url('/home?book_id=2')}}">Truyện ngắn-tản văn</a>
<<<<<<< HEAD
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold mr-3"  href="{{url('/home?book_id=3')}}">Tác phẩm kinh điển</a>
                </li>
            </ul>
            <!-- Xử lý hiển thị đăng nhập/đăng ký -->
            @auth
            <div class="dropdown">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('account.edit') }}">Quản lý</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" onclick="event.preventDefault();
                                this.closest('form').submit();">Đăng xuất</a>
                    </form>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}">
                <button class='btn btn-sm btn-primary'>Đăng nhập</button>
            </a>&nbsp;
            <a href="{{ route('register') }}">
                <button class='btn btn-sm btn-success'>Đăng ký</button>
            </a>
            @endauth
        </nav>
    </header>
    <main>
        {{$slot}}
    </main>
                    <a class="nav-link text-white font-weight-bold mr-3" href="{{url('/home?book_id=2')}}">Truyện ngắn-tản văn</a>
=======
>>>>>>> parent of e0d709e ([MERGE COMMIT] Làm trang giỏ hàng và trang đặt hàng)
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold mr-3"  href="{{url('/home?book_id=3')}}">Tác phẩm kinh điển</a>
                </li>
            </ul>
<<<<<<< HEAD

            
            <div class="d-flex align-items-center">

                
                <div style='color:white;position:relative' class='mr-3'>
                    <div style='width:20px; height:20px;background-color:#23b85c; font-size:12px; border:none;
                          border-radius:50%; position:absolute;right:2px;top:-2px; text-align:center; line-height:20px'
                        id='cart-number-product'>
                        @if (session('cart'))
                            {{ array_sum(session('cart')) }}
                        @else
                            0
                        @endif
                    </div>

                    <a href="{{route('order')}}" style='cursor:pointer;color:white;'>
                        <i class="fa fa-cart-arrow-down fa-2x mr-2 mt-2" aria-hidden="true"></i>
                    </a>
                </div>

                
                @auth
                <div class="dropdown">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('account.edit') }}">Quản lý</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" onclick="event.preventDefault();
                                    this.closest('form').submit();">Đăng xuất</a>
                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}">
                    <button class='btn btn-sm btn-primary'>Đăng nhập</button>
                </a>&nbsp;
                <a href="{{ route('register') }}">
                    <button class='btn btn-sm btn-success'>Đăng ký</button>
                </a>
                @endauth

=======
            <!-- Xử lý hiển thị đăng nhập/đăng ký -->
            @auth
            <div class="dropdown">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('account.edit') }}">Quản lý</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" onclick="event.preventDefault();
                                this.closest('form').submit();">Đăng xuất</a>
                    </form>
                </div>
>>>>>>> parent of e0d709e ([MERGE COMMIT] Làm trang giỏ hàng và trang đặt hàng)
            </div>
            @else
            <a href="{{ route('login') }}">
                <button class='btn btn-sm btn-primary'>Đăng nhập</button>
            </a>&nbsp;
            <a href="{{ route('register') }}">
                <button class='btn btn-sm btn-success'>Đăng ký</button>
            </a>
            @endauth
        </nav>
    </header>
    <main>
        {{$slot}}
    </main>
    <footer>
        <div class='row' style='text-align:center'>
            <div class='col-4'>TRỤ SỞ</div>
            <div class='col-4'>THÔNG TIN CHUNG</div>
            <div class='col-4'>BẢN ĐỒ</div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>


</html>

