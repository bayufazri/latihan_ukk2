@extends('layouts.sidebar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Tambah Data Siswa</title>
</head>
<body>
    
        <h2>Tabel Siswa Baru</h2>
        <button><a href="{{ route('students.create') }}">Tambah Data</a></button>
  


     <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->jns_kelamin }}</td>
            <td>{{ $student->temp_lahir }}</td>
            <td>{{ $student->tgl_lahir }}</td>
            <td>{{ $student->alamat }}</td>
            <td>{{ $student->asal_sekolah }}</td>
            <td>{{ $student->kelas }}</td>
            <td>{{ $student->jurusan }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                    <button class="show"><a href="{{ route('students.show',$student->id) }}">Show</a></button>
   
                    <button class="edit"><a href="{{ route('students.edit',$student->id) }}">Edit</a></button>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
   

   
   