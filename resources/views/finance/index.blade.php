@extends('layouts.master')

@section('content')

    <h3>Departmental Approvals</h3>
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

            @forelse($invoices as $invoice)
                <tr>
                    <td><a href="{{ route('invoices.show', ['id' => $invoice->id]) }}">{{ $invoice->invoice_no }}</a></td>
                    <td></td>
                    <td>${{ $invoice->grand_total }}</td>
                    <td>{{ $invoice->created_at->diffForHumans() }}</td>
                    <td>{{ $invoice->due_date }}</td>
                    <td class="text-right">
                        <form action="{{url('/toggle-approve')}}" method="POST">
                            {{csrf_field()}}
                            <input <?php if($invoice->approve == 2){echo "checked";}?>  type="checkbox" name='approve'>

                            <input type="hidden" name="invoiceId" value="{{$invoice->id}}">
                            <input class="primary button" type="submit" value="Approve">

                        </form>
                    </td>
                </tr>
            @empty
                {!! $invoices->render() !!}

                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No Invoices were created.
                    </p>
                </div>

            @endforelse
            </tbody>
        </table>

    </div>

@endsection
