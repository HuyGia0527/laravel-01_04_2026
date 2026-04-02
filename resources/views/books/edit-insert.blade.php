<x-account-layout>
    @if ($errors->any())
    <div style='color:red; margin:0 auto'>
        <div>
            {{ __('Whoops! Something went wrong.') }}
        </div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($action=="add")
    <form action="{{route('book.insert',['action'=>$action])}}" method="post" enctype="multipart/form-data">
        <div style='text-align:center;font-weight:bold;color:#15c;'>THÊM THÔNG TIN SÁCH</div>
        <label>Tiêu đề</label>
        <input type='text' class='form-control form-control-sm' name='tieu_de' value="">
        <label>Nhà xuất bản</label>
        <input type='text' class='form-control form-control-sm' name='nha_xuat_ban' value="">
        <label>Nhà cung cấp</label>
        <input type='text' class='form-control form-control-sm' name='nha_cung_cap' value="">
        <label>Tác giả</label>
        <input type='text' class='form-control form-control-sm' name='tac_gia' value="">
        <label>Hình thức bìa</label>
        <input type='text' class='form-control form-control-sm' name='hinh_thuc_bia' value="">
        <label>Giá bán</label>
        <input type='text' class='form-control form-control-sm' name='gia_ban' value="">
        <label>Thể loại</label>
        <select name='the_loai' class='form-control form-control-sm'>
            @foreach($type as $row)
            <option value='{{$row->id}}'>
                {{$row->ten_the_loai}}
            </option>
            @endforeach
        </select>
        <label>Ảnh đại diện</label><br>
        <input type="file" name="file_anh_bia" accept="image/*" class="form-control-file">
        {{ csrf_field() }}
        <div style='text-align:center;'><input type='submit' class='btn btn-primary mt-1' value='Lưu'></div>
    </form>

    @elseif($action=="edit")
    <form action="{{ route('book.update',['action'=>$action]) }}" method="post" enctype="multipart/form-data">
        <div style='text-align:center;font-weight:bold;color:#15c;'>SỬA THÔNG TIN SÁCH</div>
        <label>Tiêu đề</label>
        <input type='text' class='form-control form-control-sm' name='tieu_de' value="{{$sach->tieu_de??''}}">
        <label>Nhà xuất bản</label>
        <input type='text' class='form-control form-control-sm' name='nha_xuat_ban' value="{{$sach->nha_xuat_ban??''}}">
        <label>Nhà cung cấp</label>
        <input type='text' class='form-control form-control-sm' name='nha_cung_cap' value="{{$sach->nha_cung_cap??''}}">
        <label>Tác giả</label>
        <input type='text' class='form-control form-control-sm' name='tac_gia' value="{{$sach->tac_gia??''}}">
        <label>Hình thức bìa</label>
        <input type='text' class='form-control form-control-sm' name='hinh_thuc_bia' value="{{$sach->hinh_thuc_bia??''}}">
        <label>Giá bán</label>
        <input type='text' class='form-control form-control-sm' name='gia_ban' value="{{$sach->gia_ban??''}}">
        <label>Thể loại</label>
        <select name='the_loai' class='form-control form-control-sm'>
            @php
            $selected = isset($book->the_loai)?$book->the_loai:"";
            @endphp
            @foreach($type as $row)
            <option value='{{$row->id}}' {{$selected==$row->id?'selected':''}}>
                {{$row->ten_the_loai}}
            </option>
            @endforeach
        </select>
        <label>Ảnh đại diện</label><br>
        <img src='{{ asset("Image/$book->file_anh_bia") }}' width="50px" class='mb-1' />
        <input type='hidden' value='{{$book->id}}' name='id'>
        <input type="file" name="file_anh_bia" accept="image/*" class="form-control-file">
        {{ csrf_field() }}
        <div style='text-align:center;'><input type='submit' class='btn btn-primary mt-1' value='Lưu'></div>
    </form>
    @endif
</x-account-layout>