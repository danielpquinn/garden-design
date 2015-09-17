@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 80px;">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Reset Password</div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="/password/email">
          {!! csrf_field() !!}

          <div class="form-group">
            <label class="control-label col-md-4" for="name">Email</label>
            <div class="col-md-8">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 text-right">
              <button type="submit" class="btn">Send Password Reset Link</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop