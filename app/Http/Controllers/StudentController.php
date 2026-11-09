<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student';
        $students = Student::all();

        $classrooms = Classroom::all();

        return view('admin.student', compact('title', 'students', 'classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|numeric|unique:students,nis',
            'name' => 'required',
            'classroom_id' => 'required',
        ]);

        Student::create($request->all());

        return redirect('/admin/student');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|numeric',
            'name' => 'required',
            'classroom_id' => 'required',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect('/admin/student');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/admin/student');
    }
}
