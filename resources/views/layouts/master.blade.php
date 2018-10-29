<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}/" type="image/x-icon">

    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/agency.css')}}" rel="stylesheet">

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
    <div id="app">
        <div id="page-top">
        <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container-fluid">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('img/altitudelogo.png')}}" width="200px" /><!--<span class="text-danger">ALTITUDE</span> TECHNOLOGY--></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/" style="color: #22A7F0;">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('about')}}" style="color: #5eb448;">About</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" style="color: #fca13f;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="dropdown-item-header">Training</a>
                                    <a class="dropdown-item" href="{{route('digital-literacy')}}">Digital Literacy</a>
                                    <a class="dropdown-item" href="{{route('web-development')}}">Website Development</a>
                                <a class="dropdown-item" href="{{route('programming')}}">Programing</a>
                                <a class="dropdown-item" href="{{route('networking')}}">Networking</a>
                                </div>
                                <div class="col-md-4">
                                        <a class="dropdown-item-header">Solution</a>
                                        <a class="dropdown-item" href="{{route('app-development')}}">Application Development</a>
                                        <a class="dropdown-item" href="{{route('networking-services')}}">Computer Networking Services</a>
                                </div>
                                <div class="col-md-4">
                                        <a class="dropdown-item-header">Consultancy</a>
                                        <a class="dropdown-item" href="{{route('strategic-consulting')}}">Strategy & Consulting</a>
                                        <a class="dropdown-item" href="{{route('branding-and-logo')}}">Branding &amp; Logo</a>
                                        <a class="dropdown-item" href="{{route('digital-marketing')}}">Digital Marketing</a>
                                </div>
                            </div>
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('clients')}}" style="color: #dc4937;">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('careers.index')}}" style="color: #fff;">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('news-and-events')}}" style="color: #487bb4;">News & Events</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact" style="color: #3cbc86;">Contact</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            
            <div class="clearfix"></div>

            <main class="py-5">
                @yield('content')
            </main>

            <!-- Contact -->
            <section id="contact">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase" style="background-color:transparent; margin-bottom:5px">Contact Us</h2>
                        <h3 class="section-subheading" style="color: #b2b2b2; font-size:20px;">No. 22, Kumasi Crescent, Wuse II, Abuja. <br><small>info@altitude-tech.com</small> <br><small>+234 705 9807 187</small></h3>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm" method="POST" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                            <div class="g-recaptcha" data-sitekey="6LdJMlAUAAAAAGLuPRI3vyrKu-c2NsV4u7bj0I66"></div>
                            </div>  
                            <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; 2018 Altitude Technology.</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                            <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                            <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                            <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="{{route('privacy-policy')}}">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{route('terms-of-use')}}">Terms of Use</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    // var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    // (function(){
    // var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    // s1.async=true;
    // s1.src='https://embed.tawk.to/5abff0ffd7591465c7091646/default';
    // s1.charset='UTF-8';
    // s1.setAttribute('crossorigin','*');
    // s0.parentNode.insertBefore(s1,s0);
    // })();
    </script>
    <!--End of Tawk.to Script-->


    <!-- Bootstrap core JavaScript -->
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="{{asset('js/clientcarousel.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/agency.min.js')}}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b72db12ce7d9d62"></script>





</body>
</html>
