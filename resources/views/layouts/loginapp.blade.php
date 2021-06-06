<html>
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'SamCom') }}</title>

        <!--responsive-meta-here-->
        <meta name="viewport" content="minimum-scale=1.0, maximum-scale=1.0,width=device-width, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!--responsive-meta-end-->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet"/>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
          <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
        @toastr_css
          
    
    </head>
    <body class="bg-blue">
      <div class="wraper">  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="brand-center">
              <a class="navbar-brand" href="">SAMCOM</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <?php if(Auth::user() && (Auth::user()['email_verification']==1)){ ?>
                <li class="nav-item">
                  <a class="nav-link" href="#"  onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                      <img src="{{asset('frontend/images/exit.png')}}" width="34" height="34">
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </nav>
<style type="text/css">
  .error,span.invalid-feedback{
    color: red;
    padding-left: 40px;
    display: block;
  }
</style>
       

            <main class="py-4">
                @yield('content')
            </main>
        </div>
     
    </body>

    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript">
            jQuery.validator.addMethod("validate_email", function(value, element) {
          if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
              return true;
          } else {
              return false;
          }
      }, "Please enter a valid email address.");

     
    </script>
    @toastr_js
    @toastr_render
       
</html>


