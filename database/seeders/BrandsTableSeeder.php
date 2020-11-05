<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
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
        $Name = $this->generateRandomString(rand(2, 15));
        $Name = strtolower($Name);
        $Name = ucfirst($Name);
        return $Name;
    }

    public function generateRandomTF()
    {
        $TF = [true, false];
        return $TF[rand(0, count($TF) - 1)];
    }

    public function generateRandomCountry()
    {
        $positions = ['日本', '義大利', '美國', '英國', '奧地利'];
        return $positions[rand(0, count($positions) - 1)];

    }

    public function run()
    {
        for ($i = 0; $i < 12; $i++) {
            $brand = $this->generateRandomName();
            $country = $this->generateRandomCountry();
            $gp = $this->generateRandomTF();
            $wsbk = $this->generateRandomTF();
            $random_datatime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('brands')->insert([
                'brand' => $brand,
                'country' => $country,
                'gp' => $gp,
                'wsbk' => $wsbk,
                'created_at' => $random_datatime,
                'updated_at' => $random_datatime
            ]);
        }
    }
}
