<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Brian2694\Toastr\Facades\Toastr;

class DepartmentController extends Controller
{
    /** index page department */
    public function indexDepartment()
    {
        return view('department.add-department');
    }
    
    /** edit record */
    public function editDepartment()
    {
        return view('department.edit-departmen');
    }

    /** department list */
    public function departmentList()
    {
        return view('department.list-department');
    }

    /** save record */
    public function saveRecord(Request $request)
    {
        $request->validate([
            'department_name'       => 'required|string',
            'head_of_department'    => 'required|string',
            'department_start_date' => 'required|string',
            'no_of_students'        => 'required|string',
        ]);

        try {

            $saveRecord = new Department;
            $saveRecord->department_name       = $request->department_name;
            $saveRecord->head_of_department    = $request->head_of_department;
            $saveRecord->department_start_date = $request->department_start_date;
            $saveRecord->no_of_students        = $request->no_of_students;
            $saveRecord->save();
   
            Toastr::success('Has been add successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('fail, Add new record  :)','Error');
            return redirect()->back();
        }
    }
}
