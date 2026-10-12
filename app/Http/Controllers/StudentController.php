<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student';


$students = [
    [
        'no' => 1,
        'nis' => 230001,
        'name' => 'Andi Pratama',
        'class' => 'XI PPLG 1',
        'address' => 'Kudus',
    ],
    [
        'no' => 2,
        'nis' => 230002,
        'name' => 'Budi Santoso',
        'class' => 'XI PPLG 2',
        'address' => 'Jepara',
    ],
    [
        'no' => 3,
        'nis' => 230003,
        'name' => 'Citra Lestari',
        'class' => 'XI PPLG 1',
        'address' => 'Demak',
    ],
    [
        'no' => 4,
        'nis' => 230004,
        'name' => 'Dimas Saputra',
        'class' => 'XI PPLG 2',
        'address' => 'Pati',
    ],
    [
        'no' => 5,
        'nis' => 230005,
        'name' => 'Eka Wulandari',
        'class' => 'XI PPLG 1',
        'address' => 'Kendal',
    ],
    [
        'no' => 6,
        'nis' => 230006,
        'name' => 'Farhan Ramadhan',
        'class' => 'XI PPLG 2',
        'address' => 'Rembang',
    ],
    [
        'no' => 7,
        'nis' => 230007,
        'name' => 'Gita Anggraini',
        'class' => 'XI PPLG 1',
        'address' => 'Semarang',
    ],
    [
        'no' => 8,
        'nis' => 230008,
        'name' => 'Hafiz Maulana',
        'class' => 'XI PPLG 2',
        'address' => 'Blora',
    ],
    [
        'no' => 9,
        'nis' => 230009,
        'name' => 'Intan Permata',
        'class' => 'XI PPLG 1',
        'address' => 'Grobogan',
    ],
    [
        'no' => 10,
        'nis' => 230010,
        'name' => 'Joko Firmansyah',
        'class' => 'XI PPLG 2',
        'address' => 'Kuningan',
    ],
];


    return view('admin.student', compact('title', 'students'));
    }
}
