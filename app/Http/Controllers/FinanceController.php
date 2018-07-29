<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class FinanceController extends Controller
{


    public function index()
    {
        $invoices = Invoice::where('approve', '1')->get();

        return view('finance.index', compact('invoices'));

    }

}
