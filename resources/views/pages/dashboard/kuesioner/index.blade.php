@extends('layouts.main')
<?php
use App\Models\DataAnggotaKeluarga;

?>
@section('content')
    <div class="flex-col space-y-10">
        <div class="grid gap-6 mb-2 md:grid-cols-2 py-0">
            <div class="min-w-0 bg-white rounded-lg shadow-xs dark:bg-gray-700">
                {{-- <form action="{{ url('dashboard') }}" method="GET"> --}}
                <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="kabkot" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Kabupaten/Kota :
                        </label>
                        <select
                            class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                            id="kabkot" onchange="getKecamatanByKabupaten(this.value);">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="kecamatan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Kecamatan :
                        </label>
                        <select
                            class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                            id="kecamatan" onchange="getKelurahanByKecamatan(this.value);">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="Desa" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Desa :
                        </label>
                        <select name="kelurahan"
                            class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                            id="desa" required>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        @if (Auth::user()->roles == 'admin')
                            <label for="Aksi" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Export
                            </label>
                            <a onclick="exportExcel()"
                                class="bg-orange-500 hover:bg-orange-400 active:bg-orange-600 text-white px-5 py-2 rounded">Export
                                Data</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-scroll scrollbar-hide">
            <table class="w-full mx-auto border-collapse border border-slate-200" id="table-anggota">
                <thead class="bg-orange-300 h-14">
                    <tr>
                        <th class="text-center border border-slate-200">No</th>
                        <th class="text-center border border-slate-200">Nomor KK</th>
                        <th class="text-center border border-slate-200">Data Keluarga</th>
                        <th class="text-center border border-slate-200">Point Kuesioner</th>
                        <th class="text-center border border-slate-200">Point Pengetahuan</th>
                        <th class="text-center border border-slate-200">Kriteria Keluarga</th>
                        @if (Auth::user()->roles == 'admin')
                            <th class="text-center border border-slate-200">Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    {{ $paginator->appends(['page' => $paginator->currentPage()])->links() }}
                    @php
                        $no = 1;
                    @endphp
                    @for ($i = 0; $i < count($res); $i++)
                        <tr>
                            <td class="text-center border border-slate-200 py-2" style="vertical-align: top;">
                                {{ $no++ }}</td>
                            <td class="text-center border border-slate-200 py-2" style="vertical-align: top;">
                                {{ $res[$i]['nomor_kk'] }}</td>
                            <td class="border border-slate-200 py-2">
                                <table width="100%">
                                    <tr>
                                        <th class="text-center border border-slate-200">No</th>
                                        <th class="text-center border border-slate-200">NIK</th>
                                        <th class="text-center border border-slate-200">Nama</th>
                                        <th class="text-center border border-slate-200">Status</th>
                                        <th class="text-center border border-slate-200">Kriteria Stunting</th>
                                        <th class="text-center border border-slate-200">Presentase Individu</th>
                                    </tr>
                                    <?php
                                    $status = (new DataAnggotaKeluarga())->statusStunting($res[$i]['anggota_keluarga']);
                                    ?>
                                    @foreach ($res[$i]['anggota_keluarga'] as $key => $item)
                                        <tr>
                                            <td class="border border-slate-200 py-2">{{ $key + 1 }}.</td>
                                            <td class="border border-slate-200 py-2">
                                                {{ $item->nik }}</td>
                                            <td class="border border-slate-200 py-2">{{ $item->nama }}</td>
                                            <td class="border border-slate-200 py-2">{{ $item->status }}</td>
                                            <td class="border border-slate-200 py-2">
                                                {{ $status[$item->id] }}</td>
                                            <td class="text-right border border-slate-200 py-2">
                                                <?php
                                                $hasil = (new DataAnggotaKeluarga())->getHasilIndividu($item->id);
                                                ?>
                                                @if ($item->status == 'Lainnya')
                                                    Tidak Dapat Mengisi
                                                @else
                                                    {{ $hasil . '%' }}
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                            <td class="border border-slate-200 py-2 text-right" style="vertical-align: top;">
                                {{ round($res[$i]['persen_kuesioner'], 0) }}%</td>
                            <td class="border border-slate-200 py-2 text-right" style="vertical-align: top;">
                                {{ round($res[$i]['persen_pengetahuan'], 0) }}%</td>
                            <td class="border border-slate-200 py-2 text-center" style="vertical-align: top;">
                                @if ($res[$i]['jumlah_pengetahuan'] < 1 && $res[$i]['persen_kuesioner'] == 100)
                                    Keluarga Cara'de'
                                @else
                                    @if ($res[$i]['persen_kuesioner'] == 100 && $res[$i]['persen_pengetahuan'] > 50)
                                        Keluarga Cara'de'
                                    @else
                                        Menuju Keluarga Cara'de'
                                    @endif
                                @endif
                            </td>
                            @if (Auth::user()->roles == 'admin')
                                <td class="border border-slate-200 py-2 text-center" style="vertical-align: top;">
                                    <div class="flex gap-5 justify-center items-center">
                                        <!-- <a href="/kuesioner/{{ $res[$i]['nomor_kk'] }}/edit" class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit</a> -->
                                        <button type="button"
                                            class="btn-delete font-semibold text-white rounded px-4 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600"
                                            data-nomor_kk="{{ $res[$i]['nomor_kk'] }}">Hapus</button>
                                        <!-- <a href="/kuesioner/cetak/{{ $res[$i]['nomor_kk'] }}" class="font-semibold text-white rounded px-5 py-2 bg-blue-500 hover:bg-blue-400 active:bg-blue-600">Cetak</a> -->
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table-anggota').DataTable();
            $(document).on("click", ".btn-delete", function() {
                let nomor_kk = $(this).data("nomor_kk");
                Swal.fire({
                    icon: 'question',
                    title: 'Apakah anda yakin?',
                    text: 'Data yang dihapus tidak dapat dikembalikan!',
                    showCancelButton: true,
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal',
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#OEOEOE',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/kuesioner/" + nomor_kk,
                            type: "DELETE",
                            cache: false,
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            dataType: "json",
                            success: function(data) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Data berhasil dihapus!',
                                    showConfirmButton: false,
                                    timer: 1000
                                })
                                setInterval('location.reload()', 1500);
                            },
                            error: function(data) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: 'Data gagal dihapus!',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        let provinsi_id = 73;
        let kab_select = '';
        let kec_select = '';
        let req_kel = `{{ request()->get('kelurahan') ?? '' }}`;

        if (req_kel != '' || req_kel != null || req_kel != undefined) {
            kab_select = req_kel.slice(0, 4)
            kec_select = req_kel.slice(0, 6)

            getKecamatanByKabupaten(kab_select)
            getKelurahanByKecamatan(kec_select)
        }

        getKabupatenByProvinsi(provinsi_id);

        function getKabupatenByProvinsi(provinsi_id) {
            var kabupatenSelect = $("#kabkot");
            $.ajax({
                url: '{{ route('base-wilayah.get-kabupaten') }}',
                type: 'GET',
                data: {
                    provinsi_id: provinsi_id
                }
            }).then(function(response) {
                kabupatenSelect.empty();
                kabupatenSelect.append('<option value="">Silahkan Pilih</option>');
                $('#kabkot').val('');
                response.forEach(function(val) {
                    if (val.id == kab_select) {
                        kabupatenSelect.append('<option selected value="' + val.id + '">' + val
                            .nama_kabupaten +
                            '</option>');
                    } else {
                        kabupatenSelect.append('<option value="' + val.id + '">' + val.nama_kabupaten +
                            '</option>');
                    }
                });
            });
        }

        function getKecamatanByKabupaten(kabupaten_id) {
            var kecamatanSelect = $("#kecamatan");
            $.ajax({
                url: '{{ route('base-wilayah.get-kecamatan') }}',
                type: 'GET',
                data: {
                    kabupaten_id: kabupaten_id
                }
            }).then(function(response) {
                kecamatanSelect.empty();
                kecamatanSelect.append('<option value="">Silahkan Pilih</option>');
                $('#kecamatan').val('');
                response.forEach(function(val) {
                    if (val.id == kec_select) {
                        kecamatanSelect.append('<option selected value="' + val.id + '">' + val
                            .nama_kecamatan +
                            '</option>');
                    } else {
                        kecamatanSelect.append('<option value="' + val.id + '">' + val.nama_kecamatan +
                            '</option>');
                    }
                });
            });
        }

        function getKelurahanByKecamatan(kecamatan_id) {
            var kelurahanSelect = $("#desa");
            $.ajax({
                url: '{{ route('base-wilayah.get-kelurahan') }}',
                type: 'GET',
                data: {
                    kecamatan_id: kecamatan_id
                }
            }).then(function(response) {
                kelurahanSelect.empty();
                kelurahanSelect.append('<option value="">Silahkan Pilih</option>');
                $('#desa').val('');
                response.forEach(function(val) {
                    if (val.id == req_kel) {
                        kelurahanSelect.append('<option selected value="' + val.id + '">' + val
                            .nama_kelurahan +
                            '</option>');
                    } else {
                        kelurahanSelect.append('<option value="' + val.id + '">' + val.nama_kelurahan +
                            '</option>');
                    }
                });
            });
        }

        function exportExcel() {
            window.open('/kuesioner/export?' +
                'kabkot=' + $("#kabkot").val() +
                '&kecamatan=' + $("#kecamatan").val() +
                '&desa=' + $("#desa").val()
            );
        }
    </script>
@endsection
