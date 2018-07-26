@extends('layouts.master')

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th>
                #INV NO
            </th>
            <th>
                Client
            </th>
            <th>
                Product
            </th>
            <th>
                Paid
            </th>
            <th>
                Bill date
            </th>
            <th>
                Due
            </th>
            <th>
                Total
            </th>
            <th>
                status
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <td>
                    {{ $invoice->invoice_no }}
                </td>
                <td>
                    {{ $invoice->user->name }}
                </td>
                <td>
                    {{ $invoice->product->name }}
                </td>
                <td>
                    @if($invoice->isPaid())
                        <i class="fa fa-check text-success"></i>
                    @else
                        <i class="fa fa-times text-danger"></i>
                    @endif
                </td>
                <td>
                    {{ $invoice->created_at }}
                </td>
                <td>
                    @if($invoice->due_at->timestamp > 0)
                        {{ $invoice->due_at->format('F d, Y') }}
                    @else
                        No Due Date
                    @endif
                </td>

                <td>
                    <a href="{{ route('invoice.payments.listing', $invoice) }}">
                        ${{ $invoice->getCurrencyFormat($invoice->amount) }}
                    </a>
                </td>
                <td>
                    ${{ $invoice->getCurrencyFormat($invoice->amountOwing()) }}
                </td>
                <td>
                    @if($invoice->payments()->count() > 0)
                        {{ $invoice->payments()->orderBy('created_at', 'desc')->first()->created_at->format('F d, Y') }}
                    @else
                        No Payment Recorded
                    @endif
                </td>
                <td class="td-actions text-right">
                    <a href="{{ route('invoice.payments.create', $invoice) }}" class="btn btn-success btn-simple btn-sm">
                        <i class="ti-plus"></i> Payment
                    </a>
                    <a href="{{ route('project.edit', $invoice) }}" class="btn btn-success btn-simple btn-sm">
                        <i class="ti-pencil-alt"></i> Edit
                    </a>
                    <a href="{{ route('project.destroy', $invoice) }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-simple btn-sm">
                        <i class="ti-close"></i> Remove
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
