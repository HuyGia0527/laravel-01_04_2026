<h1>Danh sách phim Action</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Mô tả</th>
            <th>Ảnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ $movie->overview }}</td>
            <td>
                <img src="{{ $movie->image_link }}" width="120">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>