<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->truncate();
        DB::table('hotels')->insert(
            [
                'name' => 'Hotel A',
                'stars' => 4
            ]
        );

        DB::table('hotels')->insert(
            [
                'name' => 'Hotel B',
                'stars' => 5
            ]
        );
    }
}
