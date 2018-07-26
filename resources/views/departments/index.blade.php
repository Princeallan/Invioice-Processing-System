@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-1 medium-10" >
                    <div class="form-group">
                        <a class="button primary" href="{{route('create.department')}}">Add Department</a>
                    </div>

                    <departments ><slot></slot></departments>

                </div>
            </div>
        </div>
    </div>


@endsection
