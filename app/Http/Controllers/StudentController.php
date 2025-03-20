<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    protected $students = [];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = $this->students;
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_id = count($this->students) +1;
        $student = [
            "id"=>$new_id, "nom"=>$request->nom, "prenom"=>$request->prenom, "dateNaissance"=>$request->dateNaissance, "sexe"=>$request->sexe, "telephone"=>$request->telephone
        ];
        array_push($this->students, $student);
        $students = $this->students;
        return view('students.index', compact('students'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
