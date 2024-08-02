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
            ['name' => 'BPJS PBI'],
            ['name' => 'BPJS Non PBI'],
            ['name' => 'Tidak Terdaftar'],
        ];
        foreach ($datas as $data) {
            JenisBpjs::create($data);
        }
    }
}
