@php
    error_reporting(0);
    use Carbon\Carbon;
@endphp
<table style="border-collapse: collapse;">
    <thead>
        <tr>
            <th rowspan="2" style="text-align: center; ">NO.</th>
            <th rowspan="2" style="text-align: center; ">NIK</th>
            <th rowspan="2" style="text-align: center; ">NAMA</th>
            <th rowspan="2" style="text-align: center; ">TANGGAL LAHIR
            </th>
            <th rowspan="2" style="text-align: center; ">ALAMAT</th>
            <th rowspan="2" style="text-align: center; ">PEKERJAAN</th>
            <th rowspan="2" style="text-align: center; ">PENDIDIKAN
                TERAKHIR</th>
            <th colspan="{{ count($headPertanyaan) }}" class="border_top border_right border_bottom"
                style="text-align: center; ">KUISIONER CALON PENGANTIN</th>
        </tr>
        <tr>
            @foreach ($headPertanyaan as $pertanyaan)
                <th style="text-align: center; vertical-align: top;">
                    {{ $pertanyaan->nama }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($catins as $index => $v)
            <tr>
                <td style="text-align: center;">{{ $index + 1 }}</td>
                <td>"{{ $v->nik }}</td>
                <td>{{ strtoupper($v->nama) }}</td>
                <td>
                    {{ Carbon::createFromFormat('Y-m-d', $v->tanggal_lahir)->format('d/m/Y') }}</td>
                <td>{{ strtoupper($v->alamat) }}</td>
                <td>{{ strtoupper($v->pekerjaan) }}</td>
                <td>{{ strtoupper($v->status_pendidikan) }}</td>
                @foreach ($headPertanyaan as $pertanyaan)
                    @if (count($v->kuisCatin) > 0)
                        @foreach ($v->kuisCatin as $a)
                            @if ($pertanyaan->id == $a->id_quisioner_catin)
                                <td style="text-align: center;">{{ strtoupper($a->detail) }}</td>
                            @endif
                        @endforeach
                    @else
                        <td style="text-align: center;">-</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
