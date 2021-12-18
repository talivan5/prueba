<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\LessonResource;
use App\Http\Requests\LessonRequest;

class LessonController extends Controller
{
    public function index()
    {
        $lessons= Lesson::all();
        return view('lessons.index',['lessons'=>$lessons]); 
    }

    public function create()
    {
        return view('lessons.create');
    }

    public function store(LessonRequest $request)
    {
        $lesson= new Lesson();
        $lesson->name= $request->name;
        $lesson->save();
        return redirect('/lessons');
    }

    public function show(Lesson $lesson)
    {
        return view('lessons.show',['lesson'=>$lesson]);
    }

    public function edit(Lesson $lesson)
    {
        return view('lessons.edit',['lesson'=>$lesson]);
    }

    public function update(Request $request, $lesson)
    {
        $lesson= Lesson::find($lesson);
        $lesson->name= $request->name;
        $lesson->save();
        return redirect('/lessons');
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect('/lessons');
    }

    public function asigLesson(Lesson $lesson){
        $students=Student::all();
        return view('lessons.asigLesson',['students'=>$students, 'lesson'=>$lesson]);
    }
    
    public function asignarLesson(Request $request)
    {
        $ids = $request->ids;
        $lesson= Lesson::find($request->id);
        $lesson->students()->sync($ids);
        return redirect('/lessons');        
    }
}
