<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
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
            $especialidade = Especialidade::where('descricao_especialidade', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $especialidade = Especialidade::latest()->paginate($perPage);
        }

        return view('admin.especialidade.index', compact('especialidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.especialidade.create');
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
        
        Especialidade::create($requestData);

        return redirect('admin/especialidade')->with('flash_message', 'Especialidade added!');
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
        $especialidade = Especialidade::findOrFail($id);

        return view('admin.especialidade.show', compact('especialidade'));
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
        $especialidade = Especialidade::findOrFail($id);

        return view('admin.especialidade.edit', compact('especialidade'));
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
        
        $especialidade = Especialidade::findOrFail($id);
        $especialidade->update($requestData);

        return redirect('admin/especialidade')->with('flash_message', 'Especialidade updated!');
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
        Especialidade::destroy($id);

        return redirect('admin/especialidade')->with('flash_message', 'Especialidade deleted!');
    }
}
