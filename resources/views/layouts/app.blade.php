<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>DevStagram | @yield('titulo')</title>
        @vite('resources/css/app.css')
        {{-- alpinejs --}}
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script> 
        
    </head>
    <body class="bg-gray-100" x-data="{ isSidebarOpen: false }">

        {{-- sidebar --}}
        
        
        {{-- header --}}
        <header class="hidden lg:block p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    <a href="/">DevStagram</a>
                </h1>

                @auth
                <nav class="">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="font-bold text-gray-600 p-1" href="/logout">Logout</button>
                    </form>
                </nav>
                
                @endauth

                @guest
                <nav class="">
                    <a class="font-bold text-gray-600 p-1" href="/login">Login</a>
                    <a class="font-bold text-gray-600 p-1" href="/register">Sing up</a>
                </nav>
                @endguest
                
            </div>

           

        </header>

        @auth
        <aside :class="isSidebarOpen ? 'block' : 'hidden'" class="mt-1 lg:block w-64 bg-white h-screen shadow-md fixed">
            <div class="flex flex-col p-4">
                <!-- Logo -->
                <div class="text-2xl font-bold mb-8">DevsTagram</div>
                
                <!-- Menu -->
                <nav class="flex flex-col space-y-8 text-xl ">
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-home"></i>
                        <span class="ml-4">Home</span>
                    </a>
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-search"></i>
                        <span class="ml-4">Search</span>
                    </a>
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-compass"></i>
                        <span class="ml-4">Explore</span>
                    </a>
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-bell"></i>
                        <span class="ml-4">Notifications</span>
                    </a>
                    <a href="/{{ auth()->user()->username }}" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-user"></i>
                        <span class="ml-4">Profile</span>
                    </a>
                </nav>
            </div>
        </aside>


        <!-- Mobile Menu -->
        <div class="lg:hidden fixed top-4 left-4">
            <button @click="isSidebarOpen = !isSidebarOpen" class="p-2 bg-blue-500 text-white rounded-full shadow-md">
                <span><i class="fas fa-bars"></i></span>
            </button>
        </div>
        @endauth
        

        <main class="container mx-auto mt-3">
            {{-- <h2 class="font-bold text-center text-3xl mb-3">
                @yield('titulo')
            </h2> --}}
            @yield('contenido')
        </main>

        <footer class=" text-sm text-center p-5 font-semibold text-gray-400">
            © DevStagram - Todos los derechos reservados - {{ now()->year }}
        </footer>

    </body>
</html>