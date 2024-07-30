@extends('layouts.main')

@section('content')
    <div class="flex-col space-y-10">
        <div class="flex gap-2">
            <a href="/data_keluarga"
                class="font-bold text-white bg-zinc-600 hover:bg-zinc-500 active:bg-zinc-700 px-5 py-2.5 rounded">Kembali</a>
            <a href="/data_anggota_keluarga/create/{{ $nomor_kk }}"
                class="font-bold text-white bg-green-600 hover:bg-green-500 active:bg-green-700 px-5 py-2.5 rounded">+ Tambah
                Data</a>
        </div>
        <div class="overflow-x-scroll scrollbar-hide">
            <table class="w-full mx-auto border-collapse border border-slate-200" id="table-anggota">
                <thead class="bg-orange-300 h-14">
                    <tr>
                        <th class="text-center border border-slate-200">No</th>
                        <th class="text-center border border-slate-200">NIK</th>
                        <th class="text-center border border-slate-200">Nama</th>
                        <th class="text-center border border-slate-200">Jenis Kelamin</th>
                        <th class="text-center border border-slate-200">Status Pernikahan</th>
                        <th class="text-center border border-slate-200">Tanggal Lahir</th>
                        <th class="text-center border border-slate-200">Umur</th>
                        <th class="text-center border border-slate-200">Status</th>
                        <th class="text-center border border-slate-200">Status Pendidikan</th>
                        <th class="text-center border border-slate-200">Pekerjaan</th>
                        <th class="text-center border border-slate-200">Kriteria Stunting</th>
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
                            <td class="text-center border border-slate-200 py-2">{{ $dt->nik }}</td>
                            <td class="text-center border border-slate-200 py-2">{{ $dt->nama }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->jenis_kelamin }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->status_pernikahan }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->tanggal_kelahiran }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->umur }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->status }}</td>
                            <td class="border border-slate-200 py-2">{{ $dt->status_pendidikan }}</td>
                            <td class="border border-slate-200 py-2">{{ $dt->pekerjaan }}</td>
                            <td class="border border-slate-200 py-2">
                                {{ $status[$dt->id] }}
                            </td>
                            <td class="border border-slate-200 py-2 text-center">
                                @if (Auth::user()->roles === 'admin')
                                    <div class="flex gap-5 justify-center items-center">
                                        <a href="/data_anggota_keluarga/{{ $dt->id }}/edit"
                                            class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit</a>
                                        @if ($dt->status !== 'Lainnya')
                                            <a href="/kuesioner/create/{{ $dt->nomor_kk }}/{{ $dt->id }}"
                                                class="font-semibold text-white rounded px-5 py-2 bg-blue-500 hover:bg-blue-400 active:bg-blue-600">Quiz</a>
                                        @endif
                                        <button type="button"
                                            class="btn-delete font-semibold text-white rounded px-4 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600"
                                            data-id="{{ $dt->id }}">Hapus</button>
                                    </div>
                                @else
                                    <div class="flex gap-5 justify-center items-center">
                                        @if ($dt->status !== 'Lainnya')
                                            <a href="/kuesioner/create/{{ $dt->nomor_kk }}/{{ $dt->id }}"
                                                class="font-semibold text-white rounded px-5 py-2 bg-blue-500 hover:bg-blue-400 active:bg-blue-600">Quiz</a>
                                        @endif
                                        <a href="/data_anggota_keluarga/{{ $dt->id }}/edit"
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
            $('#table-anggota').DataTable();
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
                            url: "/data_anggota_keluarga/" + id,
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
