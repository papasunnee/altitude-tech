@extends('layouts.master')

@section('content')
<div>
    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row" style="margin-top:5em">
                    <div class="col-md-4" style="background-color:#AD0303; color:#fff ; box-sizing:border-box; font-weight:100; padding:50px 30px">
                        <p style="display:block;font-size:2em">Lorem Ipsum</p>
                        <br/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, modi 
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <h2 class="section-heading" style="position:absolute; bottom:0; background: -webkit-linear-gradient(#1771A3, #26323E);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Programming</h2>
                    </div>
            </div>

            <div class="row" style="margin-top:3em">
                <div class="col-md-4" style="padding-left:0;">
                    @include('service.training.course-form')
                </div>
                <div class="col-md-8">
                    <div>
                        <p style="font-weight:300; margin-left:3em">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, aliquam odit. Repudiandae, eius voluptatem, ut cupiditate repellat quidem libero illo vel porro nam voluptas? Architecto commodi at iste amet voluptates!
                        </p>
                    </div>
                    <div>
                        <h4>
                            Java
                        </h4>
                        <p style="font-weight:300; font-size:1.1em;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut minima reiciendis velit dolor, accusantium eos qui laboriosam repellat iusto itaque nemo, nesciunt odio iste molestias cum, vero ab suscipit aperiam.
                        </p>
                        <p style="font-weight:300; font-size:1.1em;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus saepe odio optio quo quos vero, illum omnis inventore ea voluptates hic doloremque minus commodi at quibusdam, laborum dicta sint similique.
                        </p>
                    </div>
                    <div>
                        <h4>
                            Andriod
                        </h4>
                        <p style="font-weight:300; font-size:1.1em;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, at molestiae aliquam possimus quibusdam odio aut adipisci similique expedita facere culpa repellat delectus ea sit magni, dignissimos, excepturi consequuntur modi.
                        </p>
                    </div>
                    <div>
                        <h4>
                            Python
                        </h4>
                        <p style="font-weight:300; font-size:1.1em;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestias illum quis sunt libero et laudantium, mollitia nisi. Ea magni officiis ipsa modi laboriosam vitae corporis officia nisi reiciendis! Quasi.
                        </p>
                    </div>
                    <div>
                        <h4>
                            MatLab
                        </h4>
                        <p style="font-weight:300; font-size:1.1em;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestias illum quis sunt libero et laudantium, mollitia nisi. Ea magni officiis ipsa modi laboriosam vitae corporis officia nisi reiciendis! Quasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
</div>
@endsection
