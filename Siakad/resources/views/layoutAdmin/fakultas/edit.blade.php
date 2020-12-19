<x-admin-master>
    @section('content')
        <h1> Create Fakultas</h1>
        <form action="{{route('fakultas.update', $fakultas)}}" enctype="multipart/form-data"  method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Id Fakultas</label>
                <input type="text"
                       name="id_fakultas"
                       class="form-control"
                       id="id_fakultas"
                       aria-describedby=""
                       value="{{$fakultas->id_fakultas}}">
            </div>
            <div class="form-group">
                <label for="title">Nama Fakultas</label>
                <input type="text"
                       name="nama_fakultas"
                       class="form-control"
                       id="nama_fakultas"
                       aria-describedby=""
                       value="{{$fakultas->nama_fakultas}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endsection
</x-admin-master>
