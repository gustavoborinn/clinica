<div>
    <label for="id_medesp" class="block font-medium text-sm text-gray-700">{{ 'Id Medesp' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="id_medesp" name="id_medesp" type="number" value="{{ isset($consultum->id_medesp) ? $consultum->id_medesp : ''}}" >
    {!! $errors->first('id_medesp', '<p>:message</p>') !!}
</div>
<div>
    <label for="id_paciente" class="block font-medium text-sm text-gray-700">{{ 'Id Paciente' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="id_paciente" name="id_paciente" type="number" value="{{ isset($consultum->id_paciente) ? $consultum->id_paciente : ''}}" >
    {!! $errors->first('id_paciente', '<p>:message</p>') !!}
</div>
<div>
    <label for="data_consulta" class="block font-medium text-sm text-gray-700">{{ 'Data Consulta' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="data_consulta" name="data_consulta" type="date" value="{{ isset($consultum->data_consulta) ? $consultum->data_consulta : ''}}" >
    {!! $errors->first('data_consulta', '<p>:message</p>') !!}
</div>
<div>
    <label for="hora_consulta" class="block font-medium text-sm text-gray-700">{{ 'Hora Consulta' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="hora_consulta" name="hora_consulta" type="time" value="{{ isset($consultum->hora_consulta) ? $consultum->hora_consulta : ''}}" >
    {!! $errors->first('hora_consulta', '<p>:message</p>') !!}
</div>


<div class="flex items-center gap-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        {{ $formMode === 'edit' ? 'Update' : 'Create' }}
    </button>
</div>
