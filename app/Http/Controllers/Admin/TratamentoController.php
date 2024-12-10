<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Tratamento;
use Illuminate\Http\Request;

class TratamentoController extends Controller
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
            $tratamento = Tratamento::where('id_conspat', 'LIKE', "%$keyword%")
                ->orWhere('id_medicamento', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tratamento = Tratamento::latest()->paginate($perPage);
        }

        return view('admin.tratamento.index', compact('tratamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tratamento.create');
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
        
        Tratamento::create($requestData);

        return redirect('admin/tratamento')->with('flash_message', 'Tratamento added!');
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
        $tratamento = Tratamento::findOrFail($id);

        return view('admin.tratamento.show', compact('tratamento'));
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
        $tratamento = Tratamento::findOrFail($id);

        return view('admin.tratamento.edit', compact('tratamento'));
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
        
        $tratamento = Tratamento::findOrFail($id);
        $tratamento->update($requestData);

        return redirect('admin/tratamento')->with('flash_message', 'Tratamento updated!');
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
        Tratamento::destroy($id);

        return redirect('admin/tratamento')->with('flash_message', 'Tratamento deleted!');
    }
}
