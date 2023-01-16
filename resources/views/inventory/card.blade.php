<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    {{-- css bootstrap --}}
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
</head>
<body>
    <main class="container mt-5">
        <div class="row">            
            <div class="col border p-2 d-flex">
                {!! QrCode::size(150)->generate($url); !!}
                <div class="ms-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Kode Inventaris</td>
                                <td class="fw-bold">{{ $data->kode }}</td>
                            </tr>
                            <tr>
                                <td>Nama Inventaris</td>
                                <td class="fw-bold">{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengadaan</td>
                                <td class="fw-bold">{{ $data->tanggal }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
                
            </div>
        </div>
        

    </main>
    <script>
        window.onload=function(){
            window.print()
        }
    </script>
</body>
</html>