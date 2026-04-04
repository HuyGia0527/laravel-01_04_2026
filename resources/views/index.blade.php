<x-book-layout>
    <x-slot name='title'>Sách</x-slot>

    <style>
        /* Ép khung ảnh cố định tỉ lệ 3:4 hoặc tùy ý */
        .img-wrapper {
            position: relative;
            width: 100%;
            padding-top: 133%; /* Tỉ lệ khung hình (ví dụ cao hơn rộng) */
            overflow: hidden;
            background: #f0f0f0;
        }

        .img-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Quan trọng nhất: Giúp ảnh không bị méo */
        }
        
        .book-item {
            transition: transform 0.2s;
        }
        
        .book-item:hover {
            transform: translateY(-5px); /* Hiệu ứng nhẹ khi di chuột vào */
        }
    </style>

    <div class="container mt-4">
        <div class="row">
            @foreach ($data as $row)
                <div class="col-6 col-md-4 col-lg-3 mb-4"> <div class="book-item d-flex flex-column align-items-center">
                        <div class="img-wrapper shadow-sm rounded">
                            <img src='{{ asset("hinh/image/image/$row->file_anh_bia") }}' class="img-fluid">
                        </div>
                        <div class="mt-2 text-center">
                            <a href="#" class="text-decoration-none text-dark fw-bold d-block">{{ $row->tieu_de }}</a>
                            <span class="text-danger font-weight-bold">{{ number_format($row->gia_ban, 0, ',', '.') }} đ</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-book-layout>