<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return view('',[
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
        //
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

        $fakul = new Fakultas;
        
        $fakul->id_fakultas = $request->id;
        $fakul->nama_fakultas = $request->name;

        $fakul->save();

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
    public function edit($id_fakultas)
    {
        return view();
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
        $fakul = Fakultas::find($id_fakultas);

        $fakul->id_fakultas = $request->id;
        $fakul->nama_fakultas = $request->name;

        $fakul->save();

        return redirect()->route()->with('succes','Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_fakultas)
    {
        $fakul = Fakultas::find($id_fakultas);

        $fakul->delete();
        return redirect()->back()->with();
    }
}
