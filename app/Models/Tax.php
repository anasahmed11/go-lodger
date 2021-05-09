<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table='taxes';
    protected $fillable = [
        'type','amount','currency','room_price_id'
    ];

    public function room_price()
    {
        return $this->belongsTo('\App\Models\RoomPrice' , 'room_price_id' );
    }
}
