@extends('layouts.main')
<?php
use Carbon\Carbon;
?>
@section('content')
    <div class="flex-col space-y-10">
        <div>
            <a href="{{ route('catin.create') }}"
                class="font-bold text-white bg-green-600 hover:bg-green-500 active:bg-green-700 px-5 py-2.5 rounded">+ Tambah
                Data</a>
            <a onclick="exportData('btnExcel')"
                class="font-bold text-white bg-red-600 hover:bg-red-500 active:bg-red-700 px-5 py-2.5 rounded">Export
                Excel</a>
            <a onclick="exportData('btnPdf')"
                class="font-bold text-white bg-red-600 hover:bg-red-500 active:bg-red-700 px-5 py-2.5 rounded">Export
                PDF</a>
        </div>
        <div class="overflow-x-scroll scrollbar-hide">
            <table class="w-full mx-auto border-collapse border border-slate-200" id="table-catin">
                <thead class="bg-orange-300 h-14">
                    <tr>
                        <th class="text-center border border-slate-200">No</th>
                        <th class="text-center border border-slate-200">NIK</th>
                        <th class="text-center border border-slate-200">Nama</th>
                        <th class="text-center border border-slate-200">Umur</th>
                        <th class="text-center border border-slate-200">Alamat</th>
                        <th class="text-center border border-slate-200">Pekerjaan</th>
                        <th class="text-center border border-slate-200">Pendidikan Terakhir</th>
                        <th class="text-center border border-slate-200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($catins as $dt)
                        <tr>
                            <td class="text-center border border-slate-200 py-2">{{ $no++ }}</td>
                            <td class="text-center border border-slate-200 py-2">{{ $dt->nik }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->nama }}</td>
                            <td class="border border-slate-200 py-2 text-center">
                                {{ Carbon::parse($dt->tanggal_lahir)->age }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->alamat }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->pekerjaan }}</td>
                            <td class="border border-slate-200 py-2 text-center">{{ $dt->status_pendidikan }}</td>
                            <td class="border border-slate-200 py-2 text-center">
                                @if (Auth::user()->roles === 'admin')
                                    <div class="flex gap-5 justify-center items-center">
                                        @if (count($dt->kuisCatin) > 0)
                                            <a href="{{ route('catin.edit-quiz', $dt->id) }}"
                                                class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit
                                                Quiz</a>
                                            <button data-id="{{ $dt->id }}"
                                                class="btn-delete-quiz font-semibold text-white rounded px-5 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600">Hapus
                                                Quiz</button>
                                        @else
                                            <a href="{{ route('catin.quiz', $dt->id) }}"
                                                class="font-semibold text-white rounded px-5 py-2 bg-blue-500 hover:bg-blue-400 active:bg-blue-600">Quiz</a>
                                        @endif

                                        <a href="{{ route('catin.edit', $dt->id) }}"
                                            class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit</a>
                                        <button type="button"
                                            class="btn-delete font-semibold text-white rounded px-4 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600"
                                            data-id="{{ $dt->id }}">Hapus</button>
                                    </div>
                                @else
                                    <div class="flex gap-5 justify-center items-center">
                                        @if (count($dt->kuisCatin) > 0)
                                            <a href="{{ route('catin.edit-quiz', $dt->id) }}"
                                                class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit
                                                Quiz</a>
                                            <button data-id="{{ $dt->id }}"
                                                class="btn-delete-quiz font-semibold text-white rounded px-5 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600">Hapus
                                                Quiz</button>
                                        @else
                                            <a href="{{ route('catin.quiz', $dt->id) }}"
                                                class="font-semibold text-white rounded px-5 py-2 bg-blue-500 hover:bg-blue-400 active:bg-blue-600">Quiz</a>
                                        @endif

                                        <a href="{{ route('catin.edit', $dt->id) }}"
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
            $('#table-catin').DataTable();
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
                            url: "{{ route('catin.delete', ['id' => ':id']) }}"
                                .replace(':id',
                                    id),
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
                                    text: 'Data gagal dihapus!  (atau Hapus hasil quiz yang bersangkutan dahulu.)',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })
                    }
                });
            })

            $(document).on("click", ".btn-delete-quiz", function() {
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
                            url: "{{ route('catin.quiz-delete', ['id' => ':id']) }}"
                                .replace(':id',
                                    id),
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

        function exportData(btnType) {
            window.open('{{ route('catin.export') }}?' +
                'btnType=' + btnType
            );
        }
    </script>
@endsection
