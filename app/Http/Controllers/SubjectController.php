<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
{
    $title = 'Subjects';
    $subjects = \App\Models\Subject::all();
    return view('admin.subject', compact('title', 'subjects'));
}
}
