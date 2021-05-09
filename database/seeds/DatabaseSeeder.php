<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(AdvertiserSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(HotelRoomSeeder::class);
        $this->call(RoomPriceSeeder::class);
        $this->call(TaxSeeder::class);

    }
}
