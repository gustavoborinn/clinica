<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
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
            $medico = Medico::where('codpessoa', 'LIKE', "%$keyword%")
                ->orWhere('crm', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $medico = Medico::latest()->paginate($perPage);
        }

        return view('admin.medico.index', compact('medico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.medico.create');
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
        
        Medico::create($requestData);

        return redirect('admin/medico')->with('flash_message', 'Medico added!');
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
        $medico = Medico::findOrFail($id);

        return view('admin.medico.show', compact('medico'));
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
        $medico = Medico::findOrFail($id);

        return view('admin.medico.edit', compact('medico'));
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
        
        $medico = Medico::findOrFail($id);
        $medico->update($requestData);

        return redirect('admin/medico')->with('flash_message', 'Medico updated!');
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
        Medico::destroy($id);

        return redirect('admin/medico')->with('flash_message', 'Medico deleted!');
    }
}
