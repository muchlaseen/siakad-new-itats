@extends('layoutAdmin.Admin')


@section('content')

<form action="{{ route('createDosenStore')}} " method="post">
    @csrf
    <input type="text" name="nim" placeholder="NIM Dosen">
    <input type="text" name="nama" placeholder="Nama Dosen">
    <input type="text" name="alamat" placeholder="Alamat">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="Laki-Laki">
        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="Perempuan">
        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
    </div>
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="telp" placeholder="No Telp">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection