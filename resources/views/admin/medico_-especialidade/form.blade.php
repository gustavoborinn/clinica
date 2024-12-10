<div>
    <label for="id_medico" class="block font-medium text-sm text-gray-700">{{ 'Id Medico' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="id_medico" name="id_medico" type="number" value="{{ isset($medico_especialidade->id_medico) ? $medico_especialidade->id_medico : ''}}" >
    {!! $errors->first('id_medico', '<p>:message</p>') !!}
</div>
<div>
    <label for="id_especialidade" class="block font-medium text-sm text-gray-700">{{ 'Id Especialidade' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="id_especialidade" name="id_especialidade" type="number" value="{{ isset($medico_especialidade->id_especialidade) ? $medico_especialidade->id_especialidade : ''}}" >
    {!! $errors->first('id_especialidade', '<p>:message</p>') !!}
</div>


<div class="flex items-center gap-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        {{ $formMode === 'edit' ? 'Update' : 'Create' }}
    </button>
</div>
