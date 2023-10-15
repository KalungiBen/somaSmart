<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Subject;

use Brian2694\Toastr\Facades\Toastr;

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

    /** save record */
    public function saveRecord(Request $request)
    {
        $request->validate([
            'subject_name' => 'required|string',
            'class'        => 'required|string',
        ]);
        
        DB::beginTransaction();
        try {
                $saveRecord = new Subject;
                $saveRecord->subject_name   = $request->subject_name;
                $saveRecord->class          = $request->class;
                $saveRecord->save();

                Toastr::success('Has been add successfully :)','Success');
                DB::commit();
            return redirect()->back();
           
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('fail, Add new record:)','Error');
            return redirect()->back();
        }
    }

    /** subject edit */
    public function subjectEdit()
    {
        return view('subjects.subject_edit');
    }
}
