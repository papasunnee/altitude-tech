@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/client.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading" style="background-color:#CA3229">Clients</h2>
                </div>
            </div>
            <div class="row text-left">
            <div class="col-md-8 col-xs-12">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="col-md-4 d-md-block">
                <services-component><services-component/>
                    <br/><br/>
                    <about-altitude-link><about-altitude-link/>
                    <br/><br/>
                    
                    @include('includes.request')
            </div>
            <div class="col-md-12">
                    @include('includes.clientslider') ;
            </div>
            </div>
        </div>
    </section>
        
</div>
@endsection
