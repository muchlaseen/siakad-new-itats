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
        // dd($dosen);
        // $dosen = Dosen::all();
        #irul
//        return view('autentikasi.dosen.index',[
//            'title' => 'List Dosen',
//            'dosens' => $dosen,
//        ]);
        #ilham
            return view('layoutAdmin.dosen.index',
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
        $this->validate($request, [
            'nim' => 'required|min:6',
            'nama' => 'required',
            'alamat' => 'required',
            'kelamin' => 'required',
            'email' => 'required',
            'no_telp' => 'required|min:11'
        ]);

        $dosen =  new Dosen();
        $dosen->nim = $request->input('nim');
        $dosen->nama = $request->input('nama');
        $dosen->alamat = $request->input('alamat');
        $dosen->jenis_kelamin = $request->input('kelamin');
        $dosen->email = $request->input('email');
        $dosen->no_telp = $request->input('no_telp');
        $dosen->save();

        return redirect()->route('dosen.index');

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
       $dosen = Dosen::find($nim);
        return view('layoutAdmin.dosen.edit',
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

        $request->validate([
            'nim' => 'required|min:6',
            'nama' => 'required',
            'alamat' => 'required',
            'kelamin' => 'required',
            'email' => 'required',
            'no_telp' => 'required|min:11'
        ]);

        $dosen = Dosen::find($nim);
        $dosen->nim = $request->nim;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->jenis_kelamin = $request->kelamin;
        $dosen->email = $request->email;
        $dosen->no_telp = $request->no_telp;

        $dosen->save();

        return redirect()->route('dosen.index')->with('success','Data Tersimpan');
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
