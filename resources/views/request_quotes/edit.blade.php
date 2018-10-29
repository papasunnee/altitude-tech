@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Request Quote
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($requestQuote, ['route' => ['requestQuotes.update', $requestQuote->id], 'method' => 'patch']) !!}

                        @include('request_quotes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection