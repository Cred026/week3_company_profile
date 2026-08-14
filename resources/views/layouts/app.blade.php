<!DOCTYPE html>
<html>

<head>
    <title>Company Website</title>
    @vite('resources/css/main.css')
    @vite('resources/css/home.css')
    @vite('resources/css/about.css')
    @vite('resources/css/services.css')
    @vite('resources/css/navbar.css')
    @vite('resources/css/footer.css')
</head>

<body>

    @include('components.navbar')

    <main class="main">
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>
