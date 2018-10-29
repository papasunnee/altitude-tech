@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/graphics-design.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">GRAPHICS DESIGN</h2>
                    <h3 class="section-subheading text-muted text-center">ALTITUDE TECHNOLOGY WORLDWIDE</h3>
                </div>
            </div>
            <div class="row text-left">
            <div class="col-md-8 col-xs-12">
                <p class="text-muted">
                    “A picture speaks a thousand words”. And rightfully so; communication is a vital part of any business. If your audience or your potential client does not understand what business your company is doing it will fail to generate leads or drive growth. Of course there are other ways of conveying your information through words, phrases and content.
                </p>
                <p class="text-muted">
                    But a visual means is the most striking way to hit the audience’s mind so that the message remains etched in the viewer’s memory. It is here where a graphic design plays a very important role to convey a message with a dash of innovation. 
                </p>
                <p class="text-muted">
                    Our graphics design process involves combining technological, aesthetics and creative thinking to generate graphically communicative ideas for our clients.
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
