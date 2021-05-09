<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    protected $fillable = [
        'name',
    ];

    public function room_prices()
    {
        return $this->hasMany('\App\Models\RoomPrice' , 'adv_id' );
    }

}
