@extends('layouts.dashboard')


{{-- Content --}}
@section('section')
    <div class="row">
        <div class="page-header">
            <h2>Login</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            {!! Form::open(array('url' => URL::to('auth/login'), 'method' => 'post', 'files'=> true)) !!}
            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', "E-Mail Address", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-2">
                    <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                        Login
                    </button>

                    <a href="{{ URL::to('/password/email') }}">Forgot Your Password?</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>
@endsection
