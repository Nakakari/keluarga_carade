@extends('layouts.main')
<?php
use App\Models\DataAnggotaKeluarga;

?>
@section('content')
    <div class="flex-col space-y-10">
        <div class="flex gap-2">
            @if (Auth::user()->roles == 'admin')
                <a href="/kuesioner/export"
                    class="bg-orange-500 hover:bg-orange-400 active:bg-orange-600 text-white px-5 py-2 rounded">Export
                    Data</a>
            @endif
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
@endsection
