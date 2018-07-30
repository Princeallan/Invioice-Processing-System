@extends('layouts.vendor')

@section('content')

    <createinvoice inline-template>
        <div id="invoice">
            <div class="row columns small-8">
                <h3>Create an Invoice</h3>
                <a class="button primary" href="/invoices">Invoices</a>
            </div>


            <div class="row columns small-8">
                <input type="number" min="0" v-model="invoice.invoice_no" placeholder="Invoice No.">
            </div>
            <div class="row columns small-8">
                <label>Company
                    <select v-model="invoice.client_id">
                        <option value="">Choose the Company</option>

                        @foreach($clients as $client)
                            <option value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach

                    </select>
                </label>
            </div>

            <div class="row columns small-8">
                <label for="due_date"> Due Date</label>
                <input type="date" v-model="invoice.due_date" placeholder="Enter Company Phone No." required>
            </div>
            <div class="row columns small-8">
                <select v-model="invoice.product_id">
                    <option value=""> Product</option>

                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="row columns small-8">
                <input type="text" class="table-control" v-model="invoice.unit_price" placeholder="Price">
            </div>
            <div class="row columns small-8">
                <input type="text" class="table-control" v-model="invoice.quantity" placeholder="Quantity">
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
                <button type="submit" class="success button pull-right" @click="addInvoices">
                    Submit
                </button>
            </div>
        </div>
    </createinvoice>



@endsection
