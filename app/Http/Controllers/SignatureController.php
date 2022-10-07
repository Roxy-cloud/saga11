<?php

namespace App\Http\Controllers;

use App\Models\Signature;
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

        return view('signature.index', compact('signatures'))
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
        return view('signature.create', compact('signature'));
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
            ->with('success', 'Signature created successfully.');
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

        return view('signature.edit', compact('signature'));
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
            ->with('success', 'Signature updated successfully');
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
            ->with('success', 'Signature deleted successfully');
    }
}
