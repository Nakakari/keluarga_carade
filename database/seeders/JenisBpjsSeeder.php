<?php

namespace Database\Seeders;

use App\Models\JenisBpjs;
use Illuminate\Database\Seeder;

class JenisBpjsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['nama' => 'BPJS PBI'],
            ['nama' => 'BPJS Non PBI'],
            ['nama' => 'Tidak Terdaftar'],
        ];
        foreach ($datas as $data) {
            JenisBpjs::create($data);
        }
    }
}
