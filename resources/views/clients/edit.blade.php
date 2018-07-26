@extends('layouts.master')

@section('content')

    <div>
        <form action="{{route('clients.update',[$clients->id]) }}" method="post">
            @csrf {{ method_field('PATCH') }}
            <div class="row columns small-8">
                <input type="text" name="name" placeholder="Company Name" value="{{ $clients->name }}" required>
            </div>
            <div class="row columns small-8">
                <input type="text" name="address" value="{{ $clients->address }}"
                       placeholder="Company Postal Address..." required>
            </div>
            <div class="row columns small-8">
                <input type="number" min="0" name="phone_no" value="{{ $clients->phone_no }}"
                       placeholder="Enter Company Phone No." required>
            </div>
            <div class="row columns small-8">
                <input type="number" min="0" name="postal_code" value="{{ $clients->postal_code }}"
                       placeholder="Enter the postal Code" required>
            </div>
            <div class="row columns small-8">
                <input type="text" name="city" value="{{ $clients->city }}" placeholder="City" required>
            </div>
            <div class="row columns small-8">
                <input type="text" name="country" value="{{ $clients->country }}" placeholder="Country" required>
            </div>
            <div class="row columns small-8">
                <button type="submit" class="success button pull-right">
                    Submit
                </button>
            </div>
        </form>
    </div>

@endsection
