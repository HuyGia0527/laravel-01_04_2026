<h2>Danh sách thể loại phim</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Tên thể loại (EN)</th>
            <th>Tên thể loại (VN)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($theloaiphim as $theloai)
        <tr>
            <td>{{ $theloai->genre_name }}</td>
            <td>{{ $theloai->genre_name_vn }}</td>
        </tr>
        @endforeach
    </tbody>
</table>