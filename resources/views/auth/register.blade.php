@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 80px;">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Register</div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="/auth/register">
          {!! csrf_field() !!}

          <div class="form-group">
            <label class="control-label col-md-4" for="name">Name</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-4" for="name">Email</label>
            <div class="col-md-8">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-4" for="password">Password</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password" id="password">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-4" for="password">Confirm Password</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password_confirmation">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-default">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <p class="text-center">
      Already have an account? <a class="btn btn-default btn-xs" href="{{ url('auth/login') }}">Log In</a>
    </p>

  </div>
</div>
@stop