<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link ref="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <title>Quan ly phong chieu phim</title>
</head>
<body>
<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col">MÃ VÉ</th>
        <th scope="col">MÃ LỊCH CHIẾU</th>
        <th scope="col">SỐ GHẾ</th>
        <th scope="col">GIÁ</th>

    </tr>
    </thead>

    <tbody>
    @foreach ($ves as $ve)
        <tr>
            <td>{{$ve->MaVe}}</td>
            <td>{{$ve->MaLichChieu}}</td>
            <td>{{$ve->SoGhe}}</td>
            <td>{{$ve->gia}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $ves->links() !!}
</body>
</html>
