@extends('layouts.sidebar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Show Data</title>
</head>
<body>
    <div class="container">
    <button style="margin-top: 0px"><a href="{{ route('students.index') }}"> Back</a></button>
    <h2>Data Siswa Baru</h2>
@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

     <form action="{{ route('students.store') }}" method="POST">
    @csrf
  
    <table>
        <tr>
            <th>NIS</th>
            <th>:</th>
            <th>{{ $student->nis }}</th>
        </tr>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th>{{ $student->nama }}</th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <th>{{ $student->jns_kelamin }}</th>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <th>{{ $student->temp_lahir }}</th>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <th>{{ $student->tgl_lahir }}</th>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <th>{{ $student->alamat }}</th>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <th>:</th>
            <th>{{ $student->asal_sekolah }}</th>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <th>{{ $student->kelas }}</th>
        </tr>
        <tr>
        <tr>
            <th>Jurusan</th>
            <th>:</th>
            <th>{{ $student->jurusan }}</th>
        </tr>
    </table>
   
</form>
    </div>
</body>
</html>
@endsection