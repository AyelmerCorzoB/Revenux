<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Navbar -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-800 hover:text-gray-600 transition-colors duration-300">
                            <img src="logo.svg" alt="Logo">
                        </a>
                    </div>

                    <!-- Auth Links -->
                    <div class="flex items-center space-x-4">
                        @auth
                            <!-- Enlace a Categorías -->
                            <a href="{{ route('categories.index') }}"
                                class="bg-[#5c76ef] rounded-lg text-white font-medium px-4 py-2 transition-all duration-300 hover:bg-[#4a5fcf] hover:shadow-md">
                                Categorías
                            </a>

                            <!-- Enlace a Transacciones -->
                            <a href="{{ route('transactions.index') }}"
                                class="bg-[#5c76ef] rounded-lg text-white font-medium px-4 py-2 transition-all duration-300 hover:bg-[#4a5fcf] hover:shadow-md">
                                Transacciones
                            </a>

                            <!-- Formulario de Cerrar Sesión -->
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit"
                                    class="text-gray-800 font-medium px-4 py-2 transition-all duration-300 hover:text-[#5c76ef] hover:underline">
                                    Cerrar Sesión
                                </button>
                            </form>
                        @else
                            <!-- Enlace a Iniciar Sesión -->
                            <a href="{{ route('login') }}"
                                class="text-gray-800 font-medium px-4 py-2 transition-all duration-300 hover:text-[#5c76ef] hover:underline">
                                Iniciar Sesión
                            </a>

                            <!-- Enlace a Registrarse -->
                            <a href="{{ route('register') }}"
                                class="bg-[#5c76ef] rounded-lg text-white font-medium px-4 py-2 transition-all duration-300 hover:bg-[#4a5fcf] hover:shadow-md">
                                Registrarse
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>