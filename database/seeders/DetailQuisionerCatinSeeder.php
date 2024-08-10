<?php

namespace Database\Seeders;

use App\Models\DetailQuisionerCatin;
use Illuminate\Database\Seeder;

class DetailQuisionerCatinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['id_quisioner_catin' => 2, 'nama' => 'Pemeriksaan Kesehatan saja', 'point' => 0,],
            ['id_quisioner_catin' => 2, 'nama' => 'Vaksin saja', 'point' => 0,],
            ['id_quisioner_catin' => 2, 'nama' => 'Pemeriksaan Kesehatan dan vaksin', 'point' => 0,],
            ['id_quisioner_catin' => 2, 'nama' => 'Tidak memeriksakan dan tidak vaksin', 'point' => 0,],
            ['id_quisioner_catin' => 7, 'nama' => 'Puskesmas', 'point' => 0,],
            ['id_quisioner_catin' => 7, 'nama' => 'Posyandu', 'point' => 0,],
            ['id_quisioner_catin' => 7, 'nama' => 'Klinik/Praktik Dokter/Bidan/Perawat', 'point' => 0,],
            ['id_quisioner_catin' => 7, 'nama' => 'Rumah Sakit', 'point' => 0,],
            ['id_quisioner_catin' => 7, 'nama' => 'Kunjungan Petugas ke Rumah', 'point' => 0,],
            ['id_quisioner_catin' => 7, 'nama' => 'Bidan Desa', 'point' => 0,],
            ['id_quisioner_catin' => 7, 'nama' => 'Tidak Memeriksakan', 'point' => 0,],
            ['id_quisioner_catin' => 8, 'nama' => 'Ya', 'point' => 0,],
            ['id_quisioner_catin' => 8, 'nama' => 'Tidak', 'point' => 0,],
            ['id_quisioner_catin' => 9, 'nama' => 'Ya', 'point' => 0,],
            ['id_quisioner_catin' => 9, 'nama' => 'Tidak', 'point' => 0,],
            ['id_quisioner_catin' => 10, 'nama' => 'Ya', 'point' => 0,],
            ['id_quisioner_catin' => 10, 'nama' => 'Tidak', 'point' => 0,],
            ['id_quisioner_catin' => 11, 'nama' => 'BPJS PBI', 'point' => 0,],
            ['id_quisioner_catin' => 11, 'nama' => 'BPJS Non PBI', 'point' => 0,],
            ['id_quisioner_catin' => 11, 'nama' => 'Tidak terdaftar', 'point' => 0,],
        ];
        foreach ($datas as $data) {
            DetailQuisionerCatin::create($data);
        }
    }
}
