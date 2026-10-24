<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Andi',
                'major' => 'SIKC',
                'age' => 22,
                'courses' => ['Pemograman Web', 'Database', 'cloud computing'],
            ],
            [
                'name' => 'Siti',
                'major' => 'SIKC',
                'age' => 21,
                'courses' => ['UI/UX Desaign', 'Manajemen Proyek', 'cloud computing'],
            ]
        ];

        return view('students.index', compact('students'));
    }
}