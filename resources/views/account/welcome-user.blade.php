<x-layout>
    <div class="h-screen flex items-center justify-center bg-gray-100">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">¡Bienvenido, {{ Auth::user()->name }}!</h1>
            <p class="text-lg text-gray-600">Nos alegra tenerte de vuelta en Mexicat.</p>
            <a href="{{ route('auth.logout') }}"
               class="mt-6 inline-block bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
               Cerrar sesión
            </a>
        </div>
    </div>
</x-layout>
