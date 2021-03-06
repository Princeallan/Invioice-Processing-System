@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class=" medium-6">

                </div>
                <div class=" medium-6">
            <form class="login-form" method="POST" action="{{ route('login') }}">

                {{ csrf_field() }}

                <div class="email">
                    <label for="email">Email:</label>

                    <input class="form-input" id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-text" id="emailHelpText">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="password">
                    <label for="password">Password</label>

                    <input class="form-input" id="password" type="password" name="password" aria-describedby="passwordHelpText" required>

                    @if ($errors->has('password'))
                        <span class="help-text" id="passwordHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

                <div class="button-plus-link">
                    <button type="submit" class="button success">
                        Sign In
                    </button>

                    <a href="{{ route('password.request') }}">
                        &nbsp;
                        Forgot Your Password?
                    </a>
                </div>
            </form>

                </div></div>

    </div>

</div>
@endsection
