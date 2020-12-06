<x-admin-master>
    @section('content')
    <h1> Create Dosen</h1>
    <form action="{{route('dosen.store')}} " enctype="multipart/form-data"  method="post">
        @csrf
        <div class="form-group">
            <label for="title">NIM</label>
            <input type="text"
                   name="nim"
                   class="form-control"
                   id="nim"
                   aria-describedby=""
                   placeholder="Masukan NIM">
        </div>
        <div class="form-group">
            <label for="title">Nama Lengkap</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   id="nama"
                   aria-describedby=""
                   placeholder="Masukan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="title">Alamat</label>
            <input type="text"
                   name="alamat"
                   class="form-control"
                   id="alamat"
                   aria-describedby=""
                   placeholder="Masukan Alamat">
        </div>
        <div class="form-group">
            <label for="title">Jenis Kelamin</label>
            <input type="text"
                   name="kelamin"
                   class="form-control"
                   id="kelamin"
                   aria-describedby=""
                   placeholder="Masukkan Kelaminmu">
        </div>
        <div class="form-group">
            <label for="title">Email</label>
            <input type="text"
                   name="email"
                   class="form-control"
                   id="email"
                   aria-describedby=""
                   placeholder="Masukan Email">
        </div>
        <div class="form-group">
            <label for="title">Nomor Telepon</label>
            <input type="text"
                   name="no_telp"
                   class="form-control"
                   id="no_telp"
                   aria-describedby=""
                   placeholder="Masukan nomor telpon">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection
</x-admin-master>
