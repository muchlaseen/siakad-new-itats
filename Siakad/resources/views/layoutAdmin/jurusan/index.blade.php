<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select id="id jurusan">
        {{-- <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option> --}}
      
        @forelse ($fakultass as $fakul)
            <option value="{{$fakul->id_fakultas}}">{{$fakul->nama_fakultas}}</option>
            {{-- <p>
                {{$fakul->id_fakultas}}
            </p> --}}
        @endforeach
    </select>
</body>
</html>