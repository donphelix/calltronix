<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $fillable = [
        'driver_name',
        'driver_phone_number',
        'company_name',
        'owner_name',
        'owner_email',
        'truck_model',
        'truck_registration',
        'truck_chassis_number',
        'truck_engine_number',
        'truck_mileage'    
    ];
}
