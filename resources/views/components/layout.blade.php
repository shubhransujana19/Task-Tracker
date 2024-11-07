<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Tracker </title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-900 ">
    <nav class="px-5 py-3 bg-slate-800 text-green-500 text-xl rounded-lg shadow-md sticky top-0 flex justify-between items-center ">
        <div class="font-semibold text-lg ">
            <label for="task" class="ml-5 text-white text-xl ">Task Tracker</label>
        </div>
        <div class="space-x-5 flex items-center">
            <x-nav-link href="/"        :active=" request()->is('/') "       > Home  </x-nav-link>
            <x-nav-link href="/about"   :active=" request()->is('about') "   > About </x-nav-link>
            <x-nav-link href="/contact" :active=" request()->is('contact') " >Contact</x-nav-link>    
        </div>
    </nav>

    <div class="text-center text-white ">
       {{ $heading }}
    </div>

    {{ $slot }}
</body>
</html>