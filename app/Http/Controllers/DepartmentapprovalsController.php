<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class DepartmentapprovalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $invoices = Invoice::all();

        return  view('departmentapprovals.index', compact('invoices'));
    }

    public function approvals(Request $request)
    {

        $invoice = Invoice::find($request->invoiceId);
        $approveVal = $request->approve;
        if ($approveVal == 'on')
        {
            $approveVal = 1;
        } else {
            $approveVal =0;
        }

        $invoice->approve=$approveVal;

        $invoice->save();

        return redirect()->back();

    }

}
