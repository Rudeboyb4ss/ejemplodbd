<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
     //Obtener todos los datos de una tabla (get)
     public function index()
     {
         $course = Course::all();
         return view('course', compact('course'));
     }

     public function store(Request $request)
    {
        $course = new Course();
        $course->nombre = $request ->nombre;
        $course->descripcion = $request->descripcion;
        $course->nivel = $request->nivel;
        $course->save();

        return redirect('/course');
    }
}
