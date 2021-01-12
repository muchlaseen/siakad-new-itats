<x-admin-master>

@section('content')
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <h1>Data Mata Kuliah</h1>
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
                        <input id="searchInput" type="text" class="search form-control" placeholder="Cari mata kuliah">
                    </div>
                </div>


            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mata Kuliah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('matkul.store')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="inputKode">Kode Mata Kuliah</label>
                                        <input name="kode_mk" type="number" class="form-control" id="inputKode" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Nama Jurusan</label>
                                        <select name="id_jurusan" class="form-control" id="exampleFormControlSelect1">
                                        @foreach ($jurusans as $jurusan)
                                            <option value={{$jurusan->id_jurusan}}>{{$jurusan->nama_jurusan}} </option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNamaMK">Nama Mata Kuliah</label>
                                        <input name="nama_mk" type="text" class="form-control" id="inputNamaMK" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">SKS</label>
                                        <select name="sks" class="form-control" id="exampleFormControlSelect1">
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                        <option value=4>4</option>
                                        <option value=5>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Semester</label>
                                        <select name="semester" class="form-control" id="exampleFormControlSelect1">
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                        <option value=4>4</option>
                                        <option value=5>5</option>
                                        <option value=6>6</option>
                                        <option value=7>7</option>
                                        <option value=8>8</option>
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
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Jurusan</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th colspan="2" style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableMhs">
                    @foreach ($matkuls as $matkul)
                    <tr>
                        <td>{{$matkul->kode_mk}} </td>
                        <td>
                        @foreach ($matkul->jurusan as $item)
                            {{$item->nama_jurusan}}
                            {{-- <ul>
                                <li>
                                {{$item->nama_jurusan}}
                                </li>
                            </ul> --}}
                        @endforeach
                        </td>
                        <td>{{$matkul->nama_mk}} </td>
                        <td>{{$matkul->sks}} </td>
                        <td>{{$matkul->semester}} </td>
                        <td><a href="{{route('matkul.edit',$matkul->kode_mk)}} " class="btn-warning btn-sm">Edit</td>
                        <td><a href="{{route('matkul.delete',$matkul->kode_mk)}} " class="btn-danger btn-sm" onclick="return confirm('Data akan dihapus, lanjutkan?')">Delete</a></td>
                    </tr>

                    @endforeach

                </tbody>

            </table>
            {{$matkuls->links()}}
        </div>
    </div>
@endsection

</x-admin-master>
