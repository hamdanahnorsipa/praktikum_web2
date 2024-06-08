<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print - Mahasiswa</title>
</head>
<body>
    <style>
        table{
            width: 100%
            border-collapse: collapse !important;
        }
        tr,td{
            border: 1px solid black;
        }
        .text-cente{
            text-align: center;
        }
    </style>
    <div class="text-center">
        <h3>Laporan Data Mahasiswa</h3>
    </div>
    <table class="table"> 
            <thead> 
                <tr> 
                <td>No</td> 
                <td>Jurusan</td> 
                <td>NPM</td> 
                <td>Nama</td> 
                <td>Tanggal Lahir</td> 
                <td>Foto</td>  
                </tr> 
            </thead>
            <tbody>
                @foreach($mahasiswa as $data)
                <tr>
                <td>{{$loop->iteration}}</td> 
                <td>{{$data->jurusan}}</td> 
                <td>{{$data->npm}}</td> 
                <td>{{$data->nama}}</td> 
                <td>{{Carbon\carbon::parse($data->tanggal_lahir)->format('d-m-Y')}}</td> 
                <td>
                    <img src ="{{asset('storage/foto/'.$data->foto)}}" alt="" width="50">
                </td> 
            
            </tr>
            @endforeach
            </tbody>
    </table> 
    
</body>
</html>