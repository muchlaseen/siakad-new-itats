<x-admin-master>
    @section('content')
        <h1>Data Dosen</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Dosen</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Hapus</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($dosens as $dosen)
                                <tr>
                                    {{-- {{dd($dosen)}} --}}
                                    {{-- <td>{{sprintf("%06d", $dosen->nim)}} </td> --}}
                                    <td>{{(($dosen->nim))}} </td>
                                    <td><a href="{{route('dosen.edit', $dosen)}} ">{{$dosen->nama}} </a></td>
                                    <td>{{$dosen->alamat}} </td>
                                    <td>{{$dosen->jenis_kelamin}} </td>
                                    <td>{{$dosen->email}} </td>
                                    <td>{{$dosen->no_telp}} </td>
                                    <td>
                                        <a href="{{route('dosen.delete', $dosen)}}" class="btn-danger btn-sm" onclick="return confirm('Data akan dihapus, lanjutkan?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            <p>{{$dosens->nim}}</p>
                            {{-- <tr>
                                <td>07010</td>
                                <td><a href="/edit/dosen">Kharisma Ilham Nusantara</a></td>
                                <td>Taman, Sidoarjo</td>
                                <td>Laki - Laki</td>
                                <td>ilhamnusantara@gmail.com</td>
                                <td>081331517861</td>
                                <td>
                                    <form method="post" action="#" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>097XXX</td>
                                <td>Ahcmad Muchlasin</td>
                                <td>Sedati, Sidoarjo</td>
                                <td>Laki - Laki</td>
                                <td>achmad@gmail.com</td>
                                <td>08133xxxxxx</td>
                                <td>
                                    <form method="post" action="#" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>0352XX</td>
                                <td>Khoirul Huda</td>
                                <td>Pasar Manuk, Surabaya</td>
                                <td>Laki - Laki</td>
                                <td>khodaid@gmail.com</td>
                                <td>081567xxx</td>
                                <td>
                                    <form method="post" action="#" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
        @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        @endsection
</x-admin-master>
