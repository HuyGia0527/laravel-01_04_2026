<x-new-book-layout :hideFooter="true">
    <x-slot name='title'>
        Giỏ hàng
    </x-slot>

    <style>
    table {
        border-collapse: collapse;
    }
    th {
        background-color: #f1f1f1;
    }
    .btn-primary {
        padding: 8px 20px;
        font-weight: bold;
    }
    table, th, td {
        border: 2px solid #6c757d !important; 
    }
    </style>

    <div class="container mt-4">
        <h5 class="text-center text-primary font-weight-bold">
            DANH SÁCH SẢN PHẨM
        </h5>

        <table class="table table-bordered text-center mt-3">
            <thead class="bg-light">
                <tr>
                    <th>STT</th>
                    <th>Tên sách</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Xóa</th>
                </tr>
            </thead>

            <tbody>
                @php $i = 1; $total = 0; @endphp

                @foreach($data as $row)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->tieu_de }}</td>
                    <td>{{ $quantity[$row->id] }}</td>
                    <td>{{ number_format($row->gia_ban, 0, ',', '.') }}đ</td>
                    <td>
                        <form method="POST" action="{{ route('cartdelete') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>

                @php
                    $total += $row->gia_ban * $quantity[$row->id];
                @endphp
                @endforeach

                <tr>
                    <td colspan="3"><b>Tổng cộng</b></td>
                    <td colspan="2"><b>{{ number_format($total, 0, ',', '.') }}đ</b></td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-3">
            <div class="mb-2 font-weight-bold">Hình thức thanh toán</div>

            <form action="{{ route('ordercreate') }}" method="POST">
                @csrf
                <select name="hinh_thuc_thanh_toan" class="form-control w-25 mx-auto mb-3">
                    <option value="1">Tiền mặt</option>
                    <option value="2">Chuyển khoản</option>
                </select>
                <button class="btn btn-primary">ĐẶT HÀNG</button>
            </form>
        </div>
    </div>
</x-new-book-layout>