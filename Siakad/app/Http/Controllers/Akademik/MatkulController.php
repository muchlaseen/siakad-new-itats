<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Akademik\Matkul;
use App\Akademik\Jurusan;
use Log;

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
        // $matkul = Matkul::join('jurusans as js','js.id_jurusan','=','matkuls.id_jurusan')->selectRaw('matkuls.*,js.nama_jurusan')->get();
        $matkul = Matkul::paginate(5);

        // $matkul = DB::table('matkuls')
        // ->select('*','jurusans.nama_jurusan')
        // ->join('jurusans','matkuls.id_jurusan','jurusans.id_jurusan')
        // ->get();

        // Log::info('MATKUL  = '.\json_encode($matkul));


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
        $matkul->jurusan()->attach($request->id_jurusan);
        $matkul->save();


        return redirect()->back()->with('success','Data Tersimpan');
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
        $matkul = Matkul::where('kode_mk','=',$kode_mk)->first();

        $jurusan = Jurusan::all();

        return view('layoutAdmin.matkul.edit',[
            'title' => 'Edit' . $kode_mk,
            'matkul' => $matkul,
            'jurusans'=>$jurusan
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

        // $matkul = Matkul::where('kode_mk','=', $kode_mk)->first();
        $matkul = Matkul::find($kode_mk);


        $matkul->kode_mk = $request->kode_mk;
        $matkul->id_jurusan = $request->id_jurusan;
        $matkul->nama_mk = $request->nama_mk;
        $matkul->sks = $request->sks;
        $matkul->semester = $request->semester;
        // dd($matkul);
        // Log::info('MATKUL  = '.\json_encode($matkul));
        $matkul->save();
        // $matkul = Matkul::update('update matkuls set '.$matkul.'where kode_mk = '.$kode_mk.'');

        return redirect()->route('matkul.index')->with('success','Data Terupdate');
        // return response()->json($matkul->kode_mk);
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

        return redirect()->back()->with('warning','Data Terhapus');
        // return response()->json($matkul);
    }
}
