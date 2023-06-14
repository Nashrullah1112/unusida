<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    {{-- <script src="https://unpkg.com/@themesberg/flowbite@{{< current_version >}}/dist/flowbite.bundle.js"></script> --}}
    <script src="../../node_modules/@themesberg/flowbite/dist/flowbite.bundle.js"></script>
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>
<body>
   @include('partials.sidebar')
   <div class="p-4 sm:ml-64 sm:mt-24">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
         @yield('content')
      </div>
   </div>
</body>
</html>