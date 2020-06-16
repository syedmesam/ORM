<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
    public function company(){
        
        return $this->belongsTo(Company::class , 'companies_id'); 
    }
}
