<?php

use Illuminate\Database\Seeder;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //adv 1
        DB::table('taxes')->insert(
            [
                'amount' => 12.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 1,
            ]
        );

        DB::table('taxes')->insert(
            [
                'amount' => 13.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 2,
            ]
        );
        DB::table('taxes')->insert(
            [
                'amount' => 15.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 3,
            ]
        );
        DB::table('taxes')->insert(
            [
                'amount' => 13.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 4,
            ]
        );

        //adv 1
        DB::table('taxes')->insert(
            [
                'amount' => 10.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 5,
            ]
        );

        DB::table('taxes')->insert(
            [
                'amount' => 11.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 6,
            ]
        );
        DB::table('taxes')->insert(
            [
                'amount' => 12.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 7,
            ]
        );
        DB::table('taxes')->insert(
            [
                'amount' => 4.00,
                'currency' => 'EUR',
                'type' => 'EXTRA_FEES',
                'room_price_id' => 7,
            ]
        );

        DB::table('taxes')->insert(
            [
                'amount' => 15.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 8,
            ]
        );
        DB::table('taxes')->insert(
            [
                'amount' => 8.00,
                'currency' => 'EUR',
                'type' => 'TAXESANDFEES',
                'room_price_id' => 9,
            ]
        );
        DB::table('taxes')->insert(
            [
                'amount' => 4.00,
                'currency' => 'EUR',
                'type' => 'EXTRA_FEES',
                'room_price_id' => 9,
            ]
        );


    }
}
