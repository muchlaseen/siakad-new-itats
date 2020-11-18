@extends('layoutAdmin.Admin')


@section('content')

<form action="{{ route('updateDosen', $dosen->nim)}} " method="post">
    @csrf
    @method("PUT")
    <input type="text" name="nim" placeholder="{{old('nim') ?? $dosen->nim}} ">
    <input type="text" name="nama" placeholder="{{old('nama') ?? $dosen->nama}}">
    <input type="text" name="alamat" placeholder="{{old('alamat') ?? $dosen->alamat}}">
    {{-- <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="Laki-Laki">
        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="Perempuan">
        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
    </div> --}}
    <input type="email" name="email" placeholder="{{old('email') ?? $dosen->email}}">
    <input type="text" name="telp" placeholder="{{old('no_telp') ?? $dosen->no_telp}}">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection