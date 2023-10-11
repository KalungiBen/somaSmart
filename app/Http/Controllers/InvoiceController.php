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

    /** invoice paid page */
    public function invoicePaid()
    {
        return view('invoices.paid_invoices');
    }

    /** incoice overdue page*/
    public function invoiceOverdue()
    {
        return view('invoices.overdue_invoices');
    }
}
