<?php

namespace App\Exports;

use App\Models\Catin;
use App\Models\QusionerCatin;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class CatinExport implements FromView, WithEvents, ShouldAutoSize, WithTitle
{
    public function title(): string
    {
        return "Calon Pengantin";
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getPageSetup()->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_A4);
                $event->sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                // $event->sheet->getDelegate()->setAutoFilter('G5');

                // HEADER
                $cellHeaderTable = 'A1:R2';
                // $event->sheet->getDelegate()->getStyle($cellHeaderTable)->getFont()->setSize(13);
                $event->sheet->getDelegate()->getStyle($cellHeaderTable)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellHeaderTable)->applyFromArray(
                    [
                        'alignment' => [
                            'horizontal' => Alignment::HORIZONTAL_CENTER,
                            'vertical' => Alignment::VERTICAL_CENTER,
                            'wrapText' => true,
                        ]
                    ]
                );

                // HEADER & BODY
                $cellRange = 'A3:R' . count(Catin::all());
                $styleArray = [
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['black'],
                        ]
                    ]
                ];
                $event->sheet->getStyle($cellRange)->applyFromArray($styleArray);
            }
        ];
    }

    public function view(): View
    {
        $catins = Catin::get();
        $pertanyaans = QusionerCatin::all();
        $data = [
            'headPertanyaan' => $pertanyaans,
            'catins' => $catins,
        ];
        return view('catin.export.catin-quiz', $data);
    }
}
