@extends('layouts.master')

@section('content')
<div>
    <!--  --------------------------- Header ---------------------------------- -->
    
    <div class="container" style="margin-top:150px">
        <h3>Request For Quote</h3>
        <br />
        <div class="row">
            <div class="col-6">
                <div class="video-container">
                    <img class='mainBg' src="{{asset('img/request.jpg')}}" />
                </div>
            </div>
            <div class="col-md-6">
            <form autocomplete="off" action="{{route('request-for-quote.store')}}" method="POST" class="needs-validation" novalidate>
                {{ csrf_field() }}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
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
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Your Name</label>
                    <input type="text" class="form-control" name="name" id="validationCustom01" value="{{old('name')}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Job Title</label>
                        <input type="text" class="form-control" name="job_title" id="validationCustom02" value="{{old('job_title')}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Email</label>
                        <input type="email" class="form-control" name="email" id="validationCustom01" value="{{old('email')}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Phone No</label>
                        <input type="text" class="form-control" name="phone" id="validationCustom02" value="{{old('phone')}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Company Name</label>
                    <input type="text" class="form-control" name="company" id="validationCustom01" value="{{old('company')}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Project Type</label>
                        <select class="form-control" name="project_type" id="validationCustom02">
                            <option>Strategic Consulting</option>
                            <option>Software Development</option>
                            <option>Website Development</option>
                            <option>App Development</option>
                            <option>Graphics Design</option>
                            <option>Branding & Logo</option>
                            <option>Digital Marketing</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <hr style="border-color : red" />

                    <div class="col-md-12 mb-3">
                        <div class="input-group">
                            <label for="exampleFormControlFile1">Upload Documents:<small><em>(Upload any project document or specification)</em></small></label>
                            <input type="file" name="spec_upload" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Project Description:</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Other Comments:</label>
                            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3">{{old('comment')}}</textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
                        
                <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                        }, false);
                    });
                    }, false);
                })();
                </script>
            </div>
        </div>
        
    </div> <!-- end of header container  -->
        
</div>
@endsection
