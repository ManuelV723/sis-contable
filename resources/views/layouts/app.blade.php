<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Sistema Contable' }}</title>

    <!-- Vite Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="h-full font-sans antialiased text-slate-800">
    
    <div class="min-h-screen flex flex-col">
        <!-- Barra de Navegación -->
        <x-navbar />

        <!-- Encabezado de la página (Opcional) -->
        @if (isset($header))
            <header class="bg-white shadow-sm border-b border-slate-200">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Contenido Dinámico del Proyecto -->
        <main class="flex-1 max-w-7xl w-full mx-auto p-4 sm:p-6 lg:p-8">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>
</html>