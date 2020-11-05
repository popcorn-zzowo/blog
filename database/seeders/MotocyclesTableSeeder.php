<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotocyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEBGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomstring = ' ';
        for ($i = 0; $i < $length; $i++) {
            $randomstring .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomstring;
    }

    public function generateRandomName()
    {
        $First_Name = $this->generateRandomString(rand(2, 15));
        $First_Name = strtolower($First_Name);
        $First_Name = ucfirst($First_Name);

        $last_name = '0123456789';
        $last_name .= $last_name[rand(0, 3)];
        $name = $First_Name . $last_name;
        return $name;
    }
    public function generateRandomZone(){
        $kind = ['跑車','多功能車','美式機車','運動街車','街車','滑胎車','越野車','休旅車','跑旅車'];
        return $kind [rand(0,count($kind)-1)];
    }
    public function run()
    {
        for ($i=0;$i < 100;$i++) {

            $name = $this ->generateRandomName();
            $kind = $this ->generateRandomZone();

            $random_datatime = Carbon::now()->subMinute(rand(1, 55));
            DB::table('motocycles')->insert([
                'brand_id' =>rand(1,12),
                'name' => $name,
                'kind' => $kind,
                'hp' => rand(30,250),
                'nm' => rand(10,170),
                'kg' => rand(100,600),
                'created_at' => $random_datatime,
                'updated_at' => $random_datatime
            ]);
        }
    }
}
