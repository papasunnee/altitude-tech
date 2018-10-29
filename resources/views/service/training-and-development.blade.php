@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/web-development.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="background: -webkit-linear-gradient(#1771A3, #26323E);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Training and Development</h2>
                </div>
            </div>
            <div class="row text-left">
            <div class="col-md-8 col-xs-12">
                <p class="text-muted">
                    Living in the digital world, a website is now a necessity for a business, big or small. If you have a business and don’t have a website, you are probably losing a number of great opportunities for your business. A website itself can be used to accomplish many different marketing strategies to help your business grow. The web has a far wider reach than any other form of advertising. 
                </p>
                <p class="text-muted">
                    We develop stunning customized websites for your company`s online presence. Through it, we advertise your business around the Web on social networking sites, forums and other means.
                </p>
                @include('includes.request')
            </div>
            <div class="col-md-4 d-md-block">
                <services-component><services-component/>
                <br/><br/>
                <about-altitude-link><about-altitude-link/>

            </div>
            </div>
        </div>
    </section>
        
</div>
@endsection
