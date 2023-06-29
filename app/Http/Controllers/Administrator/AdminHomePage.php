<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomePage extends Controller
{
    //{
    public function index()
    {
        $timetable = [
            'Monday' => [
                '09:00' => 'Lesson 1',
                '10:00' => 'Lesson 2',
                '11:00' => 'Lesson 3',
                '12:00' => 'Lesson 4',
            ],
            'Tuesday' => [
                '09:00' => 'Lesson 1',
                '10:00' => 'Lesson 2',
                '11:00' => 'Lesson 3',
                '12:00' => 'Lesson 4',
            ],
            'Wednesday' => [
                '09:00' => 'Lesson 1',
                '10:00' => 'Lesson 2',
                '11:00' => 'Lesson 3',
                '12:00' => 'Lesson 4',
            ]
        ];

        return view('student.timetable', compact('timetable'));
    }
}

