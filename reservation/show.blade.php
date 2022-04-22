@extends('reservations.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Reservation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IdReservation:</strong>
                {{ $reservation->idReservation }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room</strong>
                {{ $reservation->idRoom }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User</strong>
                {{ $reservation->idUser }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                {{ $reservation->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time</strong>
                {{ $reservation->time }}
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>State</strong>
                  {{ $reservation->state }}
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Objective</strong>
                {{ $reservation->objective }}
            </div>
        </div>


    </div>
@endsection
