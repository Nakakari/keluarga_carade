@extends('layouts.main')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" id="form-add" action="{{ route('catin.update', $catin->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nik" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                NIK :
                            </label>
                            <input type="input" name="nik" maxlength="16" minlength="16" value="{{ $catin->nik }}"
                                class="nik appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Nomor Induk Kependudukan" onkeypress="return numbersonly(this, event);"
                                required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nama" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Nama :
                            </label>
                            <input type="text" name="nama" value="{{ $catin->nama }}"
                                class="nama appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Nama..." required>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="tanggal_lahir"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Tanggal Lahir :
                            </label>
                            <input type="date" name="tanggal_lahir" value="{{ $catin->tanggal_lahir }}"
                                class="tanggal_lahir appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Tanggal Kelahiran..." required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="status_pendidikan"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status Pendidikan :
                            </label>
                            <select name="status_pendidikan" id="status_pendidikan"
                                class="status_pendidikan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                required>
                                <option value="">Pilih Status Pendidikan</option>
                                <option value="Tidak Sekolah"
                                    {{ $catin->status_pendidikan === 'Tidak Sekolah' ? 'selected' : '' }}>Tidak Sekolah
                                </option>
                                <option value="Belum Tamat SD"
                                    {{ $catin->status_pendidikan === 'Tidak Tamat SD' ? 'selected' : '' }}>Belum Tamat SD
                                </option>
                                <option value="Tamat SD" {{ $catin->status_pendidikan === 'Tamat SD' ? 'selected' : '' }}>
                                    Tamat SD</option>
                                <option value="Tamat SMP" {{ $catin->status_pendidikan === 'Tamat SMP' ? 'selected' : '' }}>
                                    Tamat SMP</option>
                                <option value="Tamat SMA" {{ $catin->status_pendidikan === 'Tamat SMA' ? 'selected' : '' }}>
                                    Tamat SMA</option>
                                <option value="Tamat Perguruan Tinggi"
                                    {{ $catin->status_pendidikan === 'Tamat Perguruan Tinggi' ? 'selected' : '' }}>Tamat
                                    Perguruan Tinggi</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="pekerjaan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Pekerjaan :
                            </label>
                            <input type="text" name="pekerjaan" value="{{ $catin->pekerjaan }}"
                                class="pekerjaan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Pekerjaan..." required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="alamat" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Alamat :
                            </label>
                            <input type="text" name="alamat" value="{{ $catin->alamat }}"
                                class="alamat appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Alamat..." required>
                        </div>
                    </div>

                    <div class="flex flex-col" id="form-data">
                    </div>

                    <div class="flex gap-3 w-full justify-end">
                        <a href="{{ route('catin.index') }}"
                            class="shadow-lg bg-red-600 hover:bg-red-500 active:bg-red-800 text-white font-bold py-2 px-4 rounded"
                            id="btn-add-form">
                            Kembali
                        </a>
                        <button type="submit"
                            class="shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded"
                            id="btn-add">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $(document).on("submit", "#form-add", function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('catin.update', $catin->id) }}",
                    type: "PUT",
                    data: {
                        _token: "{{ csrf_token() }}",
                        nik: $('input[name="nik"]').val(),
                        nama: $('input[name="nama"]').val(),
                        tanggal_lahir: $('input[name="tanggal_lahir"]').val(),
                        status_pendidikan: $('#status_pendidikan').find(':selected').val(),
                        alamat: $('input[name="alamat"]').val(),
                        pekerjaan: $('input[name="pekerjaan"]').val(),
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.status === "success") {
                            Swal.fire({
                                icon: response.icon,
                                title: response.title,
                                text: response.message,
                                timer: 1000,
                                showConfirmButton: false,
                            });
                            setTimeout(function() {
                                window.location.href =
                                    "{{ route('catin.index') }}";
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: response.icon,
                                title: response.title,
                                text: response.message,
                                timer: 3000,
                                showConfirmButton: false,
                            });
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: xhr.responseJSON.message,
                        });
                    }
                });
            });
        });
    </script>
@endsection
