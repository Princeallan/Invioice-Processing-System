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
                <th>Inv No.</th>
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
                        <td><a href="{{ route('invoices.show', ['id' => $invoice->id]) }}">{{ $invoice->invoice_no }}</a></td>
                        <td></td>
                        <td>${{ $invoice->grand_total }}</td>
                        <td>{{ $invoice->created_at->diffForHumans() }}</td>
                        <td>{{ $invoice->due_date }}</td>
                        <td class="text-right">
                            <a href="{{route('invoices.edit', $invoice)}}"><i class="fa fa-edit"></i></a>
                            <form class="form-inline" method="post"
                                  action="{{route('invoices.destroy', $invoice)}}"
                                  onsubmit="return confirm('Are you sure?')"
                            >
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"><i class="fa fa-trash"></i>
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
