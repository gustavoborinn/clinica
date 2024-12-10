<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Medico_Especialidade;
use Illuminate\Http\Request;

class Medico_EspecialidadeController extends Controller
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
            $medico_especialidade = Medico_Especialidade::where('id_medico', 'LIKE', "%$keyword%")
                ->orWhere('id_especialidade', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $medico_especialidade = Medico_Especialidade::latest()->paginate($perPage);
        }

        return view('admin.medico_-especialidade.index', compact('medico_especialidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.medico_-especialidade.create');
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
        
        Medico_Especialidade::create($requestData);

        return redirect('admin/medico_-especialidade')->with('flash_message', 'Medico_Especialidade added!');
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
        $medico_especialidade = Medico_Especialidade::findOrFail($id);

        return view('admin.medico_-especialidade.show', compact('medico_especialidade'));
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
        $medico_especialidade = Medico_Especialidade::findOrFail($id);

        return view('admin.medico_-especialidade.edit', compact('medico_especialidade'));
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
        
        $medico_especialidade = Medico_Especialidade::findOrFail($id);
        $medico_especialidade->update($requestData);

        return redirect('admin/medico_-especialidade')->with('flash_message', 'Medico_Especialidade updated!');
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
        Medico_Especialidade::destroy($id);

        return redirect('admin/medico_-especialidade')->with('flash_message', 'Medico_Especialidade deleted!');
    }
}
