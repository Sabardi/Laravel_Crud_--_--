
!<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="py-4">
                <h2>Tabel Mahasiswa</h2>
            </div>
            <div class="py-4 d-flex justify-content-between align-items-center">
                <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">
                Tambah Mahasiswa
                </a>
            </div>
            @if(session()->has('pesan'))
             <div class="alert alert-success">
             {{ session()->get('pesan')}}
             </div>
            @endif
            
            <table class="table table-striped">
                <thead>
                    <tr>

                    <th>#</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>detail</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ( $mahasiswa as $mahasiswa )
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td><a href="{{ route('mahasiswas.show', $mahasiswa->id ) }}">{{$mahasiswa->nim}}</a></td>
                        <td>{{$mahasiswa->nama}}</td>
                        <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                        <td>{{$mahasiswa->jurusan}}</td>
                        <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
 </div>

</body>
</html>
