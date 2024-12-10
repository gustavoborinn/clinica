<div>
    <label for="Nome" class="block font-medium text-sm text-gray-700">{{ 'Nome' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="Nome" name="Nome" type="text" value="{{ isset($pessoa->Nome) ? $pessoa->Nome : ''}}" >
    {!! $errors->first('Nome', '<p>:message</p>') !!}
</div>
<div>
    <label for="Rua" class="block font-medium text-sm text-gray-700">{{ 'Rua' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="Rua" name="Rua" type="text" value="{{ isset($pessoa->Rua) ? $pessoa->Rua : ''}}" >
    {!! $errors->first('Rua', '<p>:message</p>') !!}
</div>
<div>
    <label for="Bairro" class="block font-medium text-sm text-gray-700">{{ 'Bairro' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="Bairro" name="Bairro" type="text" value="{{ isset($pessoa->Bairro) ? $pessoa->Bairro : ''}}" >
    {!! $errors->first('Bairro', '<p>:message</p>') !!}
</div>
<div>
    <label for="Cidade" class="block font-medium text-sm text-gray-700">{{ 'Cidade' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="Cidade" name="Cidade" type="text" value="{{ isset($pessoa->Cidade) ? $pessoa->Cidade : ''}}" >
    {!! $errors->first('Cidade', '<p>:message</p>') !!}
</div>
<div>
    <label for="Complemento" class="block font-medium text-sm text-gray-700">{{ 'Complemento' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="Complemento" name="Complemento" type="text" value="{{ isset($pessoa->Complemento) ? $pessoa->Complemento : ''}}" >
    {!! $errors->first('Complemento', '<p>:message</p>') !!}
</div>
<div>
    <label for="id_uf" class="block font-medium text-sm text-gray-700">{{ 'Id Uf' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="id_uf" name="id_uf" type="number" value="{{ isset($pessoa->id_uf) ? $pessoa->id_uf : ''}}" >
    {!! $errors->first('id_uf', '<p>:message</p>') !!}
</div>
<div>
    <label for="CEP" class="block font-medium text-sm text-gray-700">{{ 'Cep' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="CEP" name="CEP" type="text" value="{{ isset($pessoa->CEP) ? $pessoa->CEP : ''}}" >
    {!! $errors->first('CEP', '<p>:message</p>') !!}
</div>
<div>
    <label for="CPF" class="block font-medium text-sm text-gray-700">{{ 'Cpf' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="CPF" name="CPF" type="text" value="{{ isset($pessoa->CPF) ? $pessoa->CPF : ''}}" >
    {!! $errors->first('CPF', '<p>:message</p>') !!}
</div>
<div>
    <label for="RG" class="block font-medium text-sm text-gray-700">{{ 'Rg' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="RG" name="RG" type="text" value="{{ isset($pessoa->RG) ? $pessoa->RG : ''}}" >
    {!! $errors->first('RG', '<p>:message</p>') !!}
</div>
<div>
    <label for="Email" class="block font-medium text-sm text-gray-700">{{ 'Email' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="Email" name="Email" type="text" value="{{ isset($pessoa->Email) ? $pessoa->Email : ''}}" >
    {!! $errors->first('Email', '<p>:message</p>') !!}
</div>
<div>
    <label for="DataNascimento" class="block font-medium text-sm text-gray-700">{{ 'Datanascimento' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="DataNascimento" name="DataNascimento" type="date" value="{{ isset($pessoa->DataNascimento) ? $pessoa->DataNascimento : ''}}" >
    {!! $errors->first('DataNascimento', '<p>:message</p>') !!}
</div>


<div class="flex items-center gap-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        {{ $formMode === 'edit' ? 'Update' : 'Create' }}
    </button>
</div>
