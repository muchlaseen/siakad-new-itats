<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User\Akun;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $akun = Akun::all();
        return view('layoutAdmin.akun.index', ['akuns' => $akun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
                'id_akun' => 'required|min:1',
                'identitas' => 'required|min:5',
                'password' => 'required',
                'categori' => 'required'
            ]);

            $akun =  new Akun();
            $akun->id_akun = $request->input('id_akun');
            $akun->identitas = $request->input('identitas');
            $akun->password = Hash::make($request->password);
            $akun->categori = $request->input('categori');
            $akun->save();

            return redirect()->route('akun.index');
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
    public function edit($id_akun)
    {
        $akun = Akun::find($id_akun);
        return view('layoutAdmin.akun.edit',
        [
            'title' => 'Edit ' . $id_akun,
            'akun' => $akun,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_akun)
    {
        $this->validate($request, [
            'id_akun' => 'required|min:1',
            'identitas' => 'required|min:5',
            'password' => 'required',
            'categori' => 'required'
        ]);

        $akun =  Akun::find($id_akun);
        $akun->id_akun = $request->id_akun;
        $akun->identitas = $request->identitas;
        $akun->password = $request->password;
        $akun->categori = $request->categori;
        $akun->save();

        return redirect()->route('akun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_akun)
    {
        $akun = Akun::find($id_akun);

        $akun->delete();

        return redirect()->back()->with('warning','Data Terhapus');
    }

    public function login(Request $request)
    {
        $akun = Akun::where('identitas',$request->identitas)->first();

        if(!empty($akun) && Hash::check($request->password,$akun->password)){
                if($akun->categori == "Mahasiswa"){
                    session(['login_berhasil' => true]);
                    return redirect()->route('mahasiswa.index');
                }
                return 'Dosen';
        }
        return redirect()->route('masuk');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('masuk');
    }
}
