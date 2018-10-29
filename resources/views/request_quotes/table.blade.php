<table class="table table-responsive" id="requestQuotes-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Job Title</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Company</th>
        <th>Project Type</th>
        <th>Spec Upload</th>
        <th>Description</th>
        <th>Comment</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($requestQuotes as $requestQuote)
        <tr>
            <td>{!! $requestQuote->name !!}</td>
            <td>{!! $requestQuote->job_title !!}</td>
            <td>{!! $requestQuote->email !!}</td>
            <td>{!! $requestQuote->phone !!}</td>
            <td>{!! $requestQuote->company !!}</td>
            <td>{!! $requestQuote->project_type !!}</td>
            <td>{!! $requestQuote->spec_upload !!}</td>
            <td>{!! $requestQuote->description !!}</td>
            <td>{!! $requestQuote->comment !!}</td>
            <td>
                {!! Form::open(['route' => ['requestQuotes.destroy', $requestQuote->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('requestQuotes.show', [$requestQuote->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('requestQuotes.edit', [$requestQuote->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>