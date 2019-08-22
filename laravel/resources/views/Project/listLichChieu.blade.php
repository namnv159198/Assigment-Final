<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link ref="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <title>Quan ly lich chieu</title>
</head>
<body>
<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col">MÃ LỊCH CHIẾU</th>
        <th scope="col">MÃ SUẤT CHIẾU</th>
        <th scope="col">MÃ PHIM</th>
        <th scope="col">LOẠI SUẤT CHIẾU</th>
        <th scope="col">NGÀY CHIẾU</th>
        <th scope="col">CHẾ ĐỘ</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($lichchieus as $lichchieu)
        <tr>
            <td>{{$lichchieu->MaLichChieu}}</td>
            <td>{{$lichchieu->MaSuatChieu}}</td>
            <td>{{$lichchieu->MaPhim}}</td>
            <td>{{App\LichChieu::$_theLoaiSuatChieu[$lichchieu->theLoaiChieu]}}</td>
            <td>{{$lichchieu->ngayChieu}}</td>
            <td>{{App\LichChieu::$_cheDoChieu[$lichchieu->cheDoChieu]}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $lichchieus->links() !!}
</body>
</html>
