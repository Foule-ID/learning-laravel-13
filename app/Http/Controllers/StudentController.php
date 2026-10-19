<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Tambahkan baris ini untuk memanggil Model Student

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student';

        // Mengambil semua data dari tabel students di database
        $students = Student::all();

        return view('admin.student', compact('title', 'students'));
    }
}
