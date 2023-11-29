<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //Listar os cursos
    public function index(){
        //Recuperar os registro do BD
         //dd('listar os cursos'); teste de VARDAMP
        $courses = Course::orderByDesc('created_at')->paginate(10);
        //CARREGAR A VIEW
        return view('courses.index', ['courses' => $courses,]);
    }
    //Detalhes do curso
    public function show(Request $request){ 
        
        //Recuperar as informações do curso do bd.
       $course = Course::where('id', $request->courseId)->first();
        //CARREGAR A VIEW
        return view('courses.show', ['course' => $course]);
    }
     //Carregar o formulário cadastrar novo curso
     public function create(){ 
        //CARREGAR A VIEW
        return view('courses.create');
    }
     //Cadastrar no BD o novo curso
     public function store(Request $request){ 
        //Cadastrar no BD na tabela cursos os valores de todos os campos
        Course::create($request->all());
        //Course::created([ 'name' => $request->name]);
        //Redirecionar o usuáiro, enviar a msg de sucesso.
        return redirect()->route('course.show')->with('success', 'Curso cadastrado com sucesso!');
    }
    //Carregar o formulário cadastrar novo curso
    public function edit(){ 
        //CARREGAR A VIEW
        return view('courses.edit');
    }
        //Editar no BD o novo curso
        public function update(){ 
        dd('Editar no BD o novo curso');
    }

    //Deletar no BD o novo curso
    public function destroy(){ 
        dd('Excluir o curso no BD');
    }
}
