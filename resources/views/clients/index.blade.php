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
                        <button type="submit" class="warning button"><i class="fa fa-edit"></i></button>

                        <button type="submit" class="alert button"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach

        @else
            No Company profile at the moment

        @endif
        </tbody>

    </table>

@endsection


