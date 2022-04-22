@extends('reservations.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Classroom</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There are some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update',$reservation->idReservation) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>IdReservation</strong>
                    <input  required= required type="text" name="idReservation" value="{{ $reservation->idReservation }}"
                            class="form-control" placeholder="Enter the name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room</strong>
                    <input required= required type="text" name="idRoom" value="{{ $reservation->idRoom }}" class="form-control"
                           placeholder="Enter the room">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User</strong>
                    <input  required= required type="number" name="idUser" value="{{ $reservation->idUser }}" class="form-control"
                            placeholder="Enter the User">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date</strong>
                    <input  required= required type="date" name="date" value="{{ $reservation->date }}" class="form-control"
                            placeholder="Enter the date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Time</strong>
                    <input required= required type="time" name="time" value="{{ $reservation->time }}" class="form-control"
                           placeholder="enter time">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>State</strong>
                    <input required= required type="text" name="state" value="{{ $reservation->state }}" class="form-control"
                           placeholder="enter state">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Objective</strong>
                    <input required= required type="text" name="objective" value="{{ $reservation->objective }}" class="form-control"
                           placeholder="enter objective">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>



    </form>

@endsection
