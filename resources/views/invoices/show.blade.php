@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Invoice</span>
                <div class="pull-right">
                    <a href="{{route('invoices.index')}}" class="btn btn-default">Back</a>
                    <a href="{{route('invoices.edit', $invoice)}}" class="btn btn-primary">Edit</a>
                    <form class="form-inline" method="post"
                          action="{{route('invoices.destroy', $invoice)}}"
                          onsubmit="return confirm('Are you sure?')"
                    >
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Invoice No.</label>
                        <p>{{$invoice->invoice_no}}</p>
                    </div>
                    <div class="form-group">
                        <label>Grand Total</label>
                        <p>${{$invoice->grand_total}}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Client</label>
                        <p>{{$invoice->client}}</p>
                    </div>
                    <div class="form-group">
                        <label>Client Address</label>
                        <pre class="pre">{{$invoice->client_address}}</pre>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Title</label>
                        <p>{{$invoice->title}}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Invoice Date</label>
                            <p>{{$invoice->invoice_date}}</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Due Date</label>
                            <p>{{$invoice->due_date}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($invoice->products as $product)
                    <tr>
                        <td class="table-name">{{$product->name}}</td>
                        <td class="table-price">${{$product->price}}</td>
                        <td class="table-qty">{{$product->qty}}</td>
                        <td class="table-total text-right">${{$product->qty * $product->price}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td class="table-empty" colspan="2"></td>
                    <td class="table-label">Sub Total</td>
                    <td class="table-amount">${{$invoice->sub_total}}</td>
                </tr>
                <tr>
                    <td class="table-empty" colspan="2"></td>
                    <td class="table-label">Discount</td>
                    <td class="table-amount">${{$invoice->discount}}</td>
                </tr>
                <tr>
                    <td class="table-empty" colspan="2"></td>
                    <td class="table-label">Grand Total</td>
                    <td class="table-amount">${{$invoice->grand_total}}</td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection


{{--@extends('layouts.master')--}}

{{--@section('content')--}}

    {{--<div class="invoice-box">--}}
        {{--<table cellpadding="0" cellspacing="0">--}}
            {{--<tr class="top">--}}
                {{--<td colspan="2">--}}
                    {{--<table>--}}
                        {{--<tr>--}}
                            {{--<td class="title">--}}
                                {{--<img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">--}}
                            {{--</td>--}}

                            {{--<td>--}}
                                {{--Invoice #: 123<br>--}}
                                {{--Created: January 1, 2015<br>--}}
                                {{--Due: February 1, 2015--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="information">--}}
                {{--<td colspan="2">--}}
                    {{--<table>--}}
                        {{--<tr>--}}
                            {{--<td>--}}
                                {{--Sparksuite, Inc.<br>--}}
                                {{--12345 Sunny Road<br>--}}
                                {{--Sunnyville, CA 12345--}}
                            {{--</td>--}}

                            {{--<td>--}}
                                {{--Acme Corp.<br>--}}
                                {{--John Doe<br>--}}
                                {{--john@example.com--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="heading">--}}
                {{--<td>--}}
                    {{--Payment Method--}}
                {{--</td>--}}

                {{--<td>--}}
                    {{--Check #--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="details">--}}
                {{--<td>--}}
                    {{--Check--}}
                {{--</td>--}}

                {{--<td>--}}
                    {{--1000--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="heading">--}}
                {{--<td>--}}
                    {{--Item--}}
                {{--</td>--}}

                {{--<td>--}}
                    {{--Price--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="item">--}}
                {{--<td>--}}
                    {{--Website design--}}
                {{--</td>--}}

                {{--<td>--}}
                    {{--$300.00--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="item">--}}
                {{--<td>--}}
                    {{--Hosting (3 months)--}}
                {{--</td>--}}

                {{--<td>--}}
                    {{--$75.00--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="item last">--}}
                {{--<td>--}}
                    {{--Domain name (1 year)--}}
                {{--</td>--}}

                {{--<td>--}}
                    {{--$10.00--}}
                {{--</td>--}}
            {{--</tr>--}}

            {{--<tr class="total">--}}
                {{--<td></td>--}}

                {{--<td>--}}
                    {{--Total: $385.00--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--</table>--}}
    {{--</div>--}}
{{--@endsection--}}