<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $title = 'Classroom';
        $classrooms = Classroom::all();

        return view('admin.classroom', compact('title', 'classrooms'));
    }
}
