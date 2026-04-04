<h3 style="text-align: center; color: #0056b3; font-family: Arial, sans-serif;">THÔNG TIN ĐƠN HÀNG</h3>

<table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; border: 1px solid #333;">
    <thead>
        <tr style="background-color: #f8f9fa;">
            <th style="border: 1px solid #333; padding: 8px; text-align: center; width: 10%;">User_id</th>
            <th style="border: 1px solid #333; padding: 8px; text-align: center; width: 50%;">Ngày đặt hàng</th>
            <th style="border: 1px solid #333; padding: 8px; text-align: center; width: 20%;">Hình thức thanh toán</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #333; padding: 8px;">{{ $order['user_id']}}</td>
            <td style="border: 1px solid #333; padding: 8px; text-align: center;">{{ $order['ngay_dat_hang']}}</td>
            <td style="border: 1px solid #333; padding: 8px; text-align: right;">{{ $order['hinh_thuc_thanh_toan']}}</td>
        </tr>
    </tbody>
</table>