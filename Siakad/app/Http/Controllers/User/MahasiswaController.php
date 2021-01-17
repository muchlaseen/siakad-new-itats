<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User\Mahasiswa;
use App\Akademik\Jurusan;   

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(5);
        $jurusans = Jurusan::all();
        return view('layoutAdmin.mahasiswa.index',compact('jurusans'), ['mahasiswas' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
        // \App\User\Mahasiswa::create($request->all());
        // return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'npm' => 'required|min:12',
            'id_jurusan' => 'required|min:1',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->npm = $request->input('npm');
        $mahasiswa->id_jurusan = $request->input('id_jurusan');
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->no_telp = $request->input('no_telp');
        $mahasiswa->tempat_lahir = $request->input('tempat_lahir');
        $mahasiswa->tgl_lahir = $request->input('tgl_lahir');
        $mahasiswa->agama = $request->input('agama');
        $mahasiswa->jurusan()->attach($request->id_jurusan);
        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data mahasiswa tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($npm)
    {
        $jurusans = Jurusan::all();
        $mahasiswa = Mahasiswa::find($npm);
        return view('layoutAdmin.mahasiswa.edit',compact('jurusans'), ['mahasiswas' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $npm)
    {
        $mahasiswa = Mahasiswa::find($npm);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($npm)
    {
        $mahasiswa = Mahasiswa::find($npm);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
