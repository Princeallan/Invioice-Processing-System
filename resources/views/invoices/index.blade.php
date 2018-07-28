@extends('layouts.master')

@section('content')

            <div class="clearfix">
                <span class="panel-title">Invoices</span>
                <a href="{{route('invoices.create')}}" class="btn btn-success pull-right">Create</a>
            </div>

        <div class="panel-body">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Invoice No.</th>
                        <th>Client</th>
                        <th>Grand Total</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($invoices)

                    @foreach($invoices as $invoice)
                        <tr>
                            <td>{{$invoice->invoice_no}}</td>
                            <td>{{$invoice->client}}</td>
                            <td>${{$invoice->grand_total}}</td>
                            <td>{{$invoice->created_at->diffForHumans()}}</td>
                            <td>{{$invoice->due_date}}</td>
                            <td class="text-right">
                                <a href="{{route('invoices.show', $invoice)}}" class="btn btn-default btn-sm">View</a>
                                <a href="{{route('invoices.edit', $invoice)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form class="form-inline" method="post"
                                      action="{{route('invoices.destroy', $invoice)}}"
                                      onsubmit="return confirm('Are you sure?')"
                                >
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    </tbody>
                </table>
                {!! $invoices->render() !!}

                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No Invoices were created.
                        <a href="{{route('invoices.create')}}">Create Now!</a>
                    </p>
                </div>
            @endif
        </div>

@endsection
