<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIAKAD ITATS | Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
            <form action="/mahasiswa/{{$mahasiswas->npm}}/update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="inputNPM">NPM</label>
                  <input name="npm" type="number" class="form-control" id="inputNPM" aria-describedby="emailHelp" value="{{$mahasiswas->npm}}">
                </div>
                <div class="form-group">
                    <label for="inputJurusan">ID Jurusan</label>
                    <input name="id_jurusan" type="text" class="form-control" id="inputJurusan" aria-describedby="emailHelp" value="{{$mahasiswas->id_jurusan}}">
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->nama}}" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswas->alamat}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                      <option value="L" @if($mahasiswas->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                      <option value="P" @if($mahasiswas->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputNama">Email</label>
                    <input name="email" type="email" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->email}}">
                </div>
                <div class="form-group">
                    <label for="inputNama">No Telfon</label>
                    <input name="no_telp" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->no_telp}}">
                </div>
                <div class="form-group">
                    <label for="inputNama">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->tempat_lahir}}">
                </div>
                <div class="form-group">
                    <label for="inputNama">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->tgl_lahir}}">
                </div>
                <div class="form-group">
                    <label for="inputNama">Agama</label>
                    <input name="agama" type="text" class="form-control" id="inputNama" aria-describedby="emailHelp" value="{{$mahasiswas->agama}}">
                </div>
              
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
        </div>
            

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

