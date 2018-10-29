@extends('layouts.master')

@section('content')
    <br>
    <br>
    <br>
    <section id="services">
        <style>
            img {
                width:100%;
            }    
        </style>
        <div class="container">
                <section class="testimonial py-5" id="testimonial">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                                <div class=" ">
                                    <div class="card-body">
                                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                                        <h2 class="py-3">Registration</h2>
                                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 py-5 border">
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
                            <h4 class="pb-4">Please upload Job Details Here</h4>
                            <form autocomplete="off" action="{{route('careers.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <input id="company_name" name="company_name" placeholder="Company's Name" class="form-control" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <input id="contact_person" name="contact_name" placeholder="Contact Person Name" class="form-control" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Contact Email" required>
                                        </div>
                                      </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input id="Mobile No." name="phone" placeholder="Mobile No." class="form-control" required="required" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select id="inputState" class="form-control" name="work_condition">
                                                <option disabled selected>Work Condition ...</option>
                                                <option> Part Time</option>
                                                <option> Fulltime</option>
                                                <option> On Site</option>
                                                <option> Remote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <select id="inputState" class="form-control" name="country" required>
                                                <option disabled selected>Country ...</option>
                                                <option> Nigeria</option>
                                                <option> Ghana</option>
                                                <option> South Africa</option>
                                                <option> Kenya</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                  <select id="inputState" class="form-control" name="state" required>
                                                    <option disabled selected>State ...</option>
                                                    <option> Lagos</option>
                                                    <option> Abuja</option>
                                                    <option> Portharcourt</option>
                                                    <option> Kano</option>
                                                  </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                                  <select id="inputState" class="form-control" name="salary_range" required>
                                                    <option disabled selected>Salary Range ...</option>
                                                    <option> $1000.00 - $2000.00</option>
                                                    <option> $2000.00 - $4000.00</option>
                                                    <option> $4000.00 - $6000.00</option>
                                                    <option> $6000.00 - $8000.00</option>
                                                  </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                                  <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                  <label class="form-check-label" for="invalidCheck2">
                                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                                  </label>
                                                </div>
                                              </div>
                                    
                                          </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                
        </div>
    </section>
        
@endsection
