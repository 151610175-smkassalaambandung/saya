<?php

use Illuminate\Database\Seeder;
use App\Tipe;
class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipe1 = Tipe::create(['namatipe'=>'BMX']);
        $tipe2 = Tipe::create(['namatipe'=>'Hybrid']);
        $tipe3 = Tipe::create(['namatipe'=>'City Bike']);
        $tipe4 = Tipe::create(['namatipe'=>'Folding Bike']);
    }
}
