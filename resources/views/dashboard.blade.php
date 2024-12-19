<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tela Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <p style="color: black; font-size: 20px;">Bem-vindo(a)! Escolha uma ação:</p>

                    <main class="mt-6 space-y-4">
                        <button 
                            onclick="location.href='{{ route('cadastro') }}'" 
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-110">
                            Novo Cadastro
                        </button>

                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
