<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /** index page */
    public function invoiceList()
    {
        return view('invoices.tab.list_invoices');
    }

    /** invoice paid page */
    public function invoicePaid()
    {
        return view('invoices.tab.paid_invoices');
    }

    /** incoice overdue page*/
    public function invoiceOverdue()
    {
        return view('invoices.tab.overdue_invoices');
    }

    /** invoice draft */
    public function invoiceDraft()
    {
        return view('invoices.tab.draft_invoices');
    }

    /** recurring invoices.blade */
    public function invoiceRecurring()
    {
        return view('invoices.tab.recurring_invoices');
    }

    /** invoice cancelled */
    public function invoiceCancelled()
    {
        return view('invoices.tab.cancelled_invoices');
    }

    /** invoice grid */
    public function invoiceGrid()
    {
        return view('invoices.grid_invoice');
    }
    
    /** invoice add */
    public function invoiceAdd()
    {
        return view('invoices.invoice_add');
    }

    /** invoice edit */
    public function invoiceEdit()
    {
        return view('invoices.invoice_edit');
    }

    /** invoice view */
    public function invoiceView()
    {
        return view('invoices.invoice_view');
    }
}
