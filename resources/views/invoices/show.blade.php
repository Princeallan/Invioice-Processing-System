@extends('layouts.master')

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
                    Payment Method
                </td>

                <td>
                    Check #
                </td>
            </tr>

            <tr class="details">
                <td>
                    Check
                </td>

                <td>
                    1000
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Item
                </td>

                <td>
                    Price
                </td>
            </tr>

            <tr class="item">
                <td>
                    {{--{{$invoice->product->name}}--}}
                </td>

                <td>
                    $300.00
                </td>
            </tr>

            <tr class="item">
                <td>
                    Hosting (3 months)
                </td>

                <td>
                    $75.00
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Domain name (1 year)
                </td>

                <td>
                    $10.00
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                    Total: $385.00
                </td>
            </tr>
        </table>
    </div>
@endsection