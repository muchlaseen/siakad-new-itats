<x-admin-master>
    @section('content')
        <h1>{{$title}} </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Fakultas</h6>
            </div>
            <div class="card-body">
                <form method="post" action="#">
                        <button class="btn btn-success btn-lg float-right" type="submit">
                            Create
                        </button>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id Fakultas</th>
                            <th>Nama Fakultas</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id Fakultas</th>
                            <th>Nama Fakultas</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($fakultass as $fakultas)
                                <tr>
                                    <td>{{sprintf("%06d", $fakultas->id_fakultas)}} </td>
                                    <td><a href="{{route('fakultas.edit', $fakultas->id_fakultas)}} ">{{$fakultas->nama_fakultas}} </a></td>
                                    <td>
                                        <a href="{{route('fakultas.delete', $fakultas->id_fakultas)}}" class="btn-danger btn-sm" onclick="return confirm('Data akan dihapus, lanjutkan?')">Delete</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
