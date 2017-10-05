<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('honda-xxl.png')}}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Honda Pasteur
    </title>
    <!-- Bootstrap Core CSS-->
    <link href="{{asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    
    <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="{{asset('/frontend/css/universal.css')}}" rel="stylesheet">
  </head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Navigation One Page-->
    <nav class="navbar navbar-universal navbar-custom navbar-fixed-top navbar-onepage">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><a href="{{ url('/') }}" class="navbar-brand page-scroll">
            <!-- Text or Image logo--><img src="/img/" alt="Honda Pasteur" class="logodrak">{{-- <img src="img/logodark.png" alt="Honda Pasteur" class="logodark"> --}}</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling-->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section-->
            <li class="hidden"><a href="#page-top"></a></li>
            <li class="dropdown">
            <a>Model<i class="fa fa-chevron-down fa-fw"></i></a>
            <ul class="dropdown-menu">
              @foreach($modell as $data)       
              <li>
                <a href="{{route('showperkategori', $data->id)}}">{!! $data->nama_model !!}</a></li>
                @endforeach
              </ul>
            </li>
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#services" class="page-scroll">Services</a></li>
            <li><a href="#news" class="page-scroll">News</a></li>
            <li><a href="#portfolio" class="page-scroll">Works</a></li>
            <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
             
          </ul>
        </div>
      </div>
    </nav>
    

    <script src="{{asset('/frontend/js/jquery-1.12.4.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Plugin JavaScript-->
    <script src="{{asset('/frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/frontend/js/device.min.js')}}"></script>
    <script src="{{asset('/frontend/js/form.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.parallax.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.swipebox.min.js')}}"></script>
    <script src="{{asset('/frontend/js/smoothscroll.min.js')}}"></script>
    <script src="{{asset('/frontend/js/wow.min.js')}}"></script>
        <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3E86i8mx1BZDlAaLcknh_mWl4F70i4os"></script>
        <script src="{{asset('/frontend/js/map.js')}}"></script>
        <!-- Custom Theme JavaScript-->
    <script src="{{asset('/frontend/js/universal.js')}}"></script>

    <!-- Background Slider-->
     <script src="{{asset('/frontend/js/vegas/vegas.min.js')}}"></script>
    @yield('carousel')
     
     @yield('script')
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('content')
</body>