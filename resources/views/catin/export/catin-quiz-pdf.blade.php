<html>
<?php

use Carbon\Carbon;
?>
<style>
    .border_top {
        border-top: 1px solid black;
    }

    .border_right {
        border-right: 1px solid black;
    }

    .border_bottom {
        border-bottom: 1px solid black;
    }

    .border_left {
        border-left: 1px solid black;
    }

    .border_all {
        border: 1px solid black;
    }

    .border_all_non_top {
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        border-left: 1px solid black;
    }

    .border_all_non_left {
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
    }

    .border_all_non_right {
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        border-left: 1px solid black;
    }
</style>

<table style="border-collapse: collapse;" width="100%">
    <thead>
        <tr>
            <th rowspan="2" class="border_all" style="text-align: center; ">NO.</th>
            <th rowspan="2" class="border_top border_right border_bottom" style="text-align: center; ">NIK</th>
            <th rowspan="2" class="border_top border_right border_bottom" style="text-align: center; ">NAMA</th>
            <th rowspan="2" class="border_top border_right border_bottom" style="text-align: center; ">TANGGAL LAHIR
            </th>
            <th rowspan="2" class="border_top border_right border_bottom" style="text-align: center; ">ALAMAT</th>
            <th rowspan="2" class="border_top border_right border_bottom" style="text-align: center; ">PEKERJAAN</th>
            <th rowspan="2" class="border_top border_right border_bottom" style="text-align: center; ">PENDIDIKAN
                TERAKHIR</th>
            <th colspan="{{ count($headPertanyaan) }}" class="border_top border_right border_bottom"
                style="text-align: center; ">KUISIONER CALON PENGANTIN</th>
        </tr>
        <tr>
            @foreach ($headPertanyaan as $pertanyaan)
                <th class="border_top border_right border_bottom" style="text-align: center; vertical-align: top;">
                    {{ $pertanyaan->nama }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($catins as $index => $v)
            <tr>
                <td class="border_all_non_right" style="text-align: center;">{{ $index + 1 }}</td>
                <td class="border_all_non_right">{{ $v->nik }}</td>
                <td class="border_all_non_right">{{ strtoupper($v->nama) }}</td>
                <td class="border_all_non_right">
                    {{ Carbon::createFromFormat('Y-m-d', $v->tanggal_lahir)->format('d/m/Y') }}</td>
                <td class="border_all_non_right">{{ strtoupper($v->alamat) }}</td>
                <td class="border_all_non_right">{{ strtoupper($v->pekerjaan) }}</td>
                <td class="border_all">{{ strtoupper($v->status_pendidikan) }}</td>
                @foreach ($headPertanyaan as $pertanyaan)
                    @if (count($v->kuisCatin) > 0)
                        @foreach ($v->kuisCatin as $a)
                            @if ($pertanyaan->id == $a->id_quisioner_catin)
                                <td class="border_all" style="text-align: center;">{{ strtoupper($a->detail) }}</td>
                            @endif
                        @endforeach
                    @else
                        <td class="border_all" style="text-align: center;">-</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
