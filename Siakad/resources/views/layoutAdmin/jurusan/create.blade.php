<x-admin-master>
    @section('content')
    <h1> Create Jurusan</h1>
    <form action="{{route('jurusan.store')}}" enctype="multipart/form-data"  method="post">
        @csrf
        <div class="form-group">
            <label for="title">Id Jurusan</label>
            <input type="text"
                   name="id_jurusan"
                   class="form-control"
                   id="id_jurusan"
                   aria-describedby=""
                   placeholder="Masukan id_jurusan">
        </div>
        <div class="form-group">
            <label for="title">Nama Fakultas</label>
                <select class="form-control select2" style="width: 100%;" name="id_fakultas" id="id_fakultas">
                    <option disable value>Pilih Fakultas</option>
                    @foreach ($fakultass as $fakultas)
                    <option value="{{$fakultas->id_fakultas}}">{{$fakultas->nama_fakultas}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="title">Kode Jurusan</label>
            <input type="text"
                   name="kode_jurusan"
                   class="form-control"
                   id="kode_jurusan"
                   aria-describedby=""
                   placeholder="Masukan Kode Jurusan">
        </div>
        <div class="form-group">
            <label for="title">Nama Jurusan</label>
            <input type="text"
                   name="nama_jurusan"
                   class="form-control"
                   id="nama_jurusan"
                   aria-describedby=""
                   placeholder="Masukan Nama Jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection
</x-admin-master>
