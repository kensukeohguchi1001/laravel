<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp'
        ];
        $restData = new RestData();
        $restData->fill($param)->save();
        $param = [
            'message' => 'Yahoo Japan',
            'url' => 'https://www.yahoo.co.jp'
        ];
        $restData = new RestData();
        $restData->fill($param)->save();
        $param = [
            'message' => 'MSN Japan',
            'url' => 'http://www.msn.com/ja-jp'
        ];
        $restData = new RestData();
        $restData->fill($param)->save();

    }
}
