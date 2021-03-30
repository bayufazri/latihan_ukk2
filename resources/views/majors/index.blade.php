@extends('layouts.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data major</title>
</head>
<body>
    <h4>Tambah major</h4>
    <button><a href="{{ route('majors.create') }}">Tambah Data</a></button>

    <table border="1">
        <tr>
        <td>No</td>
        <td>nama</td>
        <td>Action</td>
        </tr>
        @foreach ($majors as $major)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $major->nama }}</td>
            <td>
                <form action="{{ route('majors.destroy',$major->id) }}" method="POST">
                    <button class="edit"><a href="{{ route('majors.edit',$major->id) }}">Edit</a></button>
   
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