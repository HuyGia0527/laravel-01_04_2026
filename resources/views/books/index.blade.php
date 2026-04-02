<x-account-layout>
    <x-slot name='title'>
        Quản lý sách
    </x-slot>
    <div class="text-center">
        <h3>Danh mục sách</h3>
    </div>

    <div class="container">
        <!--Nút "Thêm"-->
        <div class="mb-3">
            <a href="{{route('book.create')}} " class="btn btn-success px-2 py-1 font-weight-bold">Thêm</a>
        </div>


        <div class="table-responsive">
            <table class="table table-bordered align-middle" id="book-table">
                <thead>
                    <tr>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Nhà xuất bản</th>
                        <th scope="col">Nhà cung cấp</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Hình thức bìa</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td> {{ $book->tieu_de }} </td>
                        <td> {{ $book->nha_xuat_ban }} </td>
                        <td> {{ $book->nha_cung_cap }} </td>
                        <td> {{ $book->tac_gia }} </td>
                        <td> {{ $book->hinh_thuc_bia }} </td>
                        <td> {{ $book->gia_ban }} </td>
                        <td><img src='{{ asset("Image/$book->file_anh_bia") }}' class="img-thumbnail"
                                style="max-height: 60px; max-width: 60px;"></td>
                        <td>
<a href=" {{ route('book.edit', [ 'id'=> $book->id]) }} " class="btn btn-info btn-sm">Sửa</a>
                            <form method='post' action="{{route('book.delete')}}"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa cuốn sách này không?');">
                                    <input type='hidden' value='{{$book->id}}' name='id'>
                                    <input type='submit' class='btn btn-sm btn-danger' value='Xóa'>
                                    {{ csrf_field() }}
                            </form>                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

      <script>
        $(document).ready(function() {
            $('#book-table').DataTable({
                responsive: true,
                "bStateSave": true
            });
        });
    </script>

</x-account-layout>