

 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

 <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/animate.css')}}">

 <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

 <link rel="stylesheet" href="{{asset('css/aos.css')}}">

 <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

 <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
 <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


 <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
 <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
 <link rel="stylesheet" href="{{asset('css/style.css')}}">


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html" class="flaticon-auction"></span>PrimeLaw</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{url('/home1')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="practice.html" class="nav-link">Practice Areas</a></li>
            <li class="nav-item"><a href="attorney.html" class="nav-link">Attorneys</a></li>
            <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Case Studies</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

            @if (Route::has('login'))

                    @auth
                  <li class="nav-item">      <a href="{{ url('/home') }}" class="nav-link">Home</a></li>
                    @else
                  <li class="nav-item">      <a href="{{ route('login') }}" class="nav-link">Login</a></li>

                        @if (Route::has('register'))
                 <li class="nav-item">     <a href="{{ route('register') }}" class="nav-link">Register</a><li>
                        @endif
                    @endauth

            @endif


        </ul>
      </div>
    </div>
  </nav>
</head>
