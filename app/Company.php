<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function phone(){
        
        return $this->hasOne( Phone::class ,'companies_id');

        
    }
    public function post(){
        
        return $this->hasMany( post::class ,'companies_id' );

        
    }
    
    public function events(){
        
        return $this->belongsToMany( event::class , 'event_company' ,'companies_id' ,'events_id' );
    }

        
}
