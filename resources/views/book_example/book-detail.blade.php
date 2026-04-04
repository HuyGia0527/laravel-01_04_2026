<x-book-layout>
    <x-slot name='title'>
        Sách chi tiết
    </x-slot>
<<<<<<< HEAD:resources/views/books/show.blade.php

@foreach($book as $row)
<div class="ml-2"><h4>{{$row->tieu_de}}</h4></div>

<div>
    <div class='row'>
        <div class='col-3'>
            <img src='{{asset("Image/$row->file_anh_bia")}}' class='book-cover-container ml-2'>
=======
    @foreach($book as $row)
    <div><h6>{{$row->tieu_de}}</h6></div>
    <div>
        <div class='row'>
        <div class='col-3'>
            <img src='{{asset("Image/$row->file_anh_bia")}}' class = 'book-cover-container'>
>>>>>>> parent of c9a20b9 (Huynh An update yeu cau 4):resources/views/book_example/book-detail.blade.php
        </div>

        <div>
            <div>Nhà cung cấp: <b>{{$row->nha_cung_cap}}</b></div>
            <div>Nhà xuất bản: <b>{{$row->nha_xuat_ban}}</b></div>
            <div>Tác giả: <b>{{$row->tac_gia}}</b></div>
            <div>Hình thức bìa: <b>{{$row->hinh_thuc_bia}}</b></div>
        </div>
        </div>
    </div>
    <div><b>Mô tả:</b></div>
    <p>{{$row->mo_ta}}</p>
    @endforeach
<<<<<<< HEAD:resources/views/books/show.blade.php

            <!-- 🛒 THÊM VÀO GIỎ -->
            <div class='mt-3'>
                Số lượng mua:
                <input type='number' id='product-number' size='5' min="1" value="1">
                <button class='btn btn-success btn-sm mb-1 add-to-cart'
                    data-id="{{$row->id}}">
                    Thêm vào giỏ hàng
                </button>
            </div>
        </div>
    </div>
</div>

<div class="px-3 pt-3"><b>Mô tả:</b></div>
<p class="px-3">{{$row->mo_ta}}</p>
@endforeach


</x-new-book-layout>
=======
</x-book-layout>
>>>>>>> parent of c9a20b9 (Huynh An update yeu cau 4):resources/views/book_example/book-detail.blade.php
