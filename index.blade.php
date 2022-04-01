@extends('rooms.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Classroom reservation system</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>IdRoom</th>
            <th>Type</th>
            <th>Floor</th>
            <th>Capacity</th>
            <th>Particular</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->idRoom }}</td>
                <td>{{ $value->type }}</td>
                <td>{{ $value->floor}}</td>

                <td>{{ $value->capacity  }}</td>
                <td>{{ $value->particular }}</td>

                <td>
                    <form action="{{ route('rooms.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('rooms.show',$value->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('rooms.edit',$value->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection


