@extends('layouts.user')
@section('content')
    <!-- Header-->
    <header data-background="/img/7.jpg" class="intro intro-fullscreen">
      <!-- Intro Header-->
      <div class="intro-body">

        <!-- Login-->
        <h2>Sign in</h2>

<div class="row row fadeIn">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-signin">
                <div class="panel-group">
                    {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-1 control-label sr-only']) !!}
                        <div class="col-md-10">
                            {!! Form::email('email', null, ['placeholder'=>'Email address','class'=>'form-control']) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'Password', ['class'=>'col-md-1 control-label sr-only']) !!}
                        <div class="col-md-10">
                            {!! Form::password('password', ['placeholder'=>'Password','class'=>'form-control']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('remember')!!} Ingat saya
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-lg btn-universal btn-block">Sign in</button>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa password</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
      </div>
    </header>
 @endsection