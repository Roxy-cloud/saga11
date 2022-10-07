<?php

namespace App\Http\Controllers;

use App\Models\Anioescolar;
use App\Models\Liceo;
use Illuminate\Http\Request;

/**
 * Class AnioescolarController
 * @package App\Http\Controllers
 */
class AnioescolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anioescolars = Anioescolar::paginate();

        return view('anioescolar.index', compact('anioescolars'))
            ->with('i', (request()->input('page', 1) - 1) * $anioescolars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anioescolar = new Anioescolar();
        $liceos=Liceo::pluck('nombre','id');
        return view('anioescolar.create', compact('anioescolar','liceos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Anioescolar::$rules);

        $anioescolar = Anioescolar::create($request->all());

        return redirect()->route('anioescolars.index')
            ->with('success', 'Creado exitosamente..!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anioescolar = Anioescolar::find($id);

        return view('anioescolar.show', compact('anioescolar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anioescolar = Anioescolar::find($id);
        $liceos=Liceo::pluck('nombre','id');
        return view('anioescolar.edit', compact('anioescolar','liceos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Anioescolar $anioescolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anioescolar $anioescolar)
    {
        request()->validate(Anioescolar::$rules);

        $anioescolar->update($request->all());
 
        return redirect()->route('anioescolars.index')
            ->with('success', 'Actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $anioescolar = Anioescolar::find($id)->delete();

        return redirect()->route('anioescolars.index')
            ->with('success', 'Eliminado exitosamente');
    }
}
