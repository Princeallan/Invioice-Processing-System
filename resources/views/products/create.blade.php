@extends('layouts.master')

@section('content')

    <div class="form-group">
        <a class="button primary" href="{{route('products')}}">View Products Listing</a>
    </div>

    <create-product></create-product>


@endsection
