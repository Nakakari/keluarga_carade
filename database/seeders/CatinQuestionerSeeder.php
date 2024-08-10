<?php

namespace Database\Seeders;

use App\Models\QusionerCatin;
use Illuminate\Database\Seeder;

class CatinQuestionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['id' => 1, 'nama' => 'Usia Saat akan Menikah', 'type' => 'text', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 2, 'nama' => 'Melakukan Pemeriksaan Kesehatan dan vaksin di Layanan Kesehatan', 'type' => 'checkbox', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 3, 'nama' => 'Tinggi Badan (cm)', 'type' => 'number', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 4, 'nama' => 'Berat Badan (kg)', 'type' => 'number', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 5, 'nama' => 'Lingkar lengan Atas / Lila (cm)', 'type' => 'number', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 6, 'nama' => 'Kadar Hemoglobin / HB (g/dl)', 'type' => 'number', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 7, 'nama' => 'Tempat Pemeriksaan Kesehatan dan vaksin', 'type' => 'radio', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 8, 'nama' => 'Memiliki sertifikat Elsimil', 'type' => 'radio', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 9, 'nama' => 'Mengikuti Bimbingan Pra Nikah di KUA', 'type' => 'radio', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 10, 'nama' => 'Terdaftar Kepesertaan BPJS Kesehatan', 'type' => 'radio', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
            ['id' => 11, 'nama' => 'Jenis BPJS Kesehatan', 'type' => 'radio', 'kategori' => 'catin', 'sub_kategori' => 'kuisioner'],
        ];
        foreach ($datas as $data) {
            QusionerCatin::create($data);
        }
    }
}
