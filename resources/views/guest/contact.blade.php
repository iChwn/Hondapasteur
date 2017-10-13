@extends('layouts.user')
@section('content')
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">


        <h4>Booking Service</h4>
        <p>Have any question or feedback?</p>

        @if(Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif

        <form action="" method="post">

          {{ csrf_field() }}

          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" placeholder="you name" />

          <label for="email">Email</label>
          <input class="form-control" type="email" name="email" placeholder="you email address" />

          <label for="nomer">Nomer Telepon</label>
          <input type="number" name="nomer" class="form-control" placeholder="Nomer Telepone" />

          <label for="polisi">Nomer Polisi</label>
          <input type="text" name="polisi" class="form-control" placeholder="Nomer Polisi" />

          <label for="model">Model Kendaraan</label>
          <input type="text" name="model" class="form-control" placeholder="Model Mobil" />


          <label for="message">Keluhan Pada Kendaraan</label>
          <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>

          <br><br>
          
          
          <div class="col-md-1">
            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
            <div class="col-md-offset-4 col-md-6">
              {!! app('captcha')->display() !!}
              {!! $errors->first('g-recaptcha-response', '<p class="help-block">:message</p>') !!}
            </div>
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