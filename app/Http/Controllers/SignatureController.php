<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Signature;
use App\Models\Seccion;
use App\Models\User;
use App\Models\Crp;
use App\Models\Anioescolar;
use Illuminate\Http\Request;

/**
 * Class SignatureController
 * @package App\Http\Controllers
 */
class SignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signatures = Signature::paginate();

        return view('signatures.index', compact('signatures'))
            ->with('i', (request()->input('page', 1) - 1) * $signatures->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $signature = new Signature();
        $seccions=Seccion::pluck('nombre_grado','id');
        $users=User::pluck('name','id');
        return view('signatures.create', compact('signature','seccions','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Signature::$rules);

        $signature = Signature::create($request->all());

        return redirect()->route('signatures.index')
            ->with('success', 'Asignatura añadida.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $signature = Signature::find($id);

        return view('signature.show', compact('signature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $signature = Signature::find($id);
        $seccions=Seccion::pluck('nombre_grado','id');
        return view('signature.edit', compact('signature','seccions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Signature $signature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signature $signature)
    {
        request()->validate(Signature::$rules);

        $signature->update($request->all());

        return redirect()->route('signatures.index')
            ->with('success', 'Los datos de la Asignatura fueron actualizados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $signature = Signature::find($id)->delete();

        return redirect()->route('signatures.index')
            ->with('success', 'La Asignatura seleccionada fue eliminada');
    }
}
