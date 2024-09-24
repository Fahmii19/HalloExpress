<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')

    <title>HalloExpress</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
</body>
</html>
