<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $users = User::whereIn('role_name',['Student','Client'])->get();
        return view('invoices.invoice_add',compact('users'));
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

    /** invoice settings */
    public function invoiceSettings()
    {
        return view('invoices.settings.settings_invoices');
    }

    /** invoice settingst tax */
    public function invoiceSettingsTax()
    {
        return view('invoices.settings.settings_tax');
    }

    /** invoice settings bank */
    public function invoiceSettingsBank()
    {
        return view('invoices.settings.settings_bank');
    }
}
