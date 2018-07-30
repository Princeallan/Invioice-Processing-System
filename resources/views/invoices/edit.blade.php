@extends('layouts.vendor')

@section('content')

    <editinvoice inline-template>
        <div id="editinvoice">
            <div class="row columns small-8">
                <h3>Create an Invoice</h3>
                <a class="button primary" href="/invoices">Invoices</a>
            </div>
            <form action="{{route('invoices.update',[$invoice->id]) }}" method="post">
                @csrf {{ method_field('PATCH') }}
            <div class="row columns small-8">
                <input type="number" min="0" name="invoice_no" value="{{ $invoices->invoice_no }}" placeholder="Invoice No.">
            </div>
            <div class="row columns small-8">
                <label>Company
                    <select name="client_id">
                        @foreach($clients as $client)
                            <option value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach

                    </select>
                </label>
            </div>

            <div class="row columns small-8">
                <label for="due_date"> Due Date</label>
                <input type="date" name="due_date" value="{{ $invoices->due_date }}" placeholder="Enter Company Phone No." required>
            </div>
            <div class="row columns small-8">
                <select name="product_id">
                    <option value=""> Product</option>

                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="row columns small-8">
                <input type="text" class="table-control" name="unit_price" value="{{ $invoices->unit_price }}" placeholder="Price">
            </div>
            <div class="row columns small-8">
                <input type="text" class="table-control" name="qantity" value="{{ $invoices->quantity }}" placeholder="Quantity">
            </div>
            <div class="row columns small-8">
                <p>Total: @{{invoice.total}}</p>
            </div>
            <div class="row columns small-8">
                <input type="text" v-model="invoice.discount" placeholder="Discount">
            </div>
            <div class="row columns small-8">
                <p>Grand Total: @{{invoice.grand_total}}</p>
            </div>
            <div class="row columns small-8">
                <button type="submit" class="success button pull-right">
                    Submit
                </button>
            </div>
            </form>
        </div>
    </editinvoice>



@endsection
