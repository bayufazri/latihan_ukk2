@extends('layouts.sidebar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Rombel</title>
</head>
<body>
    <h4>Tambah Rombel</h4>
    <button><a href="{{ route('rombels.create') }}">Tambah Data</a></button>

    <table border="1">
        <tr>
        <td>No</td>
        <td>Tingkat</td>
        <td>Action</td>
        </tr>
        @foreach ($rombels as $rombel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $rombel->tingkat }}</td>
            <td>
                <form action="{{ route('rombels.destroy',$rombel->id) }}" method="POST">
                    <button class="edit"><a href="{{ route('rombels.edit',$rombel->id) }}">Edit</a></button>
   
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