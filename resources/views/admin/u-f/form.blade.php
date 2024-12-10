<div>
    <label for="sigla" class="block font-medium text-sm text-gray-700">{{ 'Sigla' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="sigla" name="sigla" type="text" value="{{ isset($uf->sigla) ? $uf->sigla : ''}}" >
    {!! $errors->first('sigla', '<p>:message</p>') !!}
</div>
<div>
    <label for="nome_estado" class="block font-medium text-sm text-gray-700">{{ 'Nome Estado' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="nome_estado" name="nome_estado" type="text" value="{{ isset($uf->nome_estado) ? $uf->nome_estado : ''}}" >
    {!! $errors->first('nome_estado', '<p>:message</p>') !!}
</div>


<div class="flex items-center gap-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        {{ $formMode === 'edit' ? 'Update' : 'Create' }}
    </button>
</div>
