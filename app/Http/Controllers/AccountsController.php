<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeesType;
use App\Models\User;

class AccountsController extends Controller
{
    /** index page */
    public function index()
    {
        return view('accounts.feescollections');
    }

    /** add Fees Collection */
    public function addFeesCollection()
    {
        $users    = User::whereIn('role_name',['Student'])->get();
        $feesType = FeesType::all();
        return view('accounts.add-fees-collection',compact('users','feesType'));
    }
}
