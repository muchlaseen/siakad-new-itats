<x-admin-master>
    @section('content')
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <h1>Data Dosen</h1>
                <br>
            </div>
                <div class="col-6">
                    
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                    </button>
                    
                </div>
                <div class="col-6">
                    <div class="form-group pull-left">
                        <input id="searchInput" type="text" class="search form-control" placeholder="Cari Dosen">
                    </div>
                </div>
            
                
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('dosen.store')}} " method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="inputNIM">NIM</label>
                                        <input name="nim" type="text" class="form-control" id="inputNIM" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">Nama Lengkap</label>
                                        <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAlamat">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="inputAlamat" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select name="kelamin" class="form-control" id="exampleFormControlSelect1">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTelp">Nomor Telepon</label>
                                        <input name="no_telp" type="text" class="form-control" id="inputTelp" aria-describedby="emailHelp">
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



        <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th colspan="2" style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody id="data-table">
            @foreach ($dosens as $dosen)
            <tr>
                <td>{{(($dosen->nim))}} </td>
                <td>{{$dosen->nama}} </td>
                <td>{{$dosen->alamat}} </td>
                <td>{{$dosen->jenis_kelamin}} </td>
                <td>{{$dosen->email}} </td>
                <td>{{$dosen->no_telp}} </td>
                <td><a href="{{route('dosen.edit', $dosen->nim)}}" class="btn-warning btn-sm">Edit</td>
                <td><a href="{{route('dosen.delete', $dosen)}}" class="btn-danger btn-sm" onclick="return confirm('Data akan dihapus, lanjutkan?')">Delete</a></td>

            </tr>  
        @endforeach
        </tbody>

        </table>
    @endsection
        @section('scripts')
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        @endsection
</x-admin-master>
