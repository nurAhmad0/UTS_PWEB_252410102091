<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vehicle Tracker')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-300 text-slate-950 font-sans font-bold min-h-screen flex flex-col">
    @include('components.navbarAtas')

    <main class="w-2/3 mx-auto p-6 my-6 flex-grow w-full">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>
