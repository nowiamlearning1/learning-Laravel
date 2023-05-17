<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SchoolTeacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $schoolteacher= SchoolTeacher::all();
        // dd($schoolteacher);

        return view('crud.index', compact('schoolteacher'));
    }
}
