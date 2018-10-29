@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/app-development.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Applications Development</h2>
                </div>
            </div>
            <div class="row text-left">
            <div class="col-md-8 col-xs-12">
                <p class="text-muted">
                    Apps are becoming the dominant form of digital interaction. The customers in today's world are on the move and they're using mobile application platforms to get there. Whether they use mobile phones, tablets or other smart mobile devices - they have all the information they need. That's why mobile apps are so much important in today's business environment.
                </p>
                <p class="text-muted">
                    No matter what your business is, we develop scaleble mobile app that can help you get and retain customers. We create apps that reinforces your brand, enhance your visibility and increase accessibilityall know that the first place customers go to search for a product or service is online.
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
