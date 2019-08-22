<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link ref="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <title>Quan ly phim</title>
</head>
<body>
<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col">MÃ PHIM</th>
        <th scope="col">TÊN PHIM</th>
        <th scope="col">DIỄN VIÊN</th>
        <th scope="col">ĐẠO DIỄN</th>
        <th scope="col">THỂ LOẠI PHIM</th>
        <th scope="col">THỜI LƯỢNG</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($phims as $phim)
        <tr>
            <td>{{$phim->MaPhim}}</td>
            <td>{{$phim->tenPhim}}</td>
            <td>{{$phim->dienVien}}</td>
            <td>{{$phim->daoDien}}</td>
            <td>{{App\Phim::$_theLoaiPhim[$phim->theLoaiPhim]}}</td>
            <td>{{$phim->thoiLuong}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $phims->links() !!}
</body>
</html>
