<?php

namespace App\Http\Controllers;

use App\Models\StudentSignature;
use Illuminate\Http\Request;

/**
 * Class StudentSignatureController
 * @package App\Http\Controllers
 */
class StudentSignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentSignatures = StudentSignature::paginate();

        return view('student_signatures.index', compact('studentSignatures'))
            ->with('i', (request()->input('page', 1) - 1) * $studentSignatures->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentSignature = new StudentSignature();
        return view('student-signatures.create', compact('studentSignature'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(StudentSignature::$rules);

        $studentSignature = StudentSignature::create($request->all());

        return redirect()->route('student_signatures.index')
            ->with('success', 'StudentSignature created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentSignature = StudentSignature::find($id);

        return view('student_signatures.show', compact('studentSignature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentSignature = StudentSignature::find($id);

        return view('student_signatures.edit', compact('studentSignature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  StudentSignature $studentSignature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentSignature $studentSignature)
    {
        request()->validate(StudentSignature::$rules);

        $studentSignature->update($request->all());

        return redirect()->route('student_signatures.index')
            ->with('success', 'StudentSignature updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $studentSignature = StudentSignature::find($id)->delete();

        return redirect()->route('student-signatures.index')
            ->with('success', 'StudentSignature deleted successfully');
    }
}
