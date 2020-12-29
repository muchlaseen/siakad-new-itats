<x-admin-master>
    @section('content')
        <h1> Edit Dosen</h1>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
            <form action="{{route('akun.update', $akun)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="inputIdAkun">NIM</label>
                  <input name="id_akun" type="text" class="form-control" id="inputIdAkun" aria-describedby="emailHelp" value="{{old('id_akun') ?? $akun->id_akun}}">
                </div>
                <div class="form-group">
                    <label for="inputIdentitas">identitas</label>
                    <input name="identitas" type="text" class="form-control" id="inputIdentitas" aria-describedby="emailHelp" value="{{old('identitas') ?? $akun->identitas}}">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input name="password" type="text" class="form-control" id="inputPassword" aria-describedby="emailHelp" value="{{old('password') ?? $akun->password}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select name="categori" class="form-control" id="exampleFormControlSelect1">
                      <option value="Mahasiswa" @if($akun->categori == 'Mahasiswa') selected @endif>Mahasiswa</option>
                      <option value="Dosen" @if($akun->categori == 'Dosen') selected @endif>Dosen</option>
                    </select>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
        </div>
    @endsection
</x-admin-master>
