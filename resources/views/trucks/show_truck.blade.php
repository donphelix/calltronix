@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <form>
        <h3>Select <b>{{$truck->owner_name}}'s  <b>{{$truck->truck_model}} Truck Model Parts to Repair </h3>
            <p>Time of Submission by Gate Guard {{ Auth::user()->name }} on {{$truck->created_at}} </p>
            <div class="border">
                <div class="form-group">
                    <label><input  type="checkbox" value="F8835100 FUEL FILTER 3,569.00" name="sport"> FUEL FILTER</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" value="F7B01100 AIR FILTER OUTER 6,934.00" name="sport"> AIR FILTER OUTER</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" value="B1304301 CLUTCH PLATE 15,929.00" name="sport"> CLUTCH PLATE</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" value="B1391801 PRESSURE PLATE 22,248.00" name="sport"> PRESSURE PLATE</label>
                </div>
            </div>
        <br>
        <button type="button" id="button" class="btn btn-primary">Generate Total price into pdf</button>
    </form>
    </div>
</div>
@endsection