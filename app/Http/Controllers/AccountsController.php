<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('accounts.add-fees-collection');
    }
}
