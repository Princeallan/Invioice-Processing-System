@extends('layouts.master')

@section('content')

    <div>
        <form action="{{route('clients.store')}}" method="post">
            @csrf
            <div class="row columns small-8">
            <h3>Add new Client</h3><a class="button primary" href="{{route('clients.index')}}">Add Department</a>
            </div>
            <div class="row columns small-8">
                <input type="text" name="name" placeholder="Company Name" required>
            </div>
            <div class="row columns small-8">
                <input type="text" name="address" placeholder="Company Postal Address..." required>
            </div>
            <div class="row columns small-8">
                <input type="number" min="0" name="phone_no" placeholder="Enter Company Phone No." required>
            </div>
            <div class="row columns small-8">
                <input type="number" min="0" name="postal_code" placeholder="Enter the postal Code" required>
            </div>
            <div class="row columns small-8">
                <input type="text" name="city" placeholder="City" required>
            </div>
            <div class="row columns small-8">
                <input type="text" name="country" placeholder="Country" required>
            </div>
            <div class="row columns small-8">
            <button type="submit" class="success button pull-right">
                Submit
            </button>
            </div>
        </form>
    </div>

@endsection
