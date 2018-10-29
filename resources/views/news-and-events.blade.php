@extends('layouts.master')

@section('content')
<div>
    <!----------------------------- Header ---------------------------------- -->
    
    <div class="header-container" style="height: 350px">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/news_events.jpg')}}" />
        </div>
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading" style="background-color:#487bb4;">News and Events</h2>
                </div>
            </div>

            <div class="row mb-2">
                @foreach (App\Models\Post::orderBy('id', 'desc')->paginate(8) as $post)
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <h6 class="mb-0">
                                {{$post->title}}
                            </h6>
                            <div class="mb-1 text-muted">{{$post->created_at->diffForHumans()}}</div>
                            <p class="card-text mb-auto" style="font-size:15px; line-height:30px;">{{str_limit($post->body,150)}}</p>
                            <a href="#">Continue reading</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="{{$post->title}}" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1654caefce4%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1654caefce4%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
        
</div>
@endsection
