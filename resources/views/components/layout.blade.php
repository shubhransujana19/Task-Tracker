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
    <nav class="px-5 py-3 bg-slate-800  text-xl rounded-lg shadow-md sticky top-0 flex justify-between items-center ">
        <div class="font-semibold text-lg text-white">
            <label for="task" class="ml-5  text-xl ">Task Tracker</label>
        </div>
        <div class="space-x-5 flex items-center">
            <x-nav-link href="/"        :active=" request()->is('/') "       > Home  </x-nav-link>
            <x-nav-link href="/about"   :active=" request()->is('about') "   > About </x-nav-link>
            <x-nav-link href="/contact" :active=" request()->is('contact') " >Contact</x-nav-link>    
            <x-nav-link href="/jobs"    :active=" request()->is('jobs') "    >  Jobs </x-nav-link>    

        </div>
        <div>
            <img src="https://laravel.com/img/logotype.min.svg" alt="Profile Picture" class="p-2 w-12 h-12 rounded-full border-2 " onclick="toggleDropdown()">
              
                <div id="dropdownMenu" class="hidden absolute right-5 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
                    <a href="/profile" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                    <a href="/settings" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a>
                    <a href="/logout" class="block px-4 py-2 text-red-800 hover:bg-red-200">Logout</a>

                </div>
        </div>
        
    </nav>

    <div class=" p-5 text-lg text-center text-white  ">
       {{ $heading }}
    </div>

    {{ $slot }}

    <script>
        function toggleDropdown(){
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>
</html>