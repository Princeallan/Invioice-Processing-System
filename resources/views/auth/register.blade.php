@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">

            <div class="form-container small-6 small-centered columns">

                <div class="form-group">
                    <a class="button primary" href="/users">View Users</a>
                </div>

                <div class="form-title text-center">
                    <h4> Add new User </h4>
                </div>

                <form class="register-form" method="POST" action="{{ route('register') }}">

                    {{ csrf_field() }}

                    <div class="name">
                        <label for="email">Name</label>

                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                               aria-describedby="nameHelpText" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="username">
                        <label for="username">Username</label>

                        <input id="username" type="text" class="form-control" name="username"
                               value="{{ old('username') }}" aria-describedby="nameHelpText" required>

                        @if ($errors->has('username'))
                            <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="email">
                        <label for="email">E-Mail Address</label>

                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                               aria-describedby="emailHelpText" required>

                        @if ($errors->has('email'))
                            <span class="help-text" id="emailHelpText">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="department_id">
                        <label>Department
                            <select>

                                <option value="">Choose the Department</option>

                            @foreach($departments as $department)

                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </label>
                        @if ($errors->has('department_id'))
                            <span class="help-text" id="emailHelpText">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="client_id">
                        <label>Company
                            <select>
                                <option value="">Choose the Company</option>

                            @foreach($clients as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach

                            </select>
                        </label>
                        @if ($errors->has('client_id'))
                            <span class="help-text" id="emailHelpText">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="password">
                        <label for="password">Password</label>

                        <input id="password" type="password" value="123456" name="password" aria-describedby="passwordHelpText"
                               required readonly>

                        @if ($errors->has('password'))
                            <span class="help-text" id="passwordHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="password-confirm">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" name="password_confirmation" value="123456" required readonly>
                    </div>

                    <div class="register_button">
                        <button type="submit" class="button">
                            Register
                        </button>
                    </div>


                </form>

            </div>

        </div>

    </div>

@endsection
