<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Akademik\Jurusan;
use App\Akademik\Fakultas;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::paginate(5);

        return view('',[
            'title' => 'List Jurusan',
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
        $fakultas = Fakultas::select(['id_fakultas','nama_fakultas'], [2])->get();

        // $fakultas = Fakultas::selectRaw('id_fakultas')->groupBy('id_fakultas')->get();
        // cara  mendapatkan id_fakultas dari tabel fakultass

        // $fakultas = Fakultas::orderBy('id_fakultas')->get();

        // dd($fakultas);

        return view('layoutAdmin.jurusan.index',[
            'fakultass' => $fakultas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $fakultas = Fakultas::class;

        $request->validate([
            'id_fakultas' => 'required|min:1',
            'kode_jurusan' => 'required|min:1',
            'nama_jurusan' => 'required|min:6'
        ]);

        $jurusan = Jurusan::class;
        $jurusan->id_jurusan = $request->id_jurusan;
        $jurusan->id_fakultas = $request->id_fakultas;
        $jurusan->kode_jurusan = $request->kode_jurusan;

        $jurusan->save();

        return redirect()->route()->with();
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
    public function edit($id_jurusan)
    {
        $jurusan = Jurusan::find($id_jurusan);

        return view('',[
            'title' => 'Edit Jurusan'. $id_jurusan,
            'jurusan' => $jurusan
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jurusan)
    {
        $jurusan = Jurusan::find($id_jurusan);

        $request->validate([
            'id_fakultas' => 'required|min:1',
            'kode_jurusan' => 'required|min:1',
            'nama_jurusan' => 'required|min:6'
        ]);

        $jurusan->id_jurusan = $request->id_jurusan;
        $jurusan->id_fakultas = $request->id_fakultas;
        $jurusan->kode_jurusan = $request->kode_jurusan;

        $jurusan->save();

        return redirect()->route()->with('success','Data Telah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jurusan)
    {
        Jurusan::delete('id_jurusan', [$id_jurusan]);
    }
}
