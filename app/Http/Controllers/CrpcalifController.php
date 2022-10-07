<?php

namespace App\Http\Controllers;

use App\Models\Crpcalif;
use Illuminate\Http\Request;

/**
 * Class CrpcalifController
 * @package App\Http\Controllers
 */
class CrpcalifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crpcalifs = Crpcalif::paginate();

        return view('crpcalif.index', compact('crpcalifs'))
            ->with('i', (request()->input('page', 1) - 1) * $crpcalifs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crpcalif = new Crpcalif();
        return view('crpcalif.create', compact('crpcalif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Crpcalif::$rules);

        $crpcalif = Crpcalif::create($request->all());

        return redirect()->route('crpcalifs.index')
            ->with('success', 'Crpcalif created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crpcalif = Crpcalif::find($id);

        return view('crpcalif.show', compact('crpcalif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crpcalif = Crpcalif::find($id);

        return view('crpcalif.edit', compact('crpcalif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Crpcalif $crpcalif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crpcalif $crpcalif)
    {
        request()->validate(Crpcalif::$rules);

        $crpcalif->update($request->all());

        return redirect()->route('crpcalifs.index')
            ->with('success', 'Crpcalif updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $crpcalif = Crpcalif::find($id)->delete();

        return redirect()->route('crpcalifs.index')
            ->with('success', 'Crpcalif deleted successfully');
    }
}
