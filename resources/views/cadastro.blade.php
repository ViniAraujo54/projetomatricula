<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Aluno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('curso') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" name="nome" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="data_nascimento">Data de Nascimento:</label>
                                <input type="date" id="data_nascimento" name="data_nascimento" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="pai">Nome do Pai:</label>
                                <input type="text" id="pai" name="pai" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="mae">Nome da Mãe:</label>
                                <input type="text" id="mae" name="mae" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="sexo">Sexo:</label>
                                <select id="sexo" name="sexo" class="border rounded w-full">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                            <div>
                                <label for="rg">RG:</label>
                                <input type="text" id="rg" name="rg" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="cpf">CPF:</label>
                                <input type="text" id="cpf" name="cpf" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="telefone_residencial">Telefone Residencial:</label>
                                <input type="text" id="telefone_residencial" name="telefone_residencial" class="border rounded w-full">
                            </div>
                            <div>
                                <label for="telefone_celular">Telefone Celular:</label>
                                <input type="text" id="telefone_celular" name="telefone_celular" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="tipo_sanguineo">Tipo Sanguíneo:</label>
                                <input type="text" id="tipo_sanguineo" name="tipo_sanguineo" required class="border rounded w-full">
                            </div>
                            <div>
                                <label for="deficiencia">Possui Deficiência:</label>
                                <select id="deficiencia" name="deficiencia" class="border rounded w-full">
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                            <div>
                                <label for="estado_civil">Estado Civil:</label>
                                <select id="estado_civil" name="estado_civil" class="border rounded w-full">
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viúvo(a)">Viúvo(a)</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Enviar Formulário
                        </button>
                    </form>

                    <script>
                        function reduzirVagas(index) {
                            const vagas = document.getElementById(`vagas_${index}`);
                            let numeroVagas = parseInt(vagas.innerText.split(': ')[1]);
                            if (numeroVagas > 0) {
                                numeroVagas -= 1;
                                vagas.innerText = `Vagas Disponíveis: ${numeroVagas}`;
                            } else {
                                alert('Não há mais vagas disponíveis neste curso.');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
