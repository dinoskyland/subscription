@extends('layouts.app')

@section('content')
  <div class="hero-body">
    <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
            <h3 class="title has-text-grey">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="field">
                    <div class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    </div>
                    @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" name="password" value="{{ old('password') }}" required>
                    </div>
                    @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember me
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button" type="submit" >Login</button>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <a href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

@endsection
