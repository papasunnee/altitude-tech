@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/software-development.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="background: -webkit-linear-gradient(#1771A3, #26323E);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Software Development</h2>
                </div>
            </div>
            <div class="row text-left">
            <div class="col-md-8 col-xs-12">
                <p class="text-muted">
                    Software assists in elimination of human errors therefore allowing effectiveness and consistency. Its use is important for completing business tasks and reporting the organization’s activities. It increases efficiency and effectiveness of the company’s activities. Moreover, it helps in performing the business activities in shorter period of time that reduces the work load.
                </p>
                <p class="text-muted">
                    At Altitude Technology Worldwide we develop and maintain softwares that makes our clients business/organization more efficient. 
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
