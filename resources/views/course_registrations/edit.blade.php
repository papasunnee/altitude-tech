@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course Registration
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($courseRegistration, ['route' => ['courseRegistrations.update', $courseRegistration->id], 'method' => 'patch']) !!}

                        @include('course_registrations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection