<!DOCTYPE html>
<html>
<head>
    <title>Phim Canada</title>
</head>
<body>

<h2>Danh sách phim Canada</h2>

<table border="1">
    <tr>
        <th>Tên phim</th>
        <th>Ngày phát hành</th>
        <th>Thời lượng</th>
    </tr>

    @foreach($movies as $movie)
    <tr>
        <td>{{ $movie->movie_name }}</td>
        <td>{{ $movie->release_date }}</td>
        <td>{{ $movie->runtime }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>