<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Top 10 Phim</title>
</head>
<body>

<h1>DANH SÁCH 10 BỘ PHIM CÓ ĐIỂM CAO NHẤT</h1>
<hr>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Điểm</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $key => $movie)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}</td>
            <td>{{ $movie->vote_average }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr>
</body>
</html>