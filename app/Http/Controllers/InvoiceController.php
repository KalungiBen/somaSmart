<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /** index page */
    public function invoiceList()
    {
        return view('invoices.list_invoices');
    }
}
