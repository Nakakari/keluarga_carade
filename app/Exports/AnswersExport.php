<?php

namespace App\Exports;

use App\Models\Answers;
use App\Models\DataKeluarga;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Reader\Xml\Style\NumberFormat;

class AnswersExport implements FromCollection, ShouldAutoSize, WithHeadings, WithEvents, WithTitle, WithColumnFormatting
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // $families = DB::select("SELECT * FROM answers JOIN data_keluargas ON answers.nomor_kk = data_keluargas.nomor_kk JOIN data_anggota_keluargas ON data_keluargas.nomor_kk = data_anggota_keluargas.nomor_kk GROUP BY answers.nomor_kk");
        // return new Collection($families);
        $export = [];
        $data = DataKeluarga::all();

        foreach ($data as $i => $row) {
            $answers = [];

            for ($questionId = 1; $questionId <= 105; $questionId++) {
                $answer = Answers::where('question_id', $questionId)
                    ->where('nomor_kk', $row->nomor_kk)
                    ->first();

                $answers[] = $answer ? $answer->answer : '--';
            }

            $export[] = [
                ($i + 1),
                $row->user->name,
                '"' . $row->nomor_kk,
                $row->wilayah_kerja_puskesmas,
                $row->provinsi,
                $row->kabkot,
                $row->kecamatan,
                $row->kelurahan,
                $row->rt,
                $row->rw,
                $row->lat,
                $row->long,
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->nama : ' ',
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->jenis_kelamin : ' ',
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->status_pernikahan : ' ',
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->tanggal_kelahiran : ' ',
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->umur : ' ',
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->status : ' ',
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->status_pendidikan : ' ',
                $row->data_anggota_keluarga ? $row->data_anggota_keluarga->pekerjaan : ' ',
            ] + $answers;
        }

        // dump($export);
        // die;
        return new Collection([$export]);
    }

    /**
     * @return array
     */
    public function headings(): array
    {

        return [
            [
                'No',
                'Nama pegawai',
                'Data Identitas Rumah',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                'Data Anggota keluarga',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                'Baduta',
                'Anak Usia sekolah',
                'Remaja putri',
                'Ibu hamil',
                'Lingkungan',
            ],
            [
                '',
                '',
                'No. Kartu Keluarga',
                'Wilayah Kerja Puskesmas',
                'Kab./Kota',
                'Provinsi',
                'Kecamatan',
                'Desa/Kelurahan',
                'dusun',
                'RT/RW',
                'Lat',
                'Long',

                // anggota keluarga

                'Nama',
                'Jenis Kelamin',
                'Status Menikah',
                'TTL',
                'Umur',
                'Status',
                'Penddikan',
                'Pekerjaan',






            ]
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->mergeCells('C1:L1');
                $event->sheet->mergeCells('M1:T1');
                $event->sheet->mergeCells('A1:A2');
                $event->sheet->mergeCells('B1:B2');
                $event->sheet->getDelegate()->getStyle('A1:HM2')
                    ->getAlignment()
                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            }
        ];
    }

    public function columnFormats(): array
    {
        return [];
    }

    public function title(): string
    {
        return 'test';
    }
}
