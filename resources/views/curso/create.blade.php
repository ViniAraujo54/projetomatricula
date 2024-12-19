<form method="POST" action="{{ route('cursos.store') }}" class="max-w-lg mx-auto mt-10 p-5 bg-white shadow-md rounded">
    @csrf
    
    <div class="mb-4">
        <label for="nome" class="block text-sm font-medium text-gray-700">Nome do Curso</label>
        <input 
            type="text" 
            id="nome" 
            name="nome" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
            placeholder="Digite o nome do curso"
        />
    </div>

    <div class="mb-4">
        <label for="carga_horaria" class="block text-sm font-medium text-gray-700">Carga Horária</label>
        <input 
            type="number" 
            id="carga_horaria" 
            name="carga_horaria" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
            placeholder="Digite a carga horária em horas"
        />
    </div>

    <div class="mb-4">
        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
        <textarea 
            id="descricao" 
            name="descricao" 
            rows="4" 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
            placeholder="Descreva o curso"
        ></textarea>
    </div>

    <div class="mb-4">
        <label for="ativo" class="block text-sm font-medium text-gray-700">Ativo</label>
        <select 
            id="ativo" 
            name="ativo" 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>

    <div class="flex justify-end">
        <button 
            type="submit" 
            class="px-4 py-2 bg-indigo-500 text-white text-sm font-medium rounded-md shadow hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
            Salvar Curso
        </button>
    </div>
</form>
