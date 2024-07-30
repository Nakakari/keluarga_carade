@extends('layouts.main')

@section('content')
<div class="flex-col space-y-10">
    <div>
        <a href="/data_user/create" class="font-bold text-white bg-green-600 hover:bg-green-500 active:bg-green-700 px-5 py-2.5 rounded">+ Tambah Data</a>
    </div>
    <div class="overflow-x-scroll scrollbar-hide">
        <table class="w-full mx-auto border-collapse border border-slate-200" id="table-family">
            <thead class="bg-orange-300 h-14">
                <tr>
                    <th class="text-center border border-slate-200">No</th>
                    <th class="text-center border border-slate-200">Nama User</th>
                    <th class="text-center border border-slate-200">Email</th>
                    <th class="text-center border border-slate-200">Nomor Telepon</th>
                    <th class="text-center border border-slate-200">Roles</th>
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
                    <td class="text-center border border-slate-200 py-2">{{ $dt->name }}</td>
                    <td class="border border-slate-200 py-2 text-center">{{ $dt->email }}</td>
                    <td class="border border-slate-200 py-2 text-center">{{ $dt->phone }}</td>
                    <td class="border border-slate-200 py-2 text-center">{{ $dt->roles }}</td>
                    <td class="border border-slate-200 py-2 text-center">
                        <div class="flex gap-5 justify-center items-center">
                            <a href="/data_user/{{ $dt->id }}/edit" class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit</a>
                            <button type="button" class="btn-delete font-semibold text-white rounded px-4 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600" data-id="{{ $dt->id }}">Hapus</button>
                        </div>
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
                        url: "/data_user/" + id,
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