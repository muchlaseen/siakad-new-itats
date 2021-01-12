<x-admin-master>
    @section('content')
        <h1>{{$title}} </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Jurusan</h6>
            </div>
            <div class="card-body">
                <form method="get" action="{{route('jurusan.create')}}">
                        <button class="btn btn-success btn-lg float-right" type="submit">
                            Create
                        </button>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id Jurusan</th>
                            <th>Id Fakultas</th>
                            <th>Nama Fakultas</th>
                            <th>Kode Jurusan</th>
                            <th>Nama Jurusan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id Jurusan</th>
                            <th>Id Fakultas</th>
                            <th>Nama Fakultas</th>
                            <th>Kode Jurusan</th>
                            <th>Nama Jurusan</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($jurusans as $jurusan)
                                <tr>
                                    <td>{{$jurusan->id_jurusan}} </td>
                                    <td>{{$jurusan->id_fakultas}} </td>
                                    <td>{{$jurusan->fakultas->nama_fakultas}}</td>
                                    <th>{{$jurusan->kode_jurusan}}</th>
                                    <td>{{$jurusan->nama_jurusan}} </a></td>
                                    <td>
                                        <a href="{{route('jurusan.edit',$jurusan->id_jurusan)}} " class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('jurusan.delete', $jurusan->id_jurusan)}}" class="btn btn-danger" onclick="return confirm('Data akan dihapus, lanjutkan?')"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
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
