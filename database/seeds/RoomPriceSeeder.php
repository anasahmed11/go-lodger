<?php

use Illuminate\Database\Seeder;

class RoomPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_prices')->truncate();
        //adv 1
        DB::table('room_prices')->insert(
            [
                'adv_id' => 1,
                'hotel_room_id' => 1,
                'net_price' => 140,
                'total_price' => 152,
            ]
        );

        DB::table('room_prices')->insert(
            [
                'adv_id' => 1,
                'hotel_room_id' => 2,
                'net_price' => 133,
                'total_price' => 146,
            ]
        );

        DB::table('room_prices')->insert(
            [
                'adv_id' => 1,
                'hotel_room_id' => 4,
                'net_price' => 150,
                'total_price' => 165,
            ]
        );

        DB::table('room_prices')->insert(
            [
                'adv_id' => 1,
                'hotel_room_id' => 5,
                'net_price' => 130,
                'total_price' => 143,
            ]
        );

        //adv 2
        DB::table('room_prices')->insert(
            [
                'adv_id' => 2,
                'hotel_room_id' => 1,
                'net_price' => 143,
                'total_price' => 153,
            ]
        );

        DB::table('room_prices')->insert(
            [
                'adv_id' => 2,
                'hotel_room_id' => 2,
                'net_price' => 131,
                'total_price' => 142,
            ]
        );

        DB::table('room_prices')->insert(
            [
                'adv_id' => 2,
                'hotel_room_id' => 3,
                'net_price' => 140,
                'total_price' => 156,
            ]
        );

        DB::table('room_prices')->insert(
            [
                'adv_id' => 2,
                'hotel_room_id' => 4,
                'net_price' => 152,
                'total_price' => 167,
            ]
        );

        DB::table('room_prices')->insert(
            [
                'adv_id' => 2,
                'hotel_room_id' => 5,
                'net_price' => 133,
                'total_price' => 145,
            ]
        );


    }
}
