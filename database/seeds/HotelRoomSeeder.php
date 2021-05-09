<?php

use Illuminate\Database\Seeder;

class HotelRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel_rooms')->truncate();
        DB::table('hotel_rooms')->insert(
            [
                'hotel_id' => 1,
                'room_id' => 1
            ]
        );

        DB::table('hotel_rooms')->insert(
            [
                'hotel_id' => 1,
                'room_id' => 2
            ]
        );

        DB::table('hotel_rooms')->insert(
            [
                'hotel_id' => 1,
                'room_id' => 3
            ]
        );

        DB::table('hotel_rooms')->insert(
            [
                'hotel_id' => 2,
                'room_id' => 5
            ]
        );

        DB::table('hotel_rooms')->insert(
            [
                'hotel_id' => 2,
                'room_id' => 2
            ]
        );


    }
}
