@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-10" >
                    <div class="form-group">
                        <a class="button primary" href="{{route('products.create')}}">Add Product</a>
                    </div>

                    <products><slot></slot></products>

                </div>
            </div>
        </div>
    </div>

@endsection
