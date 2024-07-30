<?php

namespace Database\Seeders;

use App\Helpers\Wilayah\WilayahHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provArr = [];
        $kabArr = [];
        $kecArr = [];
        $data = (new WilayahHelper)->getWilayah();
        $provinsi = $data['provinsi'];
        $kabupaten = $data['kabupaten'];
        $kecamatan = $data['kecamatan'];

        foreach ($provinsi as $keyProv => $valueProv) {
            $provArr[] = [
                'id' => $keyProv,
                'nama_provinsi' => $valueProv
            ];
            foreach ($kabupaten[$keyProv] as $keyKab => $valueKab) {
                $keyPK = $keyProv . $keyKab;
                $kabArr[] = [
                    'id' => $keyPK,
                    'nama_kabupaten' => $valueKab,
                    'prov_id' => $keyProv
                ];
                foreach ($kecamatan[$keyPK] as $keyKec => $valueKec) {
                    $keyPKK = $keyPK . $keyKec;
                    $kecArr[] = [
                        'id' => $keyPKK,
                        'nama_kecamatan' => $valueKec,
                        'kab_id' => $keyPK,
                    ];
                }
            }
        }
        DB::table('provinsi')->insert($provArr);
        DB::table('kabupaten')->insert($kabArr);
        DB::table('kecamatan')->insert($kecArr);
    }
}
