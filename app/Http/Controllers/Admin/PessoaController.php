<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pessoa = Pessoa::where('Nome', 'LIKE', "%$keyword%")
                ->orWhere('Rua', 'LIKE', "%$keyword%")
                ->orWhere('Bairro', 'LIKE', "%$keyword%")
                ->orWhere('Cidade', 'LIKE', "%$keyword%")
                ->orWhere('Complemento', 'LIKE', "%$keyword%")
                ->orWhere('id_uf', 'LIKE', "%$keyword%")
                ->orWhere('CEP', 'LIKE', "%$keyword%")
                ->orWhere('CPF', 'LIKE', "%$keyword%")
                ->orWhere('RG', 'LIKE', "%$keyword%")
                ->orWhere('Email', 'LIKE', "%$keyword%")
                ->orWhere('DataNascimento', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pessoa = Pessoa::latest()->paginate($perPage);
        }

        return view('admin.pessoa.index', compact('pessoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Pessoa::create($requestData);

        return redirect('admin/pessoa')->with('flash_message', 'Pessoa added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);

        return view('admin.pessoa.show', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);

        return view('admin.pessoa.edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($requestData);

        return redirect('admin/pessoa')->with('flash_message', 'Pessoa updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Pessoa::destroy($id);

        return redirect('admin/pessoa')->with('flash_message', 'Pessoa deleted!');
    }
}
