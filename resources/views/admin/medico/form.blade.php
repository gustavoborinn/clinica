<div>
    <label for="codpessoa" class="block font-medium text-sm text-gray-700">{{ 'Codpessoa' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="codpessoa" name="codpessoa" type="number" value="{{ isset($medico->codpessoa) ? $medico->codpessoa : ''}}" >
    {!! $errors->first('codpessoa', '<p>:message</p>') !!}
</div>
<div>
    <label for="crm" class="block font-medium text-sm text-gray-700">{{ 'Crm' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="crm" name="crm" type="text" value="{{ isset($medico->crm) ? $medico->crm : ''}}" >
    {!! $errors->first('crm', '<p>:message</p>') !!}
</div>


<div class="flex items-center gap-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        {{ $formMode === 'edit' ? 'Update' : 'Create' }}
    </button>
</div>
