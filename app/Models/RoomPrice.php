<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomPrice extends Model
{
    protected $table = "room_prices" ;
    protected $fillable = ['adv_id','hotel_room_id','net_price','total_price'
    ];

    public function advertiser()
    {
       return $this->belongsTo('App\Models\Advertiser' , 'adv_id');
    }

    public function hotel_room()
    {
        return $this->belongsTo('App\Models\HotelRoom' , 'hotel_room_id');
    }

    public function taxes()
    {
        return $this->hasMany('App\Models\Tax' , 'room_price_id');
    }
}
