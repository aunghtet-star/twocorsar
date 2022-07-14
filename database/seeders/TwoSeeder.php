<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('twos')->insert([
            'two' => '00',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '01',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '02',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '03',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '04',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '05',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '06',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '07',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '08',
            'amount' => 0
        ]);

        DB::table('twos')->insert([
            'two' => '09',
            'amount' => 0
        ]);

        for ($i=9;$i++,$i<100;){
            DB::table('twos')->insert([
                'two' => $i,
                'amount' => 0
            ]);
        }

    }
}
