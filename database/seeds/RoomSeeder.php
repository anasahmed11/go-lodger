<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->truncate();
        DB::table('rooms')->insert(
            [
                'code' => 'DBL-TWN',
                'name' => 'Double or Twin SUPERIOR',
            ]
        );

        DB::table('rooms')->insert(
            [
                'code' => 'HF-BD',
                'name' => 'HALF BOARD',
            ]
        );

        DB::table('rooms')->insert(
            [
                'code' => 'QN-RM',
                'name' => 'Queen Room',
            ]
        );

        DB::table('rooms')->insert(
            [
                'code' => 'LUX-ROM',
                'name' => 'Luxury Room',
            ]
        );

        DB::table('rooms')->insert(
            [
                'code' => 'DBL-RM',
                'name' => 'Double Room',
            ]
        );


        DB::table('rooms')->insert(
            [
                'code' => 'SNG-RM',
                'name' => 'Single Room',
            ]
        );
    }
}
