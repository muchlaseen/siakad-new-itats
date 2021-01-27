<x-admin-master>

@section('content')
    <h1>Edit Data Mahasiswa</h1>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <form action="/admin/mahasiswa/{{$mahasiswas->npm}}/update" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputNPM">NPM</label>
                <input name="npm" type="number" class="form-control" id="inputNPM" aria-describedby="emailHelp" value="{{$mahasiswas->npm}}">
              </div>
              <div class="form-group">
                  <label for="inputJurusan">ID Jurusan</label>
                  <select class="form-control select" style="width: 100%;" name="id_jurusan" id="inputJurusan">
                      <option value="{{$mahasiswas->jurusan->id_jurusan}}" class="fas fa-check">{{$mahasiswas->jurusan->nama_jurusan}}</option>
                      @foreach ($jurusans as $jurusan)
                      <option value="{{$jurusan->id_jurusan}}">{{$jurusan->nama_jurusan}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="inputNama">Nama</label>
                  <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->nama}}" >
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswas->alamat}}</textarea>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L" @if($mahasiswas->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                    <option value="P" @if($mahasiswas->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="inputNama">Email</label>
                  <input name="email" type="email" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->email}}">
              </div>
              <div class="form-group">
                  <label for="inputNama">No Telfon</label>
                  <input name="no_telp" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->no_telp}}">
              </div>
              <div class="form-group">
                  <label for="inputNama">Tempat Lahir</label>
                  <input name="tempat_lahir" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->tempat_lahir}}">
              </div>
              <div class="form-group">
                  <label for="inputNama">Tanggal Lahir</label>
                  <input name="tgl_lahir" type="date" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->tgl_lahir}}">
              </div>
              <div class="form-group">
                  <label for="inputNama">Agama</label>
                  <input name="agama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->agama}}">
              </div>
            
          </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
          </form>
@endsection        
</x-admin-master>