<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">

                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Show Pessoa
                            </h2>
                            <div class="flex justify-end mt-5">
                                <a class="px-2 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('pessoa.index') }}" title="Back">< Back</a>
                            </div>
                        </header>
                        </br>

                        <table class="shadow-lg bg-white">
                            <tr>
                                <td class="border px-8 py-4 font-bold">ID</td>
                                <td class="border px-8 py-4">{{ $pessoa->id }}</td>
                            </tr>
                            <tr><td class="border px-8 py-4 font-bold"> Nome </td><td class="border px-8 py-4"> {{ $pessoa->Nome }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Rua </td><td class="border px-8 py-4"> {{ $pessoa->Rua }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Bairro </td><td class="border px-8 py-4"> {{ $pessoa->Bairro }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Cidade </td><td class="border px-8 py-4"> {{ $pessoa->Cidade }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Complemento </td><td class="border px-8 py-4"> {{ $pessoa->Complemento }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Id Uf </td><td class="border px-8 py-4"> {{ $pessoa->id_uf }} </td></tr><tr><td class="border px-8 py-4 font-bold"> CEP </td><td class="border px-8 py-4"> {{ $pessoa->CEP }} </td></tr><tr><td class="border px-8 py-4 font-bold"> CPF </td><td class="border px-8 py-4"> {{ $pessoa->CPF }} </td></tr><tr><td class="border px-8 py-4 font-bold"> RG </td><td class="border px-8 py-4"> {{ $pessoa->RG }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Email </td><td class="border px-8 py-4"> {{ $pessoa->Email }} </td></tr>
                        </table>

                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
