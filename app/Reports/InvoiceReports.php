<?php

namespace App\Reports;

use App\Invoice;
use App\Product;
use Jimmyjs\ReportGenerator\ReportMedia\PdfReport;

class InvoiceReports
{

    /**
     * @return mixed
     */
    public function displayReport()
    {
        $title = 'Company Invoice Reports';

        $meta = [
            'Registered on' => "" . ' To ' . "",
            'Sort By' => ""
        ];

        $invoices = Invoice::with('client', 'products');

        $columns = [

            'Invoice no '=> 'invoice_no',
            'Client' => function ($invoices) {
                return $invoices->client->name;
            },
            'Product' => function ($invoices) {
                return $invoices->products->name;
            },
            'Grand Total' => 'grand_total',
            'Due date '=> 'due_date'

        ];

        return (new PdfReport)->of($title, $meta, $invoices, $columns)->setCss([
            '.head-content' => 'border-width: 1px',])->stream();

    }

}