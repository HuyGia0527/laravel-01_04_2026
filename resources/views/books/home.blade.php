<x-new-book-layout>
    <x-slot name='title'>
        Danh sách
    </x-slot>

<div class='container'>
    <div class='row mt-3'>
        @foreach ($books as $book)
        <div class='col-3'>
            <div>
                <img src='{{asset("Image/$book->file_anh_bia")}}' class='img-thumbnail book-cover-container'>
            </div>

            <div>
                <div class='text-center'>
                    <a href="{{ route('book.show', ['id' => $book->id]) }}">
                        <b class='text-dark'>{{ $book->tieu_de}}</b>
                    </a>
                </div>

                <div class='text-center'>
                    <i>{{ number_format($book->gia_ban, 0, ',', '.') }} VNĐ</i>
                </div>

                <!-- 🛒 THÊM VÀO GIỎ -->
                <div class='text-center mt-2'>
                    <button class='btn btn-success btn-sm mb-1 add-product'
                            book_id="{{$book->id}}">
                        Thêm vào giỏ hàng
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


</x-new-book-layout>
