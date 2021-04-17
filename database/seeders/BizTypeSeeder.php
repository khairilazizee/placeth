<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BizTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('biz_type')->truncate();
        DB::table('biz_type')->insert([
            [
                "biz_type" => "Stall"
            ],
            [
                "biz_type" => "Restaurant"
            ],
            [
                "biz_type" => "House"
            ],
            [
                "biz_type" => "Online"
            ]
        ]);
    }
}
