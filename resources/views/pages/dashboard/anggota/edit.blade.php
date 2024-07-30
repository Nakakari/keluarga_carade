@extends('layouts.main')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" id="form-edit" action="/data_anggota_keluarga/{{ $anggota->id }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nomor_kk" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Nomor KK :
                            </label>
                            <input type="text" name="nomor_kk"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="nomor_kk" placeholder="Nomor KK..." value="{{ $anggota->nomor_kk }}"
                                onkeypress="return numbersonly(this, event);" maxlength="16" minlength="16" required>
                        </div>
                    </div>
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nik" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                NIK :
                            </label>
                            <input type="text" name="nik"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="nik" placeholder="Nomor Induk Kependudukan" value="{{ $anggota->nik }}"
                                onkeypress="return numbersonly(this, event);" maxlength="16" minlength="16" required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nama" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Nama :
                            </label>
                            <input type="text" name="nama"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="nama" placeholder="Nama..." value="{{ $anggota->nama }}" required>
                        </div>
                    </div>
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="jenis_kelamin"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Jenis Kelamin :
                            </label>
                            <select name="jenis_kelamin"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L" {{ $anggota->jenis_kelamin === 'L' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="P" {{ $anggota->jenis_kelamin === 'P' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="status_pernikahan"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status Pernikahan :
                            </label>
                            <select name="status_pernikahan"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="status_pernikahan" required>
                                <option value="">Pilih Status Pernikahan</option>
                                <option value="Belum Menikah"
                                    {{ $anggota->status_pernikahan === 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah
                                </option>
                                <option value="Menikah" {{ $anggota->status_pernikahan === 'Menikah' ? 'selected' : '' }}>
                                    Menikah</option>
                                <option value="Cerai Mati"
                                    {{ $anggota->status_pernikahan === 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                                <option value="Cerai Hidup"
                                    {{ $anggota->status_pernikahan === 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="tanggal_kelahiran"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Tanggal Lahir :
                            </label>
                            <input type="date" name="tanggal_kelahiran"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="tanggal_kelahiran" placeholder="Tanggal Kelahiran..."
                                value="{{ $anggota->tanggal_kelahiran }}" required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="status" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status :
                            </label>
                            <select name="status"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="status" required>
                                <option value="">Pilih Satus</option>
                                <option value="Baduta" {{ $anggota->status === 'Baduta' ? 'selected' : '' }}>Baduta
                                </option>
                                <option value="Remaja Putri" {{ $anggota->status === 'Remaja Putri' ? 'selected' : '' }}>
                                    Remaja Putri</option>
                                <option value="Ibu atau Ibu Hamil"
                                    {{ $anggota->status === 'Ibu atau Ibu Hamil' ? 'selected' : '' }}>Ibu / Ibu Hamil
                                </option>
                                <option value="Anak SD" {{ $anggota->status === 'Anak SD' ? 'selected' : '' }}>Anak SD
                                </option>
                                <option value="Lainnya" {{ $anggota->status === 'Lainnya' ? 'selected' : '' }}>Lainnya
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="staus_pendidikan"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status Pendidikan :
                            </label>
                            <select name="status_pendidikan"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="status_pendidikan" required>
                                <option value="">Pilih Status Pendidikan</option>
                                <option value="Tidak Sekolah"
                                    {{ $anggota->status_pendidikan === 'Tidak Sekolah' ? 'selected' : '' }}>Tidak Sekolah
                                </option>
                                <option value="Belum Tamat SD"
                                    {{ $anggota->status_pendidikan === 'Tidak Tamat SD' ? 'selected' : '' }}>Belum Tamat SD
                                </option>
                                <option value="Tamat SD"
                                    {{ $anggota->status_pendidikan === 'Tamat SD' ? 'selected' : '' }}>Tamat SD</option>
                                <option value="Tamat SMP"
                                    {{ $anggota->status_pendidikan === 'Tamat SMP' ? 'selected' : '' }}>Tamat SMP</option>
                                <option value="Tamat SMA"
                                    {{ $anggota->status_pendidikan === 'Tamat SMA' ? 'selected' : '' }}>Tamat SMA</option>
                                <option value="Tamat Perguruan Tinggi"
                                    {{ $anggota->status_pendidikan === 'Tamat Perguruan Tinggi' ? 'selected' : '' }}>Tamat
                                    Perguruan Tinggi</option>
                            </select>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="pekerjaan"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Pekerjaan :
                            </label>
                            <input type="text" name="pekerjaan"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="pekerjaan" placeholder="Pekerjaan..." value="{{ $anggota->pekerjaan }}" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 text-right">
                            <button type="submit"
                                class="shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on("submit", "#form-edit", function(e) {
                e.preventDefault();
                $.ajax({
                    type: "PUT",
                    url: "/data_anggota_keluarga/{{ $anggota->id }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        nomor_kk: $('#nomor_kk').val(),
                        nik: $('#nik').val(),
                        nama: $('#nama').val(),
                        jenis_kelamin: $('#jenis_kelamin').val(),
                        status_pernikahan: $('#status_pernikahan').val(),
                        tanggal_kelahiran: $('#tanggal_kelahiran').val(),
                        status: $('#status').val(),
                        status_pendidikan: $('#status_pendidikan').val(),
                        pekerjaan: $('#pekerjaan').val(),
                    },
                    dataType: "json",
                    success: function(res) {
                        Swal.fire({
                            icon: res.icon,
                            title: res.title,
                            text: res.message,
                            timer: 1000,
                            showConfirmButton: false,
                        }).then(() => {
                            window.location.href = "/data_anggota_keluarga/" + res
                                .nomor_kk;
                        })
                    },
                    error: function(err) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: err.message,
                        })
                    }
                })
            });
        });
    </script>
@endsection
