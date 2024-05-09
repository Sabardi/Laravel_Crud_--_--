<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="pt-3">
                <h1 class="h2">Biodata {{$mahasiswa->nama}}</h1>
            </div>
            <hr>

            <ul>
                <li>NIM: {{$mahasiswa->nim}} </li>
                <li>Nama: {{$mahasiswa->nama}} </li>
                <li>Jenis Kelamin:
                {{$mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}
                </li>
                <li>Jurusan: {{$mahasiswa->jurusan}} </li>
                <li>Alamat:
                {{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}
                </li>
            </ul>

        </div>
    </div>
</div>
