@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <h1 class="display-10">trucks</h1>    
          <table class="table table-striped">
            <thead  class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Driver's Name</th>
                  <th>Phone Number</th>
                  <th>Company Name</th>
                  <th>Owner's Name</th>
                  <th>Email</th>
                  <th>Truck Model</th>
                  <th>Truck Registration</th>
                  <th>Chassis Number</th>
                  <th>Engine Number</th>
                  <th>Mileage</th>
                  <th colspan = 2>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trucks as $truck)
                <tr>
                    <td>{{$truck->id}}</td>
                    <td>{{$truck->driver_name}}</td>
                    <td>{{$truck->driver_phone_number}}</td>
                    <td>{{$truck->company_name}}</td>
                    <td>{{$truck->owner_name}}</td>
                    <td>{{$truck->owner_email}}</td>
                    <td>{{$truck->truck_model}}</td>
                    <td>{{$truck->truck_registration}}</td>
                    <td>{{$truck->truck_chassis_number}}</td>
                    <td>{{$truck->truck_engine_number}}</td>
                    <td>{{$truck->truck_mileage}} km/hr</td>
                    <td>
                        <a href="{{ url('/trucks/edit_truck',$truck->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('/trucks/show_truck',$truck->id)}}" class="btn btn-primary">Check</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        <div>
        </div>
    
</div>
@endsection