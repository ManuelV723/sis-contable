<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-slate-800">Aquí irán todos los layouts generales</h1>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Tarjeta de Ingresos -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <p class="text-sm font-medium text-slate-500">Ingresos del Mes</p>
            <p class="text-3xl font-bold text-emerald-600 mt-2">$24,500.00</p>
        </div>
        <!-- Tarjeta de Egresos -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <p class="text-sm font-medium text-slate-500">Egresos del Mes</p>
            <p class="text-3xl font-bold text-rose-600 mt-2">$12,100.00</p>
        </div>
        <!-- Tarjeta de Balance -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <p class="text-sm font-medium text-slate-500">Balance Neto</p>
            <p class="text-3xl font-bold text-indigo-600 mt-2">$12,400.00</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
        <h3 class="text-lg font-bold text-slate-800 mb-2">Bienvenido a ContaSys</h3>
        <p class="text-slate-600">Usa la barra de navegación superior para moverte entre los diferentes módulos financieros. Haz clic sobre tu nombre en la esquina superior derecha para probar el menú desplegable y el botón de cerrar sesión.</p>
    </div>
</x-app-layout>