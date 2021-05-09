<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    protected $table = "hotel_rooms" ;
    protected $fillable = [
        'hotel_id' ,'room_id'
    ];


    public function room()
    {
        return $this->belongsTo('App\Models\Room' , 'room_id');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel' , 'hotel_id');
    }

}
