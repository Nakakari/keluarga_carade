<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['nama' => 'Puskesmas Bulu Doang'],
            ['nama' => 'Puskesmas Barana'],
            ['nama' => 'Puskesmas Bangkala'],
            ['nama' => 'Puskesmas Bontoramba'],
            ['nama' => 'Puskesmas Bulusibatang'],
            ['nama' => 'Puskesmas Tamalatea'],
            ['nama' => 'Puskesmas Embo'],
            ['nama' => 'Puskesmas Bululoe'],
            ['nama' => 'Puskesmas Binamu Kota'],
            ['nama' => 'Puskesmas Tolo'],
            ['nama' => 'Puskesmas Arungkeke'],
            ['nama' => 'Puskesmas Togo-Togo'],
            ['nama' => 'Puskesmas Tarowang'],
            ['nama' => 'Puskesmas Tino'],
        ];

        DB::table('puskesmas')->insert($datas);
    }
}
