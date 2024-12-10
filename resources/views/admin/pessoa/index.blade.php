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
                                Pessoa
                            </h2>
                            <div class="flex justify-end mt-5">
                                <a href="{{ route('pessoa.create') }}" class="px-2 py-1 rounded-md bg-sky-500 text-white hover:bg-sky-600" title="Add New Pessoa">Add New</a>
                            </div>
                        </header>
                        </br>

                        @if (session()->has('flash_message'))
                        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-emerald-500">
                            <span class="inline-block align-middle mr-8">
                                {{ session('flash_message') }}
                            </span>
                            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="this.parentNode.parentNode.removeChild(this.parentNode);">
                                <span>×</span>
                            </button>
                        </div>
                        @endif

                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">#</th>
                                    <th scope="col" class="px-6 py-3">Nome</th><th scope="col" class="px-6 py-3">Rua</th><th scope="col" class="px-6 py-3">Bairro</th><th scope="col" class="px-6 py-3">Cidade</th><th scope="col" class="px-6 py-3">Complemento</th><th scope="col" class="px-6 py-3">Id Uf</th><th scope="col" class="px-6 py-3">CEP</th><th scope="col" class="px-6 py-3">CPF</th><th scope="col" class="px-6 py-3">RG</th><th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($pessoa as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4">{{ $item->Nome }}</td><td class="px-6 py-4">{{ $item->Rua }}</td><td class="px-6 py-4">{{ $item->Bairro }}</td><td class="px-6 py-4">{{ $item->Cidade }}</td><td class="px-6 py-4">{{ $item->Complemento }}</td><td class="px-6 py-4">{{ $item->id_uf }}</td><td class="px-6 py-4">{{ $item->CEP }}</td><td class="px-6 py-4">{{ $item->CPF }}</td><td class="px-6 py-4">{{ $item->RG }}</td><td class="px-6 py-4">{{ $item->Email }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('pessoa.show', $item->id) }}" title="View Pessoa"><button type="button" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-1 px-2 rounded">View</button></a>
                                        <a href="{{ route('pessoa.edit', $item->id) }}" title="Edit Pessoa"><button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</button></a>

                                        <form method="POST" action="{{ route('pessoa.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            @csrf()
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" title="Delete Pessoa" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
    
                        <div class="mt-6">
                            {!! $pessoa->appends(['search' => Request::get('search')])->render() !!}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
