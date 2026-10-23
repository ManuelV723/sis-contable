<nav x-data="{ userMenuOpen: false, mobileMenuOpen: false }" class="bg-slate-900 border-b border-slate-800 text-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            
            <!-- Logo / Identificación de la Empresa / Sistema -->
            <div class="flex items-center space-x-3">
                <a href="/dashboard" class="flex items-center space-x-2">
                    <div class="p-2 bg-emerald-600 rounded-lg text-white font-bold text-xl shadow-lg shadow-emerald-900/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 002 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="font-bold text-lg tracking-wide text-white block leading-tight">Panda Contable</span>
                        <span class="text-xs text-slate-400 block font-medium">Gestión Financiera</span>
                    </div>
                </a>
            </div>

            <!-- Navegación Principal (Desktop) -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/dashboard" class="px-3 py-2 rounded-md text-sm font-medium text-slate-200 hover:bg-slate-800 hover:text-white transition">Resumen</a>
                <a href="/ingresos" class="px-3 py-2 rounded-md text-sm font-medium text-slate-200 hover:bg-slate-800 hover:text-emerald-400 transition">Ingresos</a>
                <a href="/egresos" class="px-3 py-2 rounded-md text-sm font-medium text-slate-200 hover:bg-slate-800 hover:text-rose-400 transition">Egresos</a>
                <a href="/impuestos" class="px-3 py-2 rounded-md text-sm font-medium text-slate-200 hover:bg-slate-800 hover:text-amber-400 transition">Impuestos</a>
                <a href="/planilla" class="px-3 py-2 rounded-md text-sm font-medium text-slate-200 hover:bg-slate-800 hover:text-sky-400 transition">Empleados</a>
                <a href="/reportes" class="px-3 py-2 rounded-md text-sm font-medium text-slate-200 hover:bg-slate-800 hover:text-indigo-400 transition">Reportes</a>
            </div>

            <!-- Acciones Derecha (Usuario + Botón Menú Móvil) -->
            <div class="flex items-center space-x-3">
                
                <!-- Menú Desplegable de Usuario -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="flex items-center space-x-2 px-2.5 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 transition focus:outline-none focus:ring-2 focus:ring-emerald-500">
                        <div class="w-8 h-8 rounded-full bg-emerald-600 flex items-center justify-center font-bold text-white text-sm shadow">
                            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 2)) }}
                        </div>
                        <div class="text-left hidden sm:block">
                            <span class="text-sm font-semibold text-slate-100 block leading-none">
                                {{ auth()->user()->name ?? 'Usuario Demo' }}
                            </span>
                        </div>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Items -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl py-2 border border-slate-100 z-50 text-slate-800"
                         style="display: none;">
                        
                        <div class="px-4 py-2 border-b border-slate-100">
                            <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sesión iniciada como</p>
                            <p class="text-sm font-bold text-slate-800 truncate">{{ auth()->user()->name ?? 'Usuario Demo' }}</p>
                        </div>

                        <a href="/perfil" class="flex items-center px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-emerald-600 transition">
                            <svg class="w-4 h-4 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            Mi Perfil
                        </a>

                        <div class="border-t border-slate-100 my-1"></div>

                        <form method="POST" action="">
                            @csrf
                            <button type="submit" class="w-full text-left flex items-center px-4 py-2 text-sm text-rose-600 hover:bg-rose-50 transition font-medium">
                                <svg class="w-4 h-4 mr-3 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Botón Hamburguesa (Sólo Móvil) -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-2 rounded-lg bg-slate-800 text-slate-300 hover:text-white hover:bg-slate-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Menú Desplegable para Móviles (Aparece al hacer clic en la hamburguesa) -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-slate-900 border-t border-slate-800 px-4 pt-2 pb-4 space-y-1"
         style="display: none;">
        <a href="/dashboard" class="block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:bg-slate-800 hover:text-white">Resumen</a>
        <a href="/ingresos" class="block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:bg-slate-800 hover:text-emerald-400">Ingresos</a>
        <a href="/egresos" class="block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:bg-slate-800 hover:text-rose-400">Egresos</a>
        <a href="/impuestos" class="block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:bg-slate-800 hover:text-amber-400">Impuestos</a>
        <a href="/planilla" class="block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:bg-slate-800 hover:text-sky-400">Empleados</a>
        <a href="/reportes" class="block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:bg-slate-800 hover:text-indigo-400">Reportes</a>
    </div>
</nav>