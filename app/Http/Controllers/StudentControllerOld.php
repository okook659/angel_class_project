<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    protected $students = [
        ["id"=>1, "nom"=>"ASSION", "prenom"=>"Mauril","dateNaissance"=>"1995-05-26", "sexe"=>"M", "telephone"=> "98503313"],
        ["id"=>2, "nom"=>"TOMEGAH", "prenom"=>"Jordan","dateNaissance"=>"2004-07-08", "sexe"=>"M", "telephone"=> "99333354"],
        ["id"=>3, "nom"=>"ASSION", "prenom"=>"Ayoko","dateNaissance"=>"2005-05-20", "sexe"=>"F", "telephone"=> "79903952"],
        ["id"=>4, "nom"=>"BASSADOU", "prenom"=>"Mathilde","dateNaissance"=>"2001-04-04", "sexe"=>"F", "telephone"=> "91773044"],
        ["id"=>5, "nom"=>"ASSION", "prenom"=>"Audrey","dateNaissance"=>"2001-04-04", "sexe"=>"F", "telephone"=> "79903944"],
        ["id"=>6, "nom"=>"APELETE", "prenom"=>"Narcisse","dateNaissance"=>"2001-04-04", "sexe"=>"M", "telephone"=> "98503313"],
        ["id"=>7, "nom"=>"DIVOR", "prenom"=>"Judichaël","dateNaissance"=>"2001-04-04", "sexe"=>"M", "telephone"=> "99333354"],
        ["id"=>8, "nom"=>"SEBOU", "prenom"=>"Victoire","dateNaissance"=>"2001-04-04", "sexe"=>"F", "telephone"=> "90021369"],
        ["id"=>9, "nom"=>"LABAH", "prenom"=>"Elie","dateNaissance"=>"2001-04-04", "sexe"=>"M", "telephone"=> "91773044"],
        ["id"=>10, "nom"=>"ASSIOU", "prenom"=>"Jean-Marie","dateNaissance"=>"2001-04-04", "sexe"=>"M", "telephone"=> "79903944"]
    ];
    public function index(){
        $students = $this->students;
        return view('students.index', compact('students'));
    }
    
    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $new_id = count($this->students) +1;
        $student = [
            "id"=>$new_id, "nom"=>$request->nom, "prenom"=>$request->prenom, "dateNaissance"=>$request->dateNaissance, "sexe"=>$request->sexe, "telephone"=>$request->telephone
        ];
        array_push($this->students, $student);
        $students = $this->students;
        return view('students.index', compact('students'));
    }
}
