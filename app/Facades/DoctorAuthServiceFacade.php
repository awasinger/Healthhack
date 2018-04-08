<?php
    
namespace \App\Facades;

use Illuminate\Support\Facades\Facade;

class DoctorAuth extends Facade {
    protected static function getFacadeAccessor() { 
        return 'auth.driver_admin'; 
    }
}