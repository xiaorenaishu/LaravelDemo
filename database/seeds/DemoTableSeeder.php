<?php

use Illuminate\Database\Seeder;

class DemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        \Illuminate\Support\Facades\DB::table('demo')->insert([
//            'name' => 'name',
//            'remark' =>'remark',
//            'create_time' => time(),
//            'update_time' => time(),
//        ]);
//
//
//        \App\Models\Demo::create(
//            [
//                'name' => 'name2',
//                'remark' =>'remark2',
//                'create_time' => time(),
//                'update_time' => time(),
//            ]
//        );

        factory(App\Models\Demo::class, 10)->create();

    }
}
