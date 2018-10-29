@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/career.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Join a World Class Company</h2>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-12">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-md-12">
                    <div class="well" style="margin-top: 20px;">
                        @if (count($careers) > 0)
                            <ul class="list-group careerPage">
                                @foreach ($careers as $career)
                                    <li class="list-group-item">
                                        <div style="display:grid; grid-template-columns: repeat(5, auto)">
                                            <img src="{{asset('img/altitudelogo.png')}}" style="width:100px; margin-top:5px ;height:50px; background-color:#000;" alt="CompanyLogo">
                                            <div>
                                                <p>{{$career->job_title}}</p>
                                                <span style="display:block; font-size:12px">{{$career->company_name}}</span>
                                            </div>
                                            <div>
                                                <p><span style="color:green" class="glyphicon glyphicon-map-marker"></span>{{$career->country . ', ' . $career->state}}</p>
                                                <span style="display:block; font-size:12px">{{$career->work_condition}}</span>
                                            </div>
                                            <div>
                                                <p>{{$career->salary_range}}</p>
                                                <small>Salary Range <i>pa</i> </small>
                                            </div>
                                            <div style="text-align:center;">
                                                <span style="display:block;font-size:12px;">Today</span>
                                                <button class="btn btn-success" style="font-size:10px; padding-top:2px;padding-bottom:2px">Apply</button>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <h2 style="text-align:center">We currently have no active job vacancy available</h2>
                        @endif
                    </div>	
                </div>
            </div>
        </div>
    </section>
        
</div>
@endsection
