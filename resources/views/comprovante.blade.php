<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comprovante de Matrícula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-bold text-xl mb-4">Aluno Matriculado com Sucesso!</h3>

                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong>Nome:</strong> {{ $aluno->nome }}</li>
                        <li><strong>Data de Nascimento:</strong> {{ $aluno->data_nascimento }}</li>
                        <li><strong>Nome do Pai:</strong> {{ $aluno->pai }}</li>
                        <li><strong>Nome da Mãe:</strong> {{ $aluno->mae }}</li>
                        <li><strong>Curso:</strong> {{ $aluno->curso }}</li>
                    </ul>

                    <p class="mt-6 text-green-600 font-semibold">
                        Você foi matriculado com sucesso! Aguarde mais informações.
                    </p>

                    <a href="{{ route('cadastro') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                        Voltar para o Cadastro
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
