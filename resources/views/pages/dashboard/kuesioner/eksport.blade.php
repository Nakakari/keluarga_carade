<style>
    .table_keluarga {
        margin-top: 60px;
    }

    .table_keluarga:first-child {
        margin-top: 0px;
    }

    .page-break {
        page-break-after: always;
    }

    h3 {
        margin-top: 30px;
    }

    h3:first-child {
        margin-top: 0px;
    }
</style>

@foreach ($familys as $f)
    <div class="page-break">
        <table class="table_keluarga">
            <tr>
                <th style="width: 20%; text-align: left;">Nomor KK</th>
                <td style="width: 1%;">:</td>
                <td style="width: 20%; text-align: left;">{{ $f->nomor_kk }}</td>
                <td style="width: 100px;"></td>
                <th style="width: 20%; text-align: left;">Wilayah Kerja Puskesmas</th>
                <td style="width: 1%;">:</td>
                <td style="width: 20%; text-align: left;">{{ $f->wilayah_kerja_puskesmas }}</td>
            </tr>
            <tr>
                <th style="width: 20%; text-align: left;">Provinsi</th>
                <td style="width: 1%;">:</td>
                <td style="width: 20%; text-align: left;">{{ $f->provinsi }}</td>
                <td style="width: 100px;"></td>
                <th style="width: 20%; text-align: left;">Kabupaten/Kota</th>
                <td style="width: 1%;">:</td>
                <td style="width: 20%; text-align: left;">{{ $f->kabkot }}</td>
            </tr>
            <tr>
                <th style="width: 20%; text-align: left;">Kecamatan</th>
                <td style="width: 1%;">:</td>
                <td style="width: 20%; text-align: left;">{{ $f->kecamatan }}</td>
                <td style="width: 100px;"></td>
                <th style="width: 20%; text-align: left;">Desa/Kelurahan</th>
                <td style="width: 1%;">:</td>
                <td style="width: 20%; text-align: left;">{{ $f->kelurahan }}</td>`
            </tr>
        </table>
        <div style="margin-top: 30px; margin-bottom: 20px;">
            <table style="border: 1px solid black; border-collapse: collapse; width: 100%;">
                <thead>
                    <tr>
                        <th style="border: 1px solid black;">NIK</th>
                        <th style="border: 1px solid black;">Nama</th>
                        <th style="border: 1px solid black;">Jenis Kelamin</th>
                        <th style="border: 1px solid black;">Status Pernikahan</th>
                        <th style="border: 1px solid black;">Pendidikan</th>
                        <th style="border: 1px solid black;">Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members[$f->nomor_kk] as $m)
                        <tr>
                            <td style="border: 1px solid black;">{{ $m->nik }}</td>
                            <td style="border: 1px solid black;">{{ $m->nama }}</td>
                            <td style="border: 1px solid black;">
                                {{ $m->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                            <td style="border: 1px solid black;">{{ $m->status_pernikahan }}</td>
                            <td style="border: 1px solid black;">{{ $m->status_pendidikan }}</td>
                            <td style="border: 1px solid black;">{{ $m->pekerjaan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @foreach ($categorys[$f->nomor_kk] as $c)
            <h4 style="text-align: left; margin-bottom: 20px;">{{ $c->question_category }}</h4>
            @foreach ($subCategorys[$f->nomor_kk] as $s)
                @if ($c->question_category === $s->question_category)
                    <table
                        style="border: 1px solid black; border-collapse: collapse; margin-bottom: 20px; width: 100%;">
                        <thead>
                            <tr>
                                <th colspan="3" style="border: 1px solid black; text-align: center;">
                                    {{ $s->question_subcategory }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($questions[$f->nomor_kk] as $q)
                                @if ($s->question_category === $q->question_category && $s->question_subcategory === $q->question_subcategory)
                                    <tr>
                                        <td style="border: 1px solid black; text-align: center; width: 5%;">
                                            {{ $no++ }}</td>
                                        <td style="border: 1px solid black; text-align: left; width: 45%;">
                                            {{ $q->question }}</td>
                                        <td style="border: 1px solid black; text-align: left; width: 50%;">
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($answers[$f->nomor_kk][$q->question_id] as $a)
                                                @if ($a->question_id !== null)
                                                    - {{ $a->question_item }}<br>
                                                @elseif ($a->answer !== null)
                                                    - {{ $a->answer }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endif
            @endforeach
        @endforeach
    </div>
@endforeach
