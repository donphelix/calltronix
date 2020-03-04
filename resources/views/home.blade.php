@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 jumbotron">
                <h2>Welcome to Call Tronix</h2>

                    You are logged in <br><br>
                    <a href="{{url('/trucks/create_truck')}}" class="btn btn-success float-left">Register a Truck</a>
                    <a href="{{url('/trucks/view_truck')}}" class="btn btn-primary float-right">Check trucks that need service</a>
                
        </div>
    </div>
</div>
@endsection
