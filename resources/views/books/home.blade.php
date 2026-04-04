<x-new-book-layout>
    <x-slot name='title'>
        Danh sách
    </x-slot>
    <div id='book-view-div' class="container">
        <div class='list-book '>
            <div class="row">
                @foreach($books as $row)
                <div class="col-3">
                    <div class='book'>
                        <a href="{{route('book.show', ['id' => $row->id])}}">
                            <img src="{{asset('Image/'.$row->file_anh_bia)}}" width='200px' height='200px'><br>
                            <b>{{$row->tieu_de}}</b><br />
                            <i>{{number_format($row->gia_ban,0,",",".")}}đ</i><br>
                        </a>
                        <div class='text-center mt-2'>
                            <button class='btn btn-success btn-sm mb-1 add-product'
                                book_id="{{$row->id}}">
                                Thêm vào giỏ hàng
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
         
    </div>
</x-new-book-layout>