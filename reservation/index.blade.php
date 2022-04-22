@extends('reservations.layout')
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Classroom reservation system</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('reservations.create') }}"> Create New Reservation</a>
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

            <th>IdReservation</th>
            <th>Room</th>
            <th>User</th>
            <th>date</th>
            <th>time</th>
            <th>state</th>
            <th>objective</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
            <tr>

                <td>{{ $value->idReservation }}</td>
                <td>{{ $value->idRoom }}</td>
                <td>{{ $value->idUser}}</td>
                <td>{{ $value->date  }}</td>
                <td>{{ $value->time }}</td>
                <td>{{ $value->state }}</td>
                <td>{{\Str::limit( $value->objective , 100)}}</td>

                <td>
                    <form action="{{ route('reservations.destroy',$value->idReservation) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('reservations.show',$value->idReservation) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('reservations.edit',$value->idReservation) }}">Edit</a>
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


