@extends('layouts.main')
<?php
use Carbon\Carbon;
use App\Models\Settings\wilayah\{Provinsi, Kelurahan, Kabupaten, Kecamatan};
?>
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <button id="export-button" class="btn btn-success mb-3">Export to Excel</button>

                {{-- {!! $keluarga->links('pagination::bootstrap-4') !!} --}}
                <table class="table table-bordered text-nowrap" id="data-table">
                    <thead>
                        <tr>
                            <td rowspan="2">No</td>
                            <td rowspan="2">Nama Pengisi</td>
                            <td colspan="10" align="center">Data Identitas Rumah</td>
                            <td colspan="8" align="center">Data Anggota Keluarga</td>
                            <td colspan="{{ count(getQuestionPerCategory('Baduta')) }}" align="center">Baduta</td>
                            <td colspan="{{ count(getQuestionPerCategory('Anak SD')) }}" align="center">Anak SD</td>
                            <td colspan="{{ count(getQuestionPerCategory('Remaja Putri')) }}" align="center">Remaja
                                Putri</td>
                            <td colspan="{{ count(getQuestionPerCategory('Ibu atau Ibu Hamil')) }}" align="center">Ibu
                                atau Ibu Hamil</td>
                            <td colspan="{{ count(getQuestionPerCategory('Lingkungan')) }}" align="center">Lingkungan
                            </td>
                        </tr>
                        <tr>
                            <td>No Kartu Keluarga</td>
                            <td>Wilayah Kerja Puskesma</td>
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
                            <td>Umur </td>
                            <td>Status</td>
                            <td>Status Pendidikan</td>
                            <td>Pekerjaan</td>

                            @foreach (getQuestionPerCategory('Baduta') as $row)
                                <td>{{ $row->question }}</td>
                            @endforeach

                            @foreach (getQuestionPerCategory('Anak SD') as $row)
                                <td>{{ $row->question }}</td>
                            @endforeach

                            @foreach (getQuestionPerCategory('Remaja Putri') as $row)
                                <td>{{ $row->question }}</td>
                            @endforeach

                            @foreach (getQuestionPerCategory('Ibu atau Ibu Hamil') as $row)
                                <td>{{ $row->question }}</td>
                            @endforeach

                            @foreach (getQuestionPerCategory('Lingkungan') as $row)
                                <td>{{ $row->question }}</td>
                            @endforeach

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keluarga as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ isset($row->data_keluarga->data_anggota_keluarga->answers[0]->user->name) ? $row->data_keluarga->data_anggota_keluarga->answers[0]->user->name : '' }}
                                </td>
                                <td>'{{ $row->nomor_kk }}</td>
                                <td>{{ isset($row->data_keluarga) ? $row->data_keluarga->wilayah_kerja_puskesmas : '' }}
                                </td>
                                <td> {{ isset($row->data_keluarga) ? (new Provinsi())->getProvinsi($row->data_keluarga->provinsi) : '' }}
                                </td>
                                <td> {{ isset($row->data_keluarga) ? (new Kabupaten())->getKabupaten($row->data_keluarga->kabkot) : '' }}
                                </td>
                                <td> {{ isset($row->data_keluarga) ? (new Kecamatan())->getKecamatan($row->data_keluarga->kecamatan) : '' }}
                                </td>
                                <td> {{ isset($row->data_keluarga) ? (new Kelurahan())->getKelurahan($row->data_keluarga->kelurahan) : '' }}
                                </td>
                                <td>{{ isset($row->data_keluarga) ? $row->data_keluarga->rt : '' }} /
                                    {{ isset($row->data_keluarga) ? $row->data_keluarga->rw : '' }}</td>
                                <td>
                                    {{ isset($row->data_keluarga) ? $row->data_keluarga->lat : '' }}
                                </td>
                                <td>{{ isset($row->data_keluarga) ? $row->data_keluarga->long : '' }}</td>

                                <td>'{{ $row->nik }}</td>
                                <td>{{ $row->nama }}</td>
                                {{-- <td>{{ $row->data_keluarga->data_anggota_keluarga ? $row->data_keluarga->data_anggota_keluarga->nama : ' ' }} --}}
                                {{-- </td> --}}
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->status_pernikahan }}</td>
                                <td>{{ Carbon::createFromFormat('Y-m-d', $row->tanggal_kelahiran)->format('d/m/Y') }}</td>
                                <td>{{ $row->umur }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ $row->status_pendidikan }}</td>
                                <td>{{ $row->pekerjaan }}</td>

                                {{--
                                <td>{{ $row->data_keluarga->data_anggota_keluarga ? $row->data_keluarga->data_anggota_keluarga->tanggal_kelahiran : ' ' }}
                                </td>
                                <td>{{ $row->data_keluarga->data_anggota_keluarga ? $row->data_keluarga->data_anggota_keluarga->umur : ' ' }}
                                </td>
                                <td>{{ $row->data_keluarga->data_anggota_keluarga ? $row->data_keluarga->data_anggota_keluarga->status : ' ' }}
                                </td>
                                <td>{{ $row->data_keluarga->data_anggota_keluarga ? $row->data_keluarga->data_anggota_keluarga->status_pendidikan : ' ' }}
                                </td>
                                <td>{{ $row->data_keluarga->data_anggota_keluarga ? $row->data_keluarga->data_anggota_keluarga->pekerjaan : ' ' }}
                                </td>

 --}}
                                @foreach (getQuestionPerCategory('Baduta') as $question)
                                    <td>{{ getAnswer($question->id, $row->id) ? getAnswer($question->id, $row->id)->answer : '' }}
                                    </td>
                                @endforeach


                                @foreach (getQuestionPerCategory('Anak SD') as $question)
                                    <td>{{ getAnswer($question->id, $row->id) ? getAnswer($question->id, $row->id)->answer : '' }}
                                    </td>
                                @endforeach

                                @foreach (getQuestionPerCategory('Remaja Putri') as $question)
                                    <td>{{ getAnswer($question->id, $row->id) ? getAnswer($question->id, $row->id)->answer : '' }}
                                    </td>
                                @endforeach

                                @foreach (getQuestionPerCategory('Ibu atau Ibu Hamil') as $question)
                                    <td>{{ getAnswer($question->id, $row->id) ? getAnswer($question->id, $row->id)->answer : '' }}
                                    </td>
                                @endforeach

                                @foreach (getQuestionPerCategory('Lingkungan') as $question)
                                    <td>{{ getAnswer($question->id, $row->id) ? getAnswer($question->id, $row->id)->answer : '' }}
                                    </td>
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
            // Select the table element
            var table = document.getElementById('data-table');

            // Create a new workbook and worksheet
            var workbook = XLSX.utils.book_new();
            var worksheet = XLSX.utils.table_to_sheet(table);

            // Add the worksheet to the workbook
            XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

            // Generate and download the Excel file
            XLSX.writeFile(workbook, 'exported_table.xlsx');
            // window.open('{{ route('kuisioner.cetak-export') }}');
        });
    </script>
@endsection
