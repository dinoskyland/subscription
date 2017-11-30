@extends('layouts.app')

@section('content')
  <div class="hero-body">
    <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
            <h3 class="title has-text-grey">Register</h3>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field">
                    <div class="control">
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    @if ($errors->has('name'))
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                
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
                        <input class="input" type="password" placeholder="Confirmation password" name="password_confirmation" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button" type="submit" >Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

@endsection
