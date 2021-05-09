<?php

namespace App\Repositories;

use App\Models\RoomPrice;
use Symfony\Component\HttpFoundation\Request;

class RoomRepository
{

    /**
     * @param $request
     * @return $this|mixed
     */
    public function search(Request $request)
    {
        $rooms= RoomPrice::orderBy("total_price")
            ->when($request->get('room_name'), function ($rooms) use ($request) {
                return $rooms->WhereHas('hotel_room', function ($rooms) use ($request) {
                    return $rooms->WhereHas('room', function ($rooms) use ($request) {
                        $rooms->where('name', 'like', '%' . $request->query->get('room_name') . '%');
                    });

                });
            })->when($request->get('room_code'), function ($rooms) use ($request) {
                return $rooms->WhereHas('hotel_room', function ($rooms) use ($request) {
                    return $rooms->WhereHas('room', function ($rooms) use ($request) {
                        $rooms->where('code', 'like', '%' . $request->query->get('room_code') . '%');
                    });

                });
            })
        ;
        return $rooms;
    }

}
