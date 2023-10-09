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
}
