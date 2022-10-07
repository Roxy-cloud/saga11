<?php

namespace App\Http\Controllers;

use App\Models\Liceo;
use Illuminate\Http\Request;

/**
 * Class LiceoController
 * @package App\Http\Controllers
 */
class LiceoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liceos = Liceo::paginate();

        return view('liceo.index', compact('liceos'))
            ->with('i', (request()->input('page', 1) - 1) * $liceos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $liceo = new Liceo();
        return view('liceo.create', compact('liceo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Liceo::$rules);

        $liceo = Liceo::create($request->all());

        return redirect()->route('liceos.index')
            ->with('success', 'Datos del Liceo creados Exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $liceo = Liceo::find($id);

        return view('liceo.show', compact('liceo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $liceo = Liceo::find($id);

        return view('liceo.edit', compact('liceo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Liceo $liceo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Liceo $liceo)
    {
        request()->validate(Liceo::$rules);

        $liceo->update($request->all());

        return redirect()->route('liceos.index')
            ->with('success', 'Datos actualizados exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $liceo = Liceo::find($id)->delete();

        return redirect()->route('liceos.index')
            ->with('success', 'Liceo deleted successfully');
    }
}
