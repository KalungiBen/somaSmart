<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /** index page */
    public function subjectList()
    {
        return view('subjects.subject_list');
    }

    /** subject add */
    public function subjectAdd()
    {
        return view('subjects.subject_add');
    }

    /** subject edit */
    public function subjectEdit()
    {
        return view('subjects.subject_edit');
    }
}
