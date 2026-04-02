<x-new-book-layout>
    <x-slot name='title'>
        Sách chi tiết
    </x-slot>
    @foreach($book as $row)
    <div class="ml-2"><h4>{{$row->tieu_de}}</h4></div>
    <div>
        <div class='row'>
        <div class='col-3'>
            <img src='{{asset("Image/$row->file_anh_bia")}}' class = 'book-cover-container ml-2'>
        </div>
        <div>
            <div>Nhà cung cấp: <b>{{$row->nha_cung_cap}}</b></div>
            <div>Nhà xuất bản: <b>{{$row->nha_xuat_ban}}</b></div>
            <div>Tác giả: <b>{{$row->tac_gia}}</b></div>
            <div>Hình thức bìa: <b>{{$row->hinh_thuc_bia}}</b></div>
        </div>
        </div>
    </div>
    <div  class="px-3 pt-3"><b>Mô tả:</b></div>
    <p  class="px-3">{{$row->mo_ta}}</p>
    @endforeach
</x-new-book-layout>