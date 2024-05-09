<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nama' =>'required',
            'nim' =>'required|size:8|unique:mahasiswas',
            'jenis_kelamin' =>'required',
            'jurusan' =>'required',
            'alamat' =>'required'
        ]);
        // atau bisa menggunakan yg lebih singkat
        Mahasiswa::create($validate);
        // return redirect()->route('mahasiswas.index');

        $request->session()->flash('pesan',"Penambahan data
            {$validate['nama']} berhasil");
            return redirect()->route('mahasiswas.index');





    //         ->with('success','Data berhasil di tambah' );

        // $mahasiswa = new Mahasiswa();
        // $mahasiswa->nim = $validate['nim'];
        // $mahasiswa->nama = $validate['nama'];
        // $mahasiswa->jenis_kelamin = $validate['jenis_kelamin'];
        // $mahasiswa->jurusan = $validate['jurusan'];
        // $mahasiswa->alamat = $validate['alamat'];
        // $mahasiswa->save();

        // return "Data berhasil diinput ke database"
    }

    public function show(Mahasiswa $mahasiswa){
        // $mahasiswa = Mahasiswa::find('mahasiswa');
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa){
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
     {
     $validate = $request->validate([
        'nim' => 'required|size:8|unique:mahasiswas',
        'nama' => 'required|min:3|max:50',
        'jenis_kelamin' => 'required|in:P,L',
        'jurusan' => 'required',
        'alamat' => '',
     ]);

    // $mahasiswa->update($request->all());
    $mahasiswa->update($request->all());
     return redirect()->route('mahasiswas.show')
     ->with('pesan',"Update data {$validate['nama']} berhasil");
     }
}
