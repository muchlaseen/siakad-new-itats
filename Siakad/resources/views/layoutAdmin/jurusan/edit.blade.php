<x-admin-master>
    @section('content')
    <h1> Edit Jurusan</h1>
    <form action="{{route('jurusan.update', $jurusan)}}" enctype="multipart/form-data"  method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Id Jurusan</label>
            <input type="text"
                   name="id_jurusan"
                   class="form-control"
                   id="id_jurusan"
                   aria-describedby=""
                   value="{{$jurusan->id_jurusan}}">
        </div>
        <div class="form-group">
            <label for="title">Id Fakultas</label>
            <input type="text"
                   name="id_fakultas"
                   class="form-control"
                   id="id_fakultas"
                   aria-describedby=""
                   value="{{$jurusan->id_fakultas}}">
        </div>
        <div class="form-group">
            <label for="title">Kode Jurusan</label>
            <input type="text"
                   name="kode_jurusan"
                   class="form-control"
                   id="kode_jurusan"
                   aria-describedby=""
                   value="{{$jurusan->kode_jurusan}}">
        </div>
        <div class="form-group">
            <label for="title">Nama Jurusan</label>
            <input type="text"
                   name="nama_jurusan"
                   class="form-control"
                   id="nama_jurusan"
                   aria-describedby=""
                   value="{{$jurusan->nama_jurusan}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection
</x-admin-master>
