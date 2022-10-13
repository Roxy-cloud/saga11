<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Signature;
use App\Models\Seccion;
use App\Models\Crp;
use App\Models\Anioescolar;
use Illuminate\Http\Request;

/**
 * Class StudentController
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate();

        return view('students.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * $students->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = new Student();
        $seccions=Seccion::pluck('nombre_grado','id');
        $crps=Crp::pluck('nombre_crp','id');
        return view('students.create', compact('student','seccions','crps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Student::$rules);

        $student = Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Se ha añadido un nuevo estudiante.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $seccions=Seccion::pluck('nombre_grado','id');
        $crps=Crp::pluck('nombre_crp','id');
        return view('students.edit', compact('student','seccions','crps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        request()->validate(Student::$rules);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Los datos del Estudiante han sido Actualizados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();

        return redirect()->route('students.index')
            ->with('success', 'Los datos han sido eliminados');
    }
}
