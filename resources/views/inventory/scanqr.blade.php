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
            <div class="card">
                <div class="card-header"><h2>{{ $data->nama }}</h2></div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col">
                          <div class="">
                             <Table>
                                <tr>
                                   <Td class="pe-2">Ruang</Td>
                                   <Td class="pe-2">:</Td>
                                   <Td class="pe-2"><small>{{ $data->Ruang->nama }}</small></Td>
                                </tr>
                                <tr>
                                    <Td class="pe-2">Tanggal Pengadaan</Td>
                                    <Td class="pe-2">:</Td>
                                    <Td class="pe-2">{{ $data->tanggal_pengadaan }}</Td>
                                 </tr>
                               
                                <tr>
                                   <Td class="pe-2">Kategori</Td>
                                   <Td class="pe-2">:</Td>
                                   <Td class="pe-2">{{ $data->InventoryCategory->nama }}</Td>
                                </tr>
                                <tr>
                                   <Td class="pe-2">Merek</Td>
                                   <Td class="pe-2">:</Td>
                                   <Td class="pe-2">{{ $data->merek }}</Td>
                                </tr>
                                <tr>
                                   <Td class="pe-2">Nomor Seri</Td>
                                   <Td class="pe-2">:</Td>
                                   <Td class="pe-2">{{ $data->no_seri }}</Td>
                                </tr>
                             </Table>
                          </div>
                        </div>
                        <div class="col text-center">
                        
                       </div>
                       <div class="col">
                          <table>
                             <tr>
                                <Td class="pe-2">Kondisi</Td>
                                <Td class="pe-2">:</Td>
                                <Td class="pe-2">{{ $data->kondisi }}</Td>
                             </tr>
                            
                             <tr>
                                <Td class="pe-2">Sumber dana</Td>
                                <Td class="pe-2">:</Td>
                                <Td class="pe-2">{{ $data->Danainventory->nama }}</Td>
                             </tr>
                             <tr>
                                <Td class="pe-2">Sumber Perolehan</Td>
                                <Td class="pe-2">:</Td>
                                <Td class="pe-2">{{ $data->sumber_perolehan }}</Td>
                             </tr>
                             <tr>
                                <Td class="pe-2">harga Perolehan</Td>
                                <Td class="pe-2">:</Td>
                                <Td class="pe-2">{{ $data->harga_perolehan }}</Td>
                             </tr>
                             <tr>
                                <Td class="pe-2">Jumlah</Td>
                                <Td class="pe-2">:</Td>
                                <Td class="pe-2">{{ $data->jumlah }} {{ $data->satuan }}</Td>
                             </tr>
                             
                          </table>
                       </div>
                    </div>
                </div>
                
            </div>
        </div>


    </main>

</body>

</html>