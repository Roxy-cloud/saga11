<?php

namespace App\Http\Controllers;

use App\Models\Crp;
use App\Models\User;
use App\Models\Student;
use App\Models\Signature;
use App\Models\Seccion;
use App\Models\Anioescolar;
use Illuminate\Http\Request;

/**
 * Class CrpController
 * @package App\Http\Controllers
 */
class CrpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crps = Crp::paginate();

        return view('crps.index', compact('crps'))
            ->with('i', (request()->input('page', 1) - 1) * $crps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crp = new Crp();
        $users=User::pluck('name','id');
        $anioescolars=Anioescolar::pluck('nombreanioescolar','id');
        return view('crps.create', compact('crp','users','anioescolars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Crp::$rules);

        $crp = Crp::create($request->all());

        return redirect()->route('crps.index')
            ->with('success', 'Grupo creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crp = Crp::find($id);

        return view('crps.show', compact('crp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crp = Crp::find($id);
        $anioescolars=Anioescolar::pluck('nombreanioescolar','id');
        $users=User::pluck('name','id');
        return view('crps.edit', compact('crp','users','anioescolars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Crp $crp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crp $crp)
    {
        request()->validate(Crp::$rules);

        $crp->update($request->all());

        return redirect()->route('crps.index')
            ->with('success', 'Grupo Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $crp = Crp::find($id)->delete();

        return redirect()->route('crps.index')
            ->with('success', 'Grupo Eliminado');
    }
}

