<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Mapbox -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS dan JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css" />
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


    <title>HalloExpress</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        {{-- <div class="container mx-auto px-4"> --}}
        @yield('content')
    </div>

    <script src="{{ asset('assets/js/peta.js') }}"></script>
    <script src="{{ asset('assets/js/aksesibilitas.js') }}"></script>



</body>
</html>
