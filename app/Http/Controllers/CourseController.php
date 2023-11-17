<?php

namespace App\Http\Controllers;

use App\Models\Course ;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $course = Course::all();
//     
       
      return view('course.index', compact('course'));
       
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Course::create($request->all());
        // return redirect()->back()->with('error', 'Ocorreu um erro ao criar o usuário. Por favor, tente novamente.');
        return redirect()->route('course.index')->with('success', 'Curso adicionado!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course  = Course ::findOrFail($id);
        return view('course .show', compact('course '));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course  = Course::findOrFail($id);
       
       

        return view('course .edit', compact('course '));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course  = Course ::findOrFail($id);

        $course ->update($request->all());

        return redirect()->route('course .index')->with('success', 'Curso actualizado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course  = Course ::findOrFail($id);

        $course ->delete();

        return redirect()->route('course.index')->with('success', 'Curso adicionado com sucesso');

    }
}
