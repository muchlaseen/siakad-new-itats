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
            <form action="{{route('dosen.update', $dosen)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="inputNPM">NIM</label>
                  <input name="nim" type="text" class="form-control" id="inputNIM" aria-describedby="emailHelp" value="{{old('nim') ?? $dosen->nim}}">
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{old('nama') ?? $dosen->nama}}">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="inputAlamat" aria-describedby="emailHelp" value="{{old('alamat') ?? $dosen->alamat}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="kelamin" class="form-control" id="exampleFormControlSelect1">
                      <option value="L" @if($dosen->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                      <option value="P" @if($dosen->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input name="email" type="email" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$dosen->email}}">
                </div>
                <div class="form-group">
                    <label for="inputTelp">No Telfon</label>
                    <input name="no_telp" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$dosen->no_telp}}">
                </div>
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
        </div>
    @endsection
</x-admin-master>
