<x-admin-master>
    @section('content')
    <h1> Create Fakultas</h1>
    <form action="{{route('fakultas.store')}}" enctype="multipart/form-data"  method="post">
        @csrf
        <div class="form-group">
            <label for="title">Id Fakultas</label>
            <input type="text"
                   name="id_fakultas"
                   class="form-control"
                   id="id_fakultas"
                   aria-describedby=""
                   placeholder="Masukan id_fakultas">
        </div>
        <div class="form-group">
            <label for="title">Nama Fakultas</label>
            <input type="text"
                   name="nama_fakultas"
                   class="form-control"
                   id="nama_fakultas"
                   aria-describedby=""
                   placeholder="Masukan Nama Fakultas">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection
</x-admin-master>
