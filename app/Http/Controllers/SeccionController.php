<?php

namespace App\Http\Controllers;

use App\Models\Seccion;
use App\Models\Anioescolar;
use App\Models\Signature;
use App\Models\Student;
use Illuminate\Http\Request;

/**
 * Class SeccionController
 * @package App\Http\Controllers
 */
class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccions = Seccion::paginate();
       
        return view('seccion.index', compact('seccions'))
            ->with('i', (request()->input('page', 1) - 1) * $seccions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seccion = new Seccion();
        $anioescolars=Anioescolar::pluck('nombreanioescolar','id');
        return view('seccion.create', compact('seccion','anioescolars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Seccion::$rules);

        $seccion = Seccion::create($request->all());

        return redirect()->route('seccions.index')
            ->with('success', 'Una nueva sección ha sido creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seccion = Seccion::find($id);

        return view('seccion.show', compact('seccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seccion = Seccion::find($id);
        $anioescolars=Anioescolar::pluck('nombreanioescolar','id');
        return view('seccion.edit', compact('seccion','anioescolars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Seccion $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seccion $seccion)
    {
        request()->validate(Seccion::$rules);

        $seccion->update($request->all());

        return redirect()->route('seccions.index')
            ->with('success', 'Los datos han sido modificados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $seccion = Seccion::find($id)->delete();

        return redirect()->route('seccions.index')
            ->with('success', 'la Sección fue eliminada');
    }
}
