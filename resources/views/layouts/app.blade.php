<!DOCTYPE html>
<html>

<head>
    <title>Company Website</title>
    @vite('resources/css/navbar.css')
    @vite('resources/css/main.css')
</head>

<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>
