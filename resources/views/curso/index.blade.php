<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos disponiveis</title>
</head>
<body>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-bold text-xl mb-4">Cursos disponiveis.</h3>
                    <div class="flex items-center">
                        <input type="text" id="searchInput" class="w-full pl-3 pr-10 border-gray-300 focus:outline-none focus:border-gray-400 rounded-md" placeholder="Pesquisar por curso...">
                        <button type="button" class="ml-3 bg-gray-800 text-white font-bold py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:shadow-outline">Pesquisar</button>
                    </div>
                    <div class="mt-6">
                        <table class="w-full divide-y divide-gray-200">
                            <thead>
                                <tr class="text-left text-xs font-medium text-gray-500 uppercase bg-gray-100">
                                    <th>Curso</th>
                                    <th>Carga Horária</th>
                                    <th>Início</th>
                                    <th>Término</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="max-w-5xl mx-auto mt-10">
                                    <div class="flex justify-between items-center mb-6">
                                        <h1 class="text-2xl font-bold text-gray-800">Lista de Cursos</h1>
                                        <a 
                                            href="{{ route('cursos.create') }}" 
                                            class="px-4 py-2 bg-indigo-500 text-white text-sm font-medium rounded-md shadow hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                        >
                                            Adicionar Curso
                                        </a>
                                    </div>
                                
                                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Nome
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Carga Horária
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Descrição
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Ativo
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Ações</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse ($cursos as $curso)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $curso->nome }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $curso->carga_horaria }} horas</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $curso->descricao }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $curso->ativo ? 'Sim' : 'Não' }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <a href="{{ route('cursos.edit', $curso->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                                            <form 
                                                                action="{{ route('cursos.destroy', $curso->id) }}" 
                                                                method="POST" 
                                                                class="inline-block ml-2"
                                                                onsubmit="return confirm('Tem certeza que deseja excluir este curso?');"
                                                            >
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="text-red-600 hover:text-red-900">Excluir</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">Nenhum curso encontrado.</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                
                                    <div class="mt-6">
                                        {{ $cursos->links() }} <!-- Paginação -->
                                    </div>
                                </div>
                                
                            </tbody>
                        </table>
                    </div>

</body>
</html>