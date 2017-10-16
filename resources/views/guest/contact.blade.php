@extends('layouts.user')
@section('content')
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <img src="logo.png" class="col-md-6">
        <h4>Booking Service</h4>
        @if(Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif

        <form action="" method="post">

          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name', ['class'=>'col-md-2 control-label']) !!}
            <div class="col-md-13">
              {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nama', 'min'=>1]) !!}
              {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email', 'Email', ['class'=>'col-md-2 control-label']) !!}
            <div class="col-md-13">
              {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'E-mail', 'min'=>1]) !!}
              {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
          </div>

          <div class="form-group{{ $errors->has('nomer') ? ' has-error' : '' }}">
            {!! Form::label('nomer', 'N.Telepone', ['class'=>'col-md-2 control-label']) !!}
            <div class="col-md-15">
              {!! Form::number('nomer', null, ['class'=>'form-control','placeholder'=>'Nomor Telepone', 'min'=>1]) !!}
              {!! $errors->first('nomer', '<p class="help-block">:message</p>') !!}
            </div>
          </div>

          <div class="form-group{{ $errors->has('polisi') ? ' has-error' : '' }}">
            {!! Form::label('polisi', 'N.Polisi', ['class'=>'col-md-2 control-label']) !!}
            <div class="col-md-13">
              {!! Form::text('polisi', null, ['class'=>'form-control','placeholder'=>'Nomer Polisi', 'min'=>1]) !!}
              {!! $errors->first('polisi', '<p class="help-block">:message</p>') !!}
            </div>
          </div>

          <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
            {!! Form::label('model', 'Model', ['class'=>'col-md-2 control-label']) !!}
            <div class="col-md-13">
              {!! Form::text('model', null, ['class'=>'form-control','placeholder'=>'Model Mobil', 'min'=>1]) !!}
              {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
            </div>
          </div>

          <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
            {!! Form::label('message', 'Keluhan', ['class'=>'col-md-2 control-label']) !!}
            <div class="col-md-13">
              {!! Form::textarea('message', null, ['class'=>'form-control','placeholder'=>'Keluhan Pada Kendaraan', 'min'=>1]) !!}
              {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
            </div>
          </div>

          <br><br>
          
          
          
          <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
            <div class="col-md-offset-1">
              {!! app('captcha')->display() !!}
              {!! $errors->first('g-recaptcha-response', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
          
          <p>

            <button class="btn btn-success btn-block">Send</button>
            <form>
            </div>
          </div>
        </div>

      </body>
      @endsection