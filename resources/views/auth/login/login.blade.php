<x-layout>
    <div class="w-full h-screen">
        <div class="flex items-center justify-center h-full">
            <div class="w-96 p-6 bg-white rounded-md shadow-md">
                <h2 class="mb-6 text-2xl font-bold text-center">Mexicat - Inicio Sesión</h2>
                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Correo
                            Electrónico</label>
                        <input type="email" name="email" id="email" required
                               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('email') border-red-500 @enderror"
                               placeholder="Ingresa tu correo electrónico"
                               value="{{ old('email') }}">
                        @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Contraseña</label>
                        <input type="password" name="password" id="password" required
                               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                               placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit"
                            class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
