<!DOCTYPE html>
<html>
<head>
    <title>Doanh thu</title>
</head>
<body>

<h2>Top 10 phim có doanh thu cao nhất</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Doanh thu (USD)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ number_format($movie->budget) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>