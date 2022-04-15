@extends('reservations.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Classroom</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Cancel</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>IdReservation:</strong>
                    <input required= required type="number" name="idReservation" class="form-control"  value="{{old('idReservation')}}">
                    <li class="rq">*Enter numbers only.</li>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User:</strong>
                    <input required= required type="text" name="idUser" class="form-control"
                           placeholder="Enter the User" value="{{old('idUser')}}" >
                    <li class="rq">*Enter numbers and alphabets only.</li>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room:</strong>
                    <input required= required type="text" name="idRoom" class="form-control"
                           placeholder="Enter the Room" value="{{old('idRoom')}}" >
                    <li class="rq">*Enter numbers and alphabets only.</li>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <strong> Date:</strong>
                    <input required=required type="date" class="form-control datetimepicker @error('date') is-invalid @enderror"name="date" value="{{ old('date') }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <strong> Time:</strong>
                    <div class="time-icon">
                        <input required=required type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ old('time') }}">
                    </div>

                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>State:</strong>
                    <input required= required  type="radio"  name="state" value="granted"class="form-control"
                           @if(old('state')=='granted') checked @endif>
                    <label for="granted">granted</label><br>
                    <input required= required type="radio"  name="state" value="waiting" class="form-control"
                           value="waiting"@if(old('state')=='waiting') checked @endif>
                    <label for="waiting">waiting</label><br>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Objective:</strong>
                    <input required= required type="text" name="objective" class="form-control"  value="{{old('objective')}}">
                    <li class="rq">*Enter the objective of this reservation.</li>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>



    </form>
@endsection

