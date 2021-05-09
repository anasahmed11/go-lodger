<?php

use Illuminate\Database\Seeder;

    class AdvertiserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisers')->truncate();
        DB::table('advertisers')->insert(
            [
                'name' => 'adv 1',
            ]
        );

        DB::table('advertisers')->insert(
            [
                'name' => 'adv 2',
            ]
        );
    }
}
