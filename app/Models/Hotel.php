<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "hotels" ;
    protected $fillable = [
        'name' ,'stars'
    ];


    public function rooms()
    {
        return $this->hasMany('App\Models\HotelRoom' , 'hotel_id');
    }

}
