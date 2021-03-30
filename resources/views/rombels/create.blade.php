@extends('layouts.sidebar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h4>Tambah Data Rombel</h4>
    <button><a href="{{ route('rombels.index') }}">Back</a></button>

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



    <form action="{{ route('rombels.store') }}" method="post">
        @csrf
    <table>
        <tr>
            <th>Tingkat</th>
            <th>:</th>
            <th><input type="text" name="tingkat"></th>
            <th><input type="submit"></th>
        </tr>
    </table>
    </form>
</body>
</html>
@endsection