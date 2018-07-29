@extends('layouts.master')

@section('content')

    <a class="button primary" href="{{route('clients.create')}}">Add Company</a>
    <table class="hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Company Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>P. code</th>
            <th>City</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if($clients)
            @foreach($clients as $client)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->phone_no}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->postal_code}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->country}}</td>
                    <td>

                        <a href="{{ url('$clients/'.$client->id.'/edit') }}" class="warning button"><i class="fa fa-edit"></i></a>
                        {!!Form::open(['action'=>['ClientsController@destroy', $client->id], 'method' => 'POST', 'class'=>'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{FORM::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'alert button'])}}
                        {!!Form::close()!!}

                    </td>
                </tr>
            @endforeach

        @else
            No Company profile at the moment

        @endif
        </tbody>

    </table>

@endsection


