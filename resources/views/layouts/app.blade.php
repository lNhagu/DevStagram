<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('titulo')</title>
        @vite('resources/css/app.css')
        
    </head>
    <body class="bg-gray-100">
        
        {{-- header --}}
        <header class="p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    <a href="/">DevStagram</a>
                </h1>

                <nav class="">
                    <a class="font-bold text-gray-600 p-1" href="#">Login</a>
                    <a class="font-bold text-gray-600 p-1" href="/register">Sing up</a>
                </nav>
                
            </div>

           

        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-bold text-center text-3xl mb-3">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 font-semibold text-gray-600">
            © DevStagram - Todos los derechos reservados - {{ now()->year }}
        </footer>

    </body>
</html>