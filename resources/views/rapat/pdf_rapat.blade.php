<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <table style="border: 0px">
        <tr>
            <H2>{{ $data->deskripsi }}</H2>
        </tr>
        <hr>
        <tr>
            <td><h3>{{ \carbon\carbon::parse($data->tanggal)->translatedFormat('d F Y') }}</h3></td>
        </tr>
        <tr>
            <td>{{ $data->pimpinan }}</td>
        </tr>
    </table>
    <br>
    <hr>
    <br>
    <div>
        {!! $data->kesimpulan !!}
    </div>
    <br>
    <hr>
    <br>
    <div>
        <p>notulen_by:</p>
    </div>
</body>
</html>