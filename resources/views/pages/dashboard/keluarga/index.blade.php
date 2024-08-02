@extends('layouts.main')
<?php
use App\Models\Settings\wilayah\{Provinsi, Kelurahan, Kabupaten, Kecamatan};
?>
@section('content')
    <div class="flex-col space-y-10">
        <div>
            <a href="/data_keluarga/create"
                class="font-bold text-white bg-green-600 hover:bg-green-500 active:bg-green-700 px-5 py-2.5 rounded">+ Tambah
                Data</a>
        </div>
        <div class="overflow-x-scroll scrollbar-hide">
            <table class="w-full mx-auto border-collapse border border-slate-200" id="table-family">
                <thead class="bg-orange-300 h-14">
                    <tr>
                        <th class="text-center border border-slate-200">No</th>
                        <th class="text-center border border-slate-200">Nomor KK</th>
                        <th class="text-center border border-slate-200">Wilayah Kerja Puskesmas</th>
                        <th class="text-center border border-slate-200">Provinsi</th>
                        <th class="text-center border border-slate-200">Kabupaten</th>
                        <th class="text-center border border-slate-200">Kecamatan</th>
                        <th class="text-center border border-slate-200">Kelurahan</th>
                        <th class="text-center border border-slate-200">RT/RW</th>
                        <th class="text-center border border-slate-200">Titik Kordinat</th>
                        <th class="text-center border border-slate-200">Ketenagakerjaan</th>
                        <th class="text-center border border-slate-200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-center border border-slate-200 py-2">{{ $no++ }}</td>
                            <td class="text-center border border-slate-200 py-2"><a
                                    href="/data_anggota_keluarga/{{ $dt->nomor_kk }}">{{ $dt->nomor_kk }}</a></td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->wilayah_kerja_puskesmas }}</td>
                            <td class="border border-slate-200 py-2 text-center">
                                {{ (new Provinsi())->getProvinsi($dt->provinsi) }}</td>
                            <td class="border border-slate-200 py-2 text-center">
                                {{ (new Kabupaten())->getKabupaten($dt->kabkot) }}</td>
                            <td class="border border-slate-200 py-2 text-center">
                                {{ (new Kecamatan())->getKecamatan($dt->kecamatan) }}</td>
                            <td class="border border-slate-200 py-2 text-center">
                                {{ (new Kelurahan())->getKelurahan($dt->kelurahan) }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->rt }} / {{ $dt->rw }}
                            </td>
                            <td class="border border-slate-200 py-2">{{ $dt->lat }}, {{ $dt->long }}</td>
                            <td class="border border-slate-200 py-2">
                                Terdaftar BPJS : {{ $dt->is_bpjs }}<br>
                                Jenis BPJS : {{ isset($dt->jenisBpjs) ? $dt->jenisBpjs->name : 'Belum Terdaftar' }}<br>
                                Pendapatan : {{ number_format($dt->pendapatan, 0, ',', '.') }}
                            </td>
                            <td class="border border-slate-200 py-2 text-center">
                                @if (Auth::user()->roles === 'admin')
                                    <div class="flex gap-5 justify-center items-center">
                                        <a href="/kuesioner/create/{{ $dt->nomor_kk }}/{{ $dt->id }}"
                                            class="font-semibold text-white rounded px-5 py-2 bg-blue-500 hover:bg-blue-400 active:bg-blue-600">Quiz</a>
                                        <a href="/data_keluarga/{{ $dt->id }}/edit"
                                            class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit</a>
                                        <button type="button"
                                            class="btn-delete font-semibold text-white rounded px-4 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600"
                                            data-id="{{ $dt->id }}">Hapus</button>
                                    </div>
                                @else
                                    <div class="flex gap-5 justify-center items-center">
                                        <a href="/kuesioner/create/{{ $dt->nomor_kk }}/{{ $dt->id }}"
                                            class="font-semibold text-white rounded px-5 py-2 bg-blue-500 hover:bg-blue-400 active:bg-blue-600">Quiz</a>
                                        <a href="/data_keluarga/{{ $dt->id }}/edit"
                                            class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit</a>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table-family').DataTable();
            $(document).on("click", ".btn-delete", function() {
                let id = $(this).data("id");
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
                            url: "/data_keluarga/" + id,
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
            })
        });
    </script>
@endsection
