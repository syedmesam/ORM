<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
    public function Company(){

        return $this->belongsToMany(Company::class , 'event_company' ,'companies_id' ,'events_id' );
    }
}
