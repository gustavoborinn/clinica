<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\Patologium;
use Illuminate\Http\Request;

class PatologiumController extends Controller
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
            $patologia = Patologium::where('descricao_patologia', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $patologia = Patologium::latest()->paginate($perPage);
        }

        return view('admin.patologia.index', compact('patologia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.patologia.create');
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
        
        Patologium::create($requestData);

        return redirect('admin/patologia')->with('flash_message', 'Patologium added!');
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
        $patologium = Patologium::findOrFail($id);

        return view('admin.patologia.show', compact('patologium'));
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
        $patologium = Patologium::findOrFail($id);

        return view('admin.patologia.edit', compact('patologium'));
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
        
        $patologium = Patologium::findOrFail($id);
        $patologium->update($requestData);

        return redirect('admin/patologia')->with('flash_message', 'Patologium updated!');
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
        Patologium::destroy($id);

        return redirect('admin/patologia')->with('flash_message', 'Patologium deleted!');
    }
}
