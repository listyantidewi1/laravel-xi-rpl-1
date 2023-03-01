<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{-- directive @yield digunakan sebagai penanda --}}
        {{-- menandai bagian judul / title --}}
        @yield('title')
    </title>
</head>
<body>
    {{-- menandai bagian content / isi --}}
    @yield('content')
</body>
</html>
