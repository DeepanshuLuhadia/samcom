@extends('layouts.loginapp')
@section('content')

    <div class="site-container">
      <div class="mt-5 mb-5">
        <div class="container">
          <div class="form-container">
            <h4 class="mb-4">Please log in below using your credentials</h4>
            <div class="form-box">
              <h4 class="mb-4">Log in</h4>
              @isset($url)
              <form method="POST" action='{{ url("$url/login") }}' class="formSubmit" aria-label="{{ __('Login') }}">
              @else
              <form method="POST" action="{{ route('login') }}" class="formSubmit" aria-label="{{ __('Login') }}">
              @endisset
                @csrf
              <div class="input-box-ui">
                <div class="form-group">
                <input id="email" type="email" class="form-control input-full {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group">
                  <input id="password" type="password" class="form-control input-full {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="form-box-content mt-3">
                <div class="rem-forgot d-flex">
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" >
                      <label class="custom-control-label " for="remember">Remember Me</label>
                  </div>
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-blue w-25 subbtn">Login</button>
                </div>
                 @isset($url)
                 @else

              <div class="form-box-content mt-3">
                <div class="sigup-text text-center mt-4 mb-4">
                    <p class="font-rs" style="color: black;">Don’t have an account? 
                    <a href="{{route('register')}}" class="">Sign up</a></p>
                </div>
              </div>
              @endisset
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
if ($(".formSubmit").length > 0) {
  $(".formSubmit").validate({
    rules: {
      email: {
      required: true,
      email: true,
      validate_email: true,
      },
      password:{
        required:true,
      },
    },
    messages: {
      email: {
       required: "Please enter email ",

      },
      password: {
        required: "Please enter password",
      },
    },
    submitHandler: function(form) {
      $('.subbtn').prop('disabled', true);
      form.submit();
    }
  })
} 
</script>
@endsection
 