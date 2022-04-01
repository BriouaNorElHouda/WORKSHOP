@extends('rooms.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Classroom</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
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

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>IdRoom:</strong>
                    <input type="text" name="idRoom" class="form-control" placeholder="Enter the name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <select class="form-control" style="height:150px" name="type">
                        <option disabled="disabled" selected="selected">--Choose a type--</option>
                        <option value=”DWR”> Directed work Room </option>
                        <option value=”PWR”> Practical Work Room </option>
                        <option value=”AMPHI”>AMPHI</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Floor:</strong>
                    <input type="text" name="floor" class="form-control" placeholder="Enter the floor">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity:</strong>
                    <input type="number" name="capacity" class="form-control" min="2" max="500">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Particular:</strong>
                    <input type="radio"  name="particular" value="True" class="form-control">
                    <label for="True">True</label><br>
                     <input type="radio"  name="particular" value="False" class="form-control">
                    <label for="False">False</label><br>

                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>



    </form>
@endsection

