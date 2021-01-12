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

        return view('layoutAdmin.jurusan.index',[
            'title' => 'List Jurusan',
            'jurusans' => $jurusan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $fakultas = Fakultas::select(['id_fakultas','nama_fakultas'], [2])->get();
        $fakultass = Fakultas::all();

        return view('layoutAdmin.jurusan.create',compact('fakultass'));
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
            'id_jurusan' => 'required|min:1',
            'id_fakultas' => 'required|min:1',
            'kode_jurusan' => 'required|min:1',
            'nama_jurusan' => 'required|min:6'
        ]);

        $jurusan = new Jurusan();
        $jurusan->id_jurusan = $request->id_jurusan;
        $jurusan->id_fakultas = $request->id_fakultas;
        $jurusan->kode_jurusan = $request->kode_jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;

        $jurusan->save();

        return redirect()->route('jurusan.index')->with('success','Data Tersimpan');
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
        $fakultass = Fakultas::all();
        $jurusan = Jurusan::with('fakultas')->find($id_jurusan);
        return view('layoutAdmin.jurusan.edit',compact('fakultass'))->with('jurusan', $jurusan);

        // return view('layoutAdmin.jurusan.edit',[
        //     'title' => 'Edit Jurusan'. $id_jurusan,
        //     'jurusan' => $jurusan
        // ]);

        // $fakultas = Fakultas::find($id_fakultas);
        // return view('layoutAdmin.fakultas.edit')->with('fakultas', $fakultas);

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

        $request->validate([
            'id_jurusan' => 'required|min:1',
            'id_fakultas' => 'required|min:1',
            'kode_jurusan' => 'required|min:1',
            'nama_jurusan' => 'required|min:6'
        ]);

        $jurusan = Jurusan::find($id_jurusan);
        $jurusan->id_jurusan = $request->id_jurusan;
        $jurusan->id_fakultas = $request->id_fakultas;
        $jurusan->kode_jurusan = $request->kode_jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;

        $jurusan->save();

        return redirect()->route('jurusan.index')->with('success','Data Telah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jurusan)
    {
        $jurusan = Jurusan::find($id_jurusan);

        $jurusan->delete();
        return redirect()->back()->with('warning','Data Terhapus');
    }
}
