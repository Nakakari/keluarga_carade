@extends('layouts.main')
<?php
use Carbon\Carbon;
use App\Models\Settings\wilayah\{Provinsi, Kelurahan, Kabupaten, Kecamatan};
?>
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <button id="export-button" class="btn btn-success mb-3">Export to Excel</button>
                {!! $keluarga->appends(request()->except('page'))->links('pagination::bootstrap-4') !!}

                <table class="table table-bordered text-nowrap" id="data-table">
                    <thead>
                        <tr>
                            <td rowspan="2">No</td>
                            <td rowspan="2">Nama Pengisi</td>
                            <td colspan="10" align="center">Data Identitas Rumah</td>
                            <td colspan="8" align="center">Data Anggota Keluarga</td>
                            @foreach ($questions as $category => $categoryQuestions)
                                <td colspan="{{ count($categoryQuestions) }}" align="center">{{ $category }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>No Kartu Keluarga</td>
                            <td>Wilayah Kerja Puskesmas</td>
                            <td>Provinsi</td>
                            <td>Kab/Kota</td>
                            <td>Kecamatan</td>
                            <td>Kelurahan</td>
                            <td>Rt/Rw</td>
                            <td>Lat</td>
                            <td>Long</td>
                            <td>NIK</td>
                            <td>Nama</td>
                            <td>Jenis Kelamin</td>
                            <td>Status Pernikahan</td>
                            <td>Tanggal Kelahiran</td>
                            <td>Umur</td>
                            <td>Status</td>
                            <td>Status Pendidikan</td>
                            <td>Pekerjaan</td>
                            @foreach ($questions as $categoryQuestions)
                                @foreach ($categoryQuestions as $question)
                                    <td>{{ $question->question }}</td>
                                @endforeach
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keluarga as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->data_keluarga->data_anggota_keluarga->answers[0]->user->name ?? '' }}</td>
                                <td>'{{ $row->nomor_kk }}</td>
                                <td>{{ $row->data_keluarga->wilayah_kerja_puskesmas ?? '' }}</td>
                                <td>{{ (new Provinsi())->getProvinsi($row->provinsi) ?? '' }}</td>
                                <td>{{ (new Kabupaten())->getKabupaten($row->kabkot) ?? '' }}</td>
                                <td>{{ (new Kecamatan())->getKecamatan($row->kecamatan) ?? '' }}</td>
                                <td>{{ (new Kelurahan())->getKelurahan($row->kelurahan) ?? '' }}</td>
                                <td>{{ $row->data_keluarga->rt ?? '' }} / {{ $row->rw ?? '' }}</td>
                                <td>{{ $row->lat ?? '' }}</td>
                                <td>{{ $row->long ?? '' }}</td>
                                <td>'{{ $row->nik }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->status_pernikahan }}</td>
                                <td>{{ Carbon::createFromFormat('Y-m-d', $row->tanggal_kelahiran)->format('d/m/Y') }}</td>
                                <td>{{ $row->umur }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ $row->status_pendidikan }}</td>
                                <td>{{ $row->pekerjaan }}</td>

                                @foreach ($questions as $category => $categoryQuestions)
                                    @foreach ($categoryQuestions as $question)
                                        <td>{{ getAnswer($question->id, $row->id)->answer ?? '' }}</td>
                                    @endforeach
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

    <script>
        document.getElementById('export-button').addEventListener('click', function() {
            var table = document.getElementById('data-table');
            var workbook = XLSX.utils.book_new();
            var worksheet = XLSX.utils.table_to_sheet(table);
            XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');
            XLSX.writeFile(workbook, 'exported_table.xlsx');
        });
    </script>
@endsection
