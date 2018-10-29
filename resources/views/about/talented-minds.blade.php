@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/about/team.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- Team -->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Our Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset("img/team/3.jpg")}}" alt="">
                        <h4>Adetona Sunday</h4>
                        <p class="text-muted">Manager</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="">
                        <h4>Title</h4>
                        <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                        </p>
                        <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                        </p>
                        <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                        </p>
                        <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                        </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="team-member">
                    <h4>Bello Oladipupo</h4>
                    <p class="text-muted">Programmar</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="">
                    <h4>Title</h4>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="team-member">
                    <h4>Paul Nandom</h4>
                    <p class="text-muted">Programmar</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="">
                    <h4>Title</h4>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                    </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
        
</div>
@endsection
