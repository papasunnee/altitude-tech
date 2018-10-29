<table class="table table-responsive" id="courseRegistrations-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Course</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($courseRegistrations as $courseRegistration)
        <tr>
            <td>{!! $courseRegistration->name !!}</td>
            <td>{!! $courseRegistration->email !!}</td>
            <td>{!! $courseRegistration->phone !!}</td>
            <td>{!! $courseRegistration->address !!}</td>
            <td>{!! $courseRegistration->course !!}</td>
            <td>
                {!! Form::open(['route' => ['courseRegistrations.destroy', $courseRegistration->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courseRegistrations.show', [$courseRegistration->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('courseRegistrations.edit', [$courseRegistration->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>