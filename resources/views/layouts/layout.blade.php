<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <title>eFoot</title>
</head>
<body>
@include('layouts.navbar')
    <div class="content">
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

</body>
</html>
