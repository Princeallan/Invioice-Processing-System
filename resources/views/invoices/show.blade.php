@extends('layouts.vendor')

@section('content')

    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                            </td>

                            <td>
                                Invoice #: {{$invoice->invoice_no}}<br>
                                Created: {{$invoice->created_at}}<br>
                                Due: {{$invoice->due_date}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Sparksuite, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, CA 12345
                            </td>

                            <td>
                                Acme Corp.<br>
                                John Doe<br>
                                john@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Item
                </td>


                <td>
                    #Total
                </td>
            </tr>

            <tr class="item">
                <td>
                    office chair
                </td>

                <td>
                    $75.00
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                  Grand  Total: $ {{ $invoice->grand_total }}
                </td>
            </tr>
        </table>
    </div>
@endsection