@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="header-container">
        <div class="video-container">
            <img class='mainBg' src="{{asset('img/about/about.jpg')}}" />
        </div>
        {{-- <h3 class="bannerText">Who We ARE</h3> --}}
    </div> <!-- end of header container  -->

    <!-- ---------------------------- Services --------------------------------------- -->
    <section id="services">
        <div class="container">
            <div class="row" style="margin-bottom:40px">
                <div class="col-lg-12">
                    <h2 class="section-heading" style="background-color:#5eb448">Vision and Values</h2>
                </div>
                <div class="col-md-12">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur reiciendis autem, consequatur iste itaque similique, dignissimos asperiores sequi beatae veritatis soluta ipsum. Veniam debitis nemo autem amet. Maiores, architecto dolor.
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam vel iure veniam repellat expedita numquam necessitatibus, commodi, assumenda aliquam consequuntur voluptas nobis. Consequuntur fuga voluptas pariatur ex eaque id.
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:40px">
                <div class="col-lg-12">
                    <h2 class="section-heading" style="background-color:#5eb448">Company Structure</h2>
                </div>
                <div class="col-md-12">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur reiciendis autem, consequatur iste itaque similique, dignissimos asperiores sequi beatae veritatis soluta ipsum. Veniam debitis nemo autem amet. Maiores, architecto dolor.
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam vel iure veniam repellat expedita numquam necessitatibus, commodi, assumenda aliquam consequuntur voluptas nobis. Consequuntur fuga voluptas pariatur ex eaque id.
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom:40px">
                <div class="col-lg-12">
                    <h2 class="section-heading" style="background-color:#5eb448">Achievements</h2>
                </div>
                <div class="col-md-12">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur reiciendis autem, consequatur iste itaque similique, dignissimos asperiores sequi beatae veritatis soluta ipsum. Veniam debitis nemo autem amet. Maiores, architecto dolor.
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam vel iure veniam repellat expedita numquam necessitatibus, commodi, assumenda aliquam consequuntur voluptas nobis. Consequuntur fuga voluptas pariatur ex eaque id.
                    </p>
                </div>
            </div>
        </div>
    </section>
        
</div>
@endsection
