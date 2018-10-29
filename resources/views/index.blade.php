@extends('layouts.master')

@section('content')
<div>
    <div class="header-container">
        <div class="video-container">
            
        <video preload="true" autoplay="autoplay" loop="loop" volume="0" poster="{{ asset('img/home.jpg')}}">
            <source src="{{asset('video/cruise.mp4')}}" type="video/mp4">
            <source src="{{asset('video/cruise.webm')}}" type="video/webm">
            <source src="{{asset('video/cruise.ogg')}}" type="video/ogg">
            </video> <!-- end of video  -->
    
        </div> <!-- end of video container  -->
        <h3 class="bannerText" style="color : #fff">PREPARE FOR THE <br/> FUTURE</h3>
    </div> <!-- end of header container  -->
    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services" style="padding-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Your Partner for Digital Success</h2>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-8">
                    <p class="text-muted">
                        Altitude Technology Worldwide is global ICT management consulting and technology services and business process optimization company. We help organizations assess how to maximize their performance and work with them to achieve their vision. We develop and implement technology to improve our clients’ productivity and efficiency. Ultimately, we enable our clients to become high-performance businesses and government agencies
                    </p>
                    <p class="text-muted">
                        We serve to deliver cost effective interactive technology and design solutions without compromising on quality. With clients globally, we produce innovative, high-performance application for companies in multiple industries including hospitality, retail, wholesale, and communications and so on. Using the latest programming and design technologies, we create the optimal, effective online as well as desktop experience for every client. We can work within your existing corporate ID or create one for you to establish a sense of branding for your need.
                    </p>
                    @include('includes.request')

                </div>
                <div class="col-md-4">
                    @include('includes.newsfeeds') 
                </div>
            </div>
        </div>
    </section>

    <section style="background-color:#fff; padding-top:0px">
        <img width="100%" src="{{asset('img/indexBody.jpg')}}" alt="" />
        <div class="container homeText">
            <div class="first">
                <a href="{{route('digital-literacy')}}">
                    Train to become an IT professional
                </a>
            </div>
            <div>
                <img style="width:200px" src="{{ asset('img/arrow.jpg')}}" alt="">
            </div>
            <div class="second">
                <a href="{{route('web-development')}}">
                    Boost your chances of landing your dream job
                </a>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container jobOpenings">
            <h2>Job Openings</h2>
            <hr style="border:1px solid #fff"/>
            <div class="content">
                <ul>
                    <li>Programmers</li>
                    <li>Mobile App Developers</li>
                    <li>Graphic Designers</li>
                    <li>Video Editors</li>
                    <li>Business Development Managers</li>
                </ul>
                <div>
                    <img src="" alt="">
                </div>
            </div>
            <div class="regPart">
            <span>To Apply Now, </span> <a href="{{route('careers.index')}}">CLICK HERE</a>
            </div>
        </div>
    </section>
</div>
@endsection