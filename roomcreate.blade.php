@extends('rooms.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Classroom</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Cancel</a>
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
                    <input required= required type="text" name="idRoom" class="form-control"
                           placeholder="Enter the name" value="{{old('idRoom')}}" >
                    <li class="rq">*Enter numbers and alphabets only.</li>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <select  class="form-control" style="height:150px" name="type"  value="{{old('type')}}" >
                        <option disabled="disabled" selected="selected">--Choose a type--</option>
                        <option required="" value=”DWR” @if(old('type')== 'DWR') selected @endif> Directed work Room  </option>
                        <option required="" value=”PWR” @if(old('type')== 'PWR') selected @endif> Practical Work Room </option>
                        <option required="" value=”AMPHI” @if(old('type') == 'AMPHI') selected @endif>AMPHI </option>

                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Floor:</strong>
                    <input required= required type="text" name="floor" class="form-control"
                           placeholder="Enter the floor" value="{{old('floor')}}">
                    <li class="rq">*Enter numbers and alphabets only.</li>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity:</strong>
                    <input required= required type="number" name="capacity" class="form-control" min="2" max="500" value="{{old('capacity')}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Particular:</strong>
                    <input required= required  type="radio"  name="particular" value="True"class="form-control"
                          @if(old('particular')=='True') checked @endif>
                    <label for="True">True</label><br>
                     <input required= required type="radio"  name="particular" value="False" class="form-control"
                            value="False"@if(old('particular')=='False') checked @endif>
                    <label for="False">False</label><br>

                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>



    </form>
@endsection

