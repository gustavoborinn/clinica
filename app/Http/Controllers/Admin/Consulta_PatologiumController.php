<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Consulta_Patologium;
use Illuminate\Http\Request;

class Consulta_PatologiumController extends Controller
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
            $consulta_patologia = Consulta_Patologium::where('id_consulta', 'LIKE', "%$keyword%")
                ->orWhere('id_patologia', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $consulta_patologia = Consulta_Patologium::latest()->paginate($perPage);
        }

        return view('admin.consulta_-patologia.index', compact('consulta_patologia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.consulta_-patologia.create');
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
        
        Consulta_Patologium::create($requestData);

        return redirect('admin/consulta_-patologia')->with('flash_message', 'Consulta_Patologium added!');
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
        $consulta_patologium = Consulta_Patologium::findOrFail($id);

        return view('admin.consulta_-patologia.show', compact('consulta_patologium'));
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
        $consulta_patologium = Consulta_Patologium::findOrFail($id);

        return view('admin.consulta_-patologia.edit', compact('consulta_patologium'));
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
        
        $consulta_patologium = Consulta_Patologium::findOrFail($id);
        $consulta_patologium->update($requestData);

        return redirect('admin/consulta_-patologia')->with('flash_message', 'Consulta_Patologium updated!');
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
        Consulta_Patologium::destroy($id);

        return redirect('admin/consulta_-patologia')->with('flash_message', 'Consulta_Patologium deleted!');
    }
}
