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

    /** invoice draft */
    public function invoiceDraft()
    {
        return view('invoices.draft_invoices');
    }

    /** recurring invoices.blade */
    public function invoiceRecurring()
    {
        return view('invoices.recurring_invoices');
    }

    /** invoice cancelled */
    public function invoiceCancelled()
    {
        return view('invoices.cancelled_invoices');
    }

    /** invoice grid */
    public function invoiceGrid()
    {
        return view('invoices.grid_invoice');
    }
}
