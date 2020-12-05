<x-admin-master>
    @section('content')
        <h1> Edit Dosen</h1>
        <form action="#" enctype="multipart/form-data"  method="post">
            @csrf
            <div class="form-group">
                <label for="title">NIM</label>
                <input type="text"
                       name="nim"
                       class="form-control"
                       id="nim"
                       aria-describedby=""
                       placeholder="Masukan NIM"
                       value="07010">
            </div>
            <div class="form-group">
                <label for="title">Nama Lengkap</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       id="nama"
                       aria-describedby=""
                       placeholder="Masukan Nama Lengkap"
                       value="Kharisma Ilham Nusantara">
            </div>
            <div class="form-group">
                <label for="title">Alamat</label>
                <input type="text"
                       name="alamat"
                       class="form-control"
                       id="alamat"
                       aria-describedby=""
                       placeholder="Masukan Alamat"
                       value="Taman, Sidoarjo">
            </div>
            <div class="form-group">
                <label for="title">Jenis Kelamin</label>
                <input type="text"
                       name="kelamin"
                       class="form-control"
                       id="kelamin"
                       aria-describedby=""
                       placeholder="Masukkan Kelaminmu"
                       value="Laki - laki">
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input type="text"
                       name="email"
                       class="form-control"
                       id="email"
                       aria-describedby=""
                       placeholder="Masukan Email"
                       value="ilhamnusantara@gmail.com">
            </div>
            <div class="form-group">
                <label for="title">Nomor Telepon</label>
                <input type="text"
                       name="no_telp"
                       class="form-control"
                       id="no_telp"
                       aria-describedby=""
                       placeholder="Masukan nomor telpon"
                       value="081331517861">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endsection
</x-admin-master>
