<?php

namespace App\Reports;

use App\Invoice;
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

        $invoices = Invoice::all();

        $columns = [
            'Invoice no '=> 'invoice_no',
            'Due date '=> 'due_date',
            'Grand Total' => 'grand_total'
        ];

        return (new PdfReport)->of($title, $meta, $invoices, $columns)->setCss([
            '.head-content' => 'border-width: 1px',])->stream();

    }

}