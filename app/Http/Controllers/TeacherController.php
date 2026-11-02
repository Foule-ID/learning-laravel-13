<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
{
    $title = 'Teachers';
    $teachers = \App\Models\Teacher::all();
    return view('admin.teacher', compact('title', 'teachers'));
}
}
