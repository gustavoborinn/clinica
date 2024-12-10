<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;

use App\Models\UF;
use Illuminate\Http\Request;

class UFController extends Controller
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
            $uf = UF::where('sigla', 'LIKE', "%$keyword%")
                ->orWhere('nome_estado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $uf = UF::latest()->paginate($perPage);
        }

        return view('admin.u-f.index', compact('uf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.u-f.create');
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
        
        UF::create($requestData);

        return redirect('admin/u-f')->with('flash_message', 'UF added!');
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
        $uf = UF::findOrFail($id);

        return view('admin.u-f.show', compact('uf'));
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
        $uf = UF::findOrFail($id);

        return view('admin.u-f.edit', compact('uf'));
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
        
        $uf = UF::findOrFail($id);
        $uf->update($requestData);

        return redirect('admin/u-f')->with('flash_message', 'UF updated!');
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
        UF::destroy($id);

        return redirect('admin/u-f')->with('flash_message', 'UF deleted!');
    }
}
