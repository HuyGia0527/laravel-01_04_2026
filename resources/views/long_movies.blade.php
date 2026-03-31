<!DOCTYPE html>
<html>
<head>
    <title>Danh sách phim</title>
</head>
<body>
    <h1>Phim có thời lượng > 120 phút</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Thời lượng</th>
        </tr>

        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ $movie->runtime }} phút</td>
        </tr>
        @endforeach

    </table>
</body>
</html>