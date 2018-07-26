@extends('layouts.master')

@section('content')

    <a class="button primary" href="/register">Add User</a>
    <table class="hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
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


