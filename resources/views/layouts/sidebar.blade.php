<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB</title>
</head>
<body>
    <h1>Admin</h1>
    <li><a href="{{ route('students.index') }}">Siswa</a></li>
    <li><a href="{{ route('rombels.index') }}">Rombel</a></li>
    <li><a href="{{ route('majors.index') }}">Rayon</a></li>

    @yield('content')
</body>
</html>