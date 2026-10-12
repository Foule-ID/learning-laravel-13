<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
        public function index()
    {
        return view('admin.about', [
            'title' => 'About',
            'nama' => 'Arhaqi Fadilgaffari',
            'github' => 'https://github.com/Foule-ID'
        ]);
    }
}
