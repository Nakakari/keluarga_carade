<?php

namespace Database\Seeders;

use App\Helpers\Wilayah\WilayahHelper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelArr = [];
        $data = (new WilayahHelper)->getWilayah();
        $kelurahan = $data['kelurahan'];
        foreach ($kelurahan as $keyKel => $valueKel) {
            foreach ($valueKel as $kec) {
                // dd($kec[2]);
                $kelArr[] = [
                    'id' => $kec[0],
                    'nama_kelurahan' => strtoupper($kec[2]),
                    'kec_id' => $kec[1],
                ];
            }
        }
        // dd($kelArr);
        DB::table('kelurahan')->insert($kelArr);
    }
}
