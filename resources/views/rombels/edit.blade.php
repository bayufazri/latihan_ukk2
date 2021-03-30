@extends('layouts.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Rombel</h2>
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

    <form action="{{ route('rombels.update',$rombel->id) }}" method="POST">
        @csrf
        @method('PUT')
  
    <table>
        <tr>Tingkat</tr>
        <tr>:</tr>
        <tr><input type="text" name="tingkat" value="{{ $rombel->tingkat }}"></tr>
        <tr><input type="submit"></tr>
</body>
</html>
@endsection
