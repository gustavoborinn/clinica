<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Consultum;
use Illuminate\Http\Request;

class ConsultumController extends Controller
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
            $consulta = Consultum::where('id_medesp', 'LIKE', "%$keyword%")
                ->orWhere('id_paciente', 'LIKE', "%$keyword%")
                ->orWhere('data_consulta', 'LIKE', "%$keyword%")
                ->orWhere('hora_consulta', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $consulta = Consultum::latest()->paginate($perPage);
        }

        return view('admin.consulta.index', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.consulta.create');
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
        
        Consultum::create($requestData);

        return redirect('admin/consulta')->with('flash_message', 'Consultum added!');
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
        $consultum = Consultum::findOrFail($id);

        return view('admin.consulta.show', compact('consultum'));
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
        $consultum = Consultum::findOrFail($id);

        return view('admin.consulta.edit', compact('consultum'));
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
        
        $consultum = Consultum::findOrFail($id);
        $consultum->update($requestData);

        return redirect('admin/consulta')->with('flash_message', 'Consultum updated!');
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
        Consultum::destroy($id);

        return redirect('admin/consulta')->with('flash_message', 'Consultum deleted!');
    }
}
