<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Akademik\Matkul;
use App\Akademik\Jurusan;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();

        $matkul = Matkul::paginate(5);
        return view('layoutAdmin.matkul.index',[
            'matkuls' => $matkul,
            'jurusans' => $jurusan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
        $matkul = new Matkul;
        $matkul->kode_mk = $request->kode_mk;
        $matkul->id_jurusan = $request->id_jurusan;
        $matkul->nama_mk = $request->nama_mk;
        $matkul->sks = $request->sks;
        $matkul->semester = $request->semester;

        $matkul->save();

        return redirect()->route()->with('success','Data Tersimpan');
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
    public function edit($kode_mk)
    {
        $matkul = Matkul::find($kode_mk);

        return view('',[
            'title' => 'Edit' . $kode_mk,
            'matkul' => $matkul
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_mk)
    {
        $request->validate([

        ]);

        $matkul = Matkul::find($kode_mk);
        $matkul->kode_mk = $request->kode_mk;
        $matkul->id_jurusan = $request->id_jurusan;
        $matkul->nama_mk = $request->nama_mk;
        $matkul->sks = $request->sks;
        $matkul->semester = $request->semester;

        $matkul->save();
        
        return redirect('')->route()->with();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_mk)
    {
        $matkul = Matkul::find($kode_mk);

        $matkul->delete();

        return redirect('')->route()->with();
    }
}
