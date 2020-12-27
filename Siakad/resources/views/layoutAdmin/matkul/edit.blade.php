<x-admin-master>

@section('content')
    <h1>Edit Data Mata Kuliah</h1>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                
            <form action="{{route('matkul.update',$matkul->kode_mk)}} " method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="inputKode">Kode Mata Kuliah</label>
                    <input name="kode_mk" type="number" class="form-control" id="inputKode" aria-describedby="emailHelp" value="{{old('kode_mk') ?? $matkul->kode_mk}} ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Jurusan</label>
                    <select name="id_jurusan" class="form-control" id="exampleFormControlSelect1">
                    @foreach ($jurusans as $jurusan)
                        <option value={{$jurusan->id_jurusan}}>{{$jurusan->nama_jurusan}} </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputNamaMK">Nama Mata Kuliah</label>
                    <input name="nama_mk" type="text" class="form-control" id="inputNamaMK" aria-describedby="emailHelp" value="{{old('nama_mk') ?? $matkul->nama_mk}} ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">SKS</label>
                    <select name="sks" class="form-control" id="exampleFormControlSelect1">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=5>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Semester</label>
                    <select name="semester" class="form-control" id="exampleFormControlSelect1">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    </select>
                </div>
              
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
        </div>
@endsection
</x-admin-master>    