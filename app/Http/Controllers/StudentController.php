<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use App\Http\Requests\StudentRequest;


class StudentController extends Controller
{

    public function index()
    {
        //$students=Student::paginate(5);
        $students=Student::all();
        return view('students.index',['students'=>$students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StudentRequest $request)
    {
        $student= new Student();
        $student->email= $request->email;
        $student->password= bcrypt($request->password);
        $student->save();
        return redirect('/students');
    }

    public function show(Student $student)
    {
        return view('students.show',['student'=>$student]);
    }

    public function edit(Student $student)
    {
        return view('students.edit',['student'=>$student]);
    }

    public function update(Request $request, $student)
    {
        $student= Student::find($student);
        $student->email= $request->email;
        $student->save();
        return redirect('/students');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students');
    }

    public function asignar(Student $student){
        $lessons=Lesson::all();
        return view('students.asignar',['lessons'=>$lessons, 'student'=>$student]);
    }

    
    public function asignarMateria(Request $request)
    {
        $ids = $request->ids;
        $student= Student::find($request->id);
        $student->lessons()->sync($ids);
        return redirect('/students');        
    }
}
