@extends('layouts.master')

@section('content')
<div>
    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row" style="margin-top:5em">
                    <div class="col-md-4" style="background-color:#00B2E8; color:#fff ; box-sizing:border-box; font-weight:100; padding:50px 30px">
                        <p style="display:block;font-size:2em">Networking</p>
                        <br/>
                        <p>The web, social media, spreadsheets, email—it’s a digital world. Don’t let it pass you by.</p>
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
                        <h2 class="section-heading" style="position:absolute; bottom:0; background: -webkit-linear-gradient(#1771A3, #26323E);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Computer Networking</h2>
                    </div>
            </div>

            <div class="row" style="margin-top:3em">
                <div class="col-md-4" style="padding-left:0;">
                    @include('service.training.course-form')
                </div>
                <div class="col-md-8">
                    <div>
                        <p style="font-weight:300; margin-left:3em">
                            Digital Literacy Standard Curriculum Version 4 is a direct adaptation from Microsoft, it teaches generic ICT skills and concepts. The curriculum features screen shots and simulations from Windows 8 and Microsoft Office 2013 to illustrate and provide hands-on examples.
                        </p>
                    </div>
                    <div>
                        <h4>
                            Computer Fundamentals, ICT & Productivity Programs
                        </h4>
                        <p style="font-weight:300; font-size:1.1em;">
                            Computing is an important part of everyday life in the twenty-first century. From music and photos to banking and communicating, computers have changed the way we work and live. This course introduces you to the fundamentals of computing, explains the components of a computer, explores operating system basics and shows you how to use a mouse and a keyboard.
                        </p>
                        <p style="font-weight:300; font-size:1.1em;">
                            Hundreds of software applications are available today. This course explores the most common productivity software applications used in school, at work, and at home. The course teaches you how to choose the right software for your project. You will learn the fundamentals of word processing, spreadsheets, presentation software, and databases.
                        </p>
                    </div>
                    <div>
                        <h4>
                            The Internet, Cloud Services and World Wide Web
                        </h4>
                        <p style="font-weight:300; font-size:1.1em;">
                            The Internet can connect you to people, information and resources around the world. This course shows you how to connect to the Internet, browse Web pages, navigate Web sites, use search engines and exchange email with others.
                        </p>
                    </div>
                    <div>
                        <h4>
                            Digital Lifestyle, Computer Security & Privacy
                        </h4>
                        <p style="font-weight:300; font-size:1.1em;">
                            This course helps you to identify the various threats to your computer and the data stored on it. You will explore how to protect your computer from these threats by taking some preventive measures. Finally, this course explains the ethical and legal issues related to Internet usage.
                        </p>
                        <p style="font-weight:300; font-size:1.1em;">
                            From smart phones to digital cameras, computers are changing our everyday lives. This course introduces you to new digital technologies, including digital audio, digital video, and digital photography. It explores how these and other computing technologies are creating new career opportunities and shaping the world we live in.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
</div>
@endsection
