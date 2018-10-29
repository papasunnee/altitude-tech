@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Request Quote
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('request_quotes.show_fields')
                    <a href="{!! route('requestQuotes.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
