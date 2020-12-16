@extends('layoutAdmin.Admin')


@section('content')
    <table class="table table-bordered">
        <tr class="tr">
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>No Telp</th>
        </tr>

        @forelse ($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nim }}</td>
                <td>{{ $dosen->nama }}</td>
                {{-- <td>{{ str_limit($dosen->alamat, 50) }} <a href="{{ route('editDosen', $dosen) }}" >Baca Selenkapnya</a></td> --}}
                <td>{{ $dosen->alamat }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->no_telp }}</td>
                <td>
                    <a href="{{ route('editDosen', $dosen->nim) }}" class="btn btn-primary">Edit</a>
                    {{-- <button href="{{ route('article.destroy', $article) }}" class="btn btn-danger" id="delete">Delete</button> --}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">Data Kosong</td>
            </tr>
        @endforelse
    </table>
@endsection