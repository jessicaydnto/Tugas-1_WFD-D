<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Promotions')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="{{route('promotions.index')}}" class="text-xl font-bold">Promotions</a>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>
