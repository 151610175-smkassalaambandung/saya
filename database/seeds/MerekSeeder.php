<?php

use Illuminate\Database\Seeder;
use App\Merek;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $merek1 = Merek::create(['namamerek'=>'Polygon']);
        $merek2 = Merek::create(['namamerek'=>'United']);
        $merek3 = Merek::create(['namamerek'=>'Giant']);
        $merek4 = Merek::create(['namamerek'=>'Scott']);
    }
}
