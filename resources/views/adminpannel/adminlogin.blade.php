@extends('adminpannel.login_master')
@section('admin_login')
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Blog Admin</b>&nbsp;&nbsp;<i class="fa fa-users" aria-hidden="true"></i></a>
      <br>
      <h4>Admin Area</h4>
      <hr>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="width: auto;">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ url('MobileinPakistanAdminLogin') }}" method="post">
          @csrf
        <div class="form-group has-feedback">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="email" name="email" class="form-control" placeholder="Email">
         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         @error('email')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      
        <!-- /.col -->
      </div>
    </form>

    

    


  </div>
  <!-- /.login-box-body -->
</div>
@endsection