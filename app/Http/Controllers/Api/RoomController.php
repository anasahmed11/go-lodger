<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as Controller;
use App\Repositories\RoomRepository;
use Validator;
use Auth;
use Response;


use Illuminate\Http\Request;


class RoomController extends Controller
{
    public function __construct(RoomRepository $RoomRepository)
    {
        $this->RoomRepository = $RoomRepository;
    }

    public function rooms()
    {
        $rooms= $this->RoomRepository->search(request())
            ->selectRaw('id,hotel_room_id,adv_id,total_price')
            //load relation to know information about (room-hotel-adv-taxes)
            ->with(
                'hotel_room:id,hotel_id,room_id',
                'taxes:room_price_id,type,currency,amount',
                'hotel_room.hotel:id,name,stars',
                'hotel_room.room:id,name,code',
                'advertiser:id,name'
            )
            /* this line to select every room with its lowest price
                because using only groupBy not working efficient
                its load first record for each room and the lowest price
                and not load the correct adv that post this offer
            */
            ->whereRaw('total_price =
                (select min(total_price) from room_prices as r where r.hotel_room_id = room_prices.hotel_room_id )'
            )
            ->groupBy('hotel_room_id')
            ->paginate(20)
        ;
        return response()->json(
            array(
                'success'=>true,'response_code'=>200,'message'=>'list loaded successfully',
                'data' => $rooms
            )

        );
    }

}
