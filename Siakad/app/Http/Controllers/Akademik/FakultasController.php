<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Akademik\Fakultas;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::paginate(5);

        return view('layoutAdmin.fakultas.index ',[
            'title' => 'List Fakultas',
            'fakultass' => $fakultas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layoutAdmin.fakultas.create');
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
            'id_fakultas' => 'required|min:1',
            'nama_fakultas' => 'required|min:6'
        ]);

        $fakul = new Fakultas();

        $fakul->id_fakultas = $request->id_fakultas;
        $fakul->nama_fakultas = $request->nama_fakultas;

        $fakul->save();

        return redirect()->route('fakultas.index')->with('success','Data Tersimpan');

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
    public function edit($id_fakultas)
    {
        $fakultas = Fakultas::find($id_fakultas);
        return view('layoutAdmin.fakultas.edit')->with('fakultas', $fakultas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_fakultas)
    {
        $request->validate([
            'id_fakultas' => 'required',
            'nama_fakultas' => 'required'
        ]);

        $fakultas = Fakultas::find($id_fakultas);
        $fakultas->id_fakultas = $request->id_fakultas;
        $fakultas->nama_fakultas = $request->nama_fakultas;

        $fakultas->save();

        return redirect()->route('fakultas.index')->with('succes','Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_fakultas)
    {
        $fakultas = Fakultas::find($id_fakultas);

        $fakultas->delete();
        return redirect()->back()->with('warning','Data Terhapus');

    }
}
