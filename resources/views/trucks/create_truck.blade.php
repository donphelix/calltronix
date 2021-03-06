@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ url('/store') }}" method="post" >
        @csrf
        <h2>Enter Truck Records</h2>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="driver_name">Driver's Name</label>
            <input type="text" name="driver_name" class="form-control" id="driver_name" placeholder="Driver's Name" required>
          </div>
          <div class="form-group col-md-6">
            <label for="driver_phone_number">Driver's Phone Number</label>
            <input type="text" name="driver_phone_number" class="form-control" id="driver_phone_number" placeholder="Driver's Phone Number">
          </div>
        </div>
        <div class="form-group">
          <label for="company_name">Company Name</label>
          <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name">
        </div>
        <div class="form-group">
          <label for="owner_name">Owner's Name</label>
          <input type="text" name="owner_name" class="form-control" id="owner_name" placeholder="Owner's Name">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="owner_email">Owner's Email</label>
            <input type="email" class="form-control" name="owner_email" id="owner_email">
          </div>
          <div class="form-group col-md-4">
            <label for="truck_model">Truck Model</label>
            <input class="form-control" type="text" name="truck_model" id="truck_model">
          </div>
          <div class="form-group col-md-2">
            <label for="truck_registration">Truck Registration Number</label>
            <input name="truck_registration" type="text" class="form-control" id="truck_registration">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="truck_chassis_number">Chassis Number</label>
              <input type="text" class="form-control" name="truck_chassis_number" id="owner_email">
            </div>
            <div class="form-group col-md-4">
              <label for="truck_engine_number">Engine Number</label>
              <input class="form-control" type="text" name="truck_engine_number" id="truck_engine_number">
            </div>
            <div class="form-group col-md-2">
              <label for="truck_mileage">Mileage</label>
              <input name="truck_mileage" type="text" class="form-control" id="truck_mileage">
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection