@extends('layouts.vendor')

@section('content')

    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
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
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                Acme Corp.<br>
                                John Doe<br>
                                john@example.com
                            </td>
                            <td style="float: right;">
                                {{$invoice->client->name}}<br>
                                {{$invoice->client->phone_no}} <br>
                                {{$invoice->client->city}} {{$invoice->client->postal_code}} <br>
                                {{$invoice->client->country}}<br>
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
                    Quantity
                </td>
                <td>
                    #Total
                </td>
            </tr>
            @forelse($invoice as $item)
                <tr class="item">
                    <td>
                        {{--{{  $invoice->product->name }}--}}
                        office chair
                    </td>
                    <td>{{ $invoice->quantity }}</td>
                    <td>
                        {{ $invoice->total }}
                    </td>
                </tr>
                @empty

            @endforelse

            <tr class="total">
                <td></td>
                <td>
                    Discount: $
                </td>
                <td>
                     {{ $invoice->discount }}
                </td>
            </tr>

            <tr class="total">
                <td></td>
                <td>
                    Grand Total: $
                </td>
                <td>
                     {{ $invoice->grand_total }}
                </td>
            </tr>
        </table>
    </div>
@endsection