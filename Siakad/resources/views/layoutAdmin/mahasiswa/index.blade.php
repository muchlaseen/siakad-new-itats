@extends('components.master')

@section('content')
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Data Mahasiswa</h1>
            </div>
            <div class="col-6">
                
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
            </button>
                  
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/mahasiswa/create" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                  <label for="inputNPM">NPM</label>
                                  <input name="npm" type="number" class="form-control" id="inputNPM" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="inputJurusan">ID Jurusan</label>
                                    <input name="id_jurusan" type="text" class="form-control" id="inputJurusan" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                      <option value="L">Laki-laki</option>
                                      <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Email</label>
                                    <input name="email" type="email" class="form-control" id="inputNama" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">No Telfon</label>
                                    <input name="no_telp" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Tanggal Lahir</label>
                                    <input name="tgl_lahir" type="date" class="form-control" id="inputNama" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Agama</label>
                                    <input name="agama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp">
                                </div>
                              
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    
                        </div>
                    </div>
                </div>
            </div>
            
            <table class="table table-hover">
                <tr>
                    <th>NPM</th>
                    <th>ID Jurusan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{$mahasiswa->npm}}</td>
                    <td>{{$mahasiswa->id_jurusan}}</td>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->alamat}}</td>
                    <td>{{$mahasiswa->jenis_kelamin}}</td>
                    <td>{{$mahasiswa->email}}</td>
                    <td>{{$mahasiswa->no_telp}}</td>
                    <td>{{$mahasiswa->tempat_lahir}}</td>
                    <td>{{$mahasiswa->tgl_lahir}}</td>
                    <td>{{$mahasiswa->agama}}</td>
                <td><a href="/mahasiswa/{{$mahasiswa->npm}}/edit" class="btn-warning btn-sm">Edit</td>
                <td><a href="/mahasiswa/{{$mahasiswa->npm}}/delete" class="btn-danger btn-sm">Delete</a></td>
    
                </tr>  
                @endforeach
            </table>
        </div>
    </div>
@endsection