<?php

namespace App\Http\Controllers;

use App\Client;
use App\Product;
use App\Invoice;
use App\Reports\InvoiceReports;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    protected $invoicereport;

    /**
     * InvoicesController constructor.
     * @param $invoicereport
     */
    public function __construct(InvoiceReports $invoicereport)
    {
        $this->invoicereport = $invoicereport;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $invoices = Invoice::all();
            $products = Product::all();
            $clients = Client::all();


        return view('invoices.index', compact('products', 'invoices', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $clients = Client::all();

        return view('invoices.create', compact('products', 'clients'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return string
     */
    public function store(Request $request)
    {

        $invoice = Invoice::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::findOrFail($id)->first();
        $product = Product::all();

        return view('invoices.show', compact('invoice', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getReports()
    {
        return $this->invoicereport->displayReport();
    }
}
