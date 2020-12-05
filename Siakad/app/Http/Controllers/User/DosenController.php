<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::paginate(5);
        // $dosen = Dosen::all();
        #irul
//        return view('autentikasi.dosen.index',[
//            'title' => 'List Dosen',
//            'dosens' => $dosen,
//        ]);
        #ilham
            return view('layoutAdmin.dosen.index',
            #irul
            [
                'title' => 'List Dosen',
                'dosens' => $dosen,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #ilham
        return view('layoutAdmin.dosen.create');
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
            'nim' => 'required|min:6',
            'telp' => 'required|min:11',
        ]);

        $dosen =  new Dosen;
        $dosen->nim = $request->nim;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->jenis_Kelamin = $request->jenisKelamin;
        $dosen->email = $request->email;
        $dosen->no_telp = $request->telp;

        $dosen->save();
        dd($dosen);

        return redirect()->route('indexDosen')->with('success','Data Tersimpan');
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
    public function edit($nim)
    {
        #irul
//        $dosen = Dosen::find($nim);
//
//        return view('autentikasi/dosen/edit',[
//            'title' => 'Edit ' . $nim,
//            'dosen' => $dosen,
//        ]);
        #ilham
        return view('layoutAdmin.dosen.edit',
        #irul
        [
            'title' => 'Edit ' . $nim,
            'dosen' => $dosen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $dosen = Dosen::find($nim);

        $request->validate([
            'nim' => 'required|min:6',
            'telp' => 'required|min:11',
        ]);

        $dosen =  new Dosen;
        $dosen->nim = $request->nim;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->jenis_Kelamin = $request->jenisKelamin;
        $dosen->email = $request->email;
        $dosen->no_telp = $request->telp;

        $dosen->save();

        return redirect()->route('indexDosen')->with('success','Data Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        $dosen = Dosen::find($nim);

        $dosen->delete();

        return redirect()->back()->with('warning','Data Terhapus');
    }
}
