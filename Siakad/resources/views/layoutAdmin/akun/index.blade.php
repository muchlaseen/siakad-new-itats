<x-admin-master>
    @section('content')
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <h1>Data Akun Pengguna</h1>
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
                            <input id="searchInput" type="text" class="search form-control" placeholder="Cari Akun">
                        </div>
                    </div>
                
                    
                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('akun.store')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="inputIdAkun">Id Akun</label>
                                            <input name="id_akun" type="number" class="form-control" id="inputIdAkun" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputIdentitas">Identitas NPM/NIP</label>
                                            <input name="identitas" type="text" class="form-control" id="inputIdentitas" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <textarea name="password" class="form-control" id="inputPassword" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Kategori</label>
                                            <select name="categori" class="form-control" id="exampleFormControlSelect1">
                                            <option value="Dosen">Dosen</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                            </select>
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
                    <th>ID Akun</th>
                    <th>Identitas</th>
                    <th>Password</th>
                    <th>Categori</th>
                    <th colspan="2" style="text-align: center">Aksi</th>
                </tr>
            </thead>
            <tbody id="tableMhs">
                @foreach ($akuns as $akun)
                <tr>
                    <td>{{$akun->id_akun}}</td>
                    <td>{{$akun->identitas}}</td>
                    <td>{{$akun->password}}</td>
                    <td>{{$akun->categori}}</td>
                    <td><a href="{{route('akun.edit', $akun)}}" class="btn-warning btn-sm">Edit</td>
                    <td><a href="{{route('akun.delete', $akun)}}" class="btn-danger btn-sm" onclick="return confirm('Data akan dihapus, lanjutkan?')">Delete</a></td>
    
                </tr>  
            @endforeach
            </tbody>
            
        </table>
    </div>
</div>
    @endsection
        @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        @endsection
</x-admin-master>