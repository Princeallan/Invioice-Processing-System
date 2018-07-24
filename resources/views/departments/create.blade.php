@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-2 medium-5">
                    <div class="form-group">
                        <a class="button primary" href="{{route('view.departments')}}">View Departments</a>
                    </div>

                    <create-department></create-department>

                </div>
            </div>
        </div>
    </div>


@endsection
