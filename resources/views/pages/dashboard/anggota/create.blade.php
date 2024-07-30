@extends('layouts.main')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" id="form-add" action="/data_anggota_keluarga" method="post" enctype="multipart/form-data">
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nomor_kk" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Nomor KK :
                            </label>
                            <input type="input" name="nomor_kk[0]" maxlength="16" minlength="16"
                                class="nomor_kk appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Nomor KK..." value="{{ $nomor_kk }}" readonly="readonly"
                                onkeypress="return numbersonly(this, event);" required>
                        </div>
                    </div>
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nik" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                NIK :
                            </label>
                            <input type="input" name="nik[0]" maxlength="16" minlength="16"
                                class="nik appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Nomor Induk Kependudukan" onkeypress="return numbersonly(this, event);"
                                required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nama" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Nama :
                            </label>
                            <input type="text" name="nama[0]"
                                class="nama appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Nama..." required>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="jenis_kelamin"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Jenis Kelamin :
                            </label>
                            <select name="jenis_kelamin[0]"
                                class="jenis_kelamin appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="status_pernikahan"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status Pernikahan :
                            </label>
                            <select name="status_pernikahan[0]"
                                class="status_pernikahan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                required>
                                <option value="">Pilih Status Pernikahan</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="tanggal_kelahiran"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Tanggal Lahir :
                            </label>
                            <input type="date" name="tanggal_kelahiran[0]"
                                class="tanggal_kelahiran appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Tanggal Kelahiran..." required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="status" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status :
                            </label>
                            <select name="status[0]"
                                class="status appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                required>
                                <option value="">Pilih Satus</option>
                                <option value="Baduta">Baduta</option>
                                <option value="Remaja Putri">Remaja Putri</option>
                                <option value="Ibu atau Ibu Hamil">Ibu / Ibu Hamil</option>
                                <option value="Anak SD">Anak SD</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="staus_pendidikan"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status Pendidikan :
                            </label>
                            <select name="status_pendidikan[0]"
                                class="status_pendidikan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                required>
                                <option value="">Pilih Status Pendidikan</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Belum Tamat SD">Belum Tamat SD</option>
                                <option value="Tamat SD">Tamat SD</option>
                                <option value="Tamat SMP">Tamat SMP</option>
                                <option value="Tamat SMA">Tamat SMA</option>
                                <option value="Tamat Perguruan Tinggi">Tamat Perguruan Tinggi</option>
                            </select>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="pekerjaan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Pekerjaan :
                            </label>
                            <input type="text" name="pekerjaan[0]"
                                class="pekerjaan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Pekerjaan..." required>
                        </div>
                    </div>

                    <div class="flex flex-col" id="form-data">
                    </div>

                    <div class="flex gap-3 w-full justify-end">
                        <button type="button"
                            class="shadow-lg bg-blue-600 hover:bg-blue-500 active:bg-blue-800 text-white font-bold py-2 px-4 rounded"
                            id="btn-add-form">
                            Tambah Form Inputan
                        </button>
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
            var i = 0;
            $(document).on("click", "#btn-add-form", function() {
                ++i;
                $("#form-data").append(`
                <div class="form` + i +
                    `">
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full mt-20">
                        <div class="flex gap-3 w-full justify-end">
                            <button type="button" class="btn-remove-form shadow-lg bg-red-600 hover:bg-red-500 active:bg-red-800 text-white font-bold py-2 px-4 rounded" data-form="` +
                    i + `">
                                Hapus Form Inputan
                            </button>
                        </div>
                    </div>
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nomor_kk" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Nomor KK :
                            </label>
                            <input type="text" name="nomor_kk[` + i + `]" class="nomor_kk appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" placeholder="Nomor KK..." value="{{ $nomor_kk }}" readonly="readonly" required>
                        </div>
                    </div>
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nik" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                NIK :
                            </label>
                            <input type="input" name="nik[${i}]" maxlength="16"
                                class="nik appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Nomor Induk Kependudukan"
                                onkeypress="return numbersonly(this, event);" required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="nama" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Nama :
                            </label>
                            <input type="text" name="nama[${i}]"
                                class="nama appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                placeholder="Nama..." required>
                        </div>
                    </div>
                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="jenis_kelamin" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Jenis Kelamin :
                            </label>
                            <select name="jenis_kelamin[` + i + `]" class="jenis_kelamin appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="status_pernikahan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status Pernikahan :
                            </label>
                            <select name="status_pernikahan[` + i + `]" class="status_pernikahan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" required>
                                <option value="">Pilih Status Pernikahan</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="tanggal_kelahiran" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Tanggal Lahir :
                            </label>
                            <input type="date" name="tanggal_kelahiran[` + i + `]" class="tanggal_kelahiran appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" placeholder="Tanggal Kelahiran..." required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="status" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status :
                            </label>
                            <select name="status[` + i + `]" class="status appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" required>
                                <option value="">Pilih Satus</option>
                                <option value="Baduta">Baduta</option>
                                <option value="Remaja Putri">Remaja Putri</option>
                                <option value="Ibu atau Ibu Hamil">Ibu / Ibu Hamil</option>
                                <option value="Anak SD">Anak SD</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="staus_pendidikan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Status Pendidikan :
                            </label>
                            <select name="status_pendidikan[` + i + `]" class="status_pendidikan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" required>
                                <option value="">Pilih Status Pendidikan</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Belum Tamat SD">Belum Tamat SD</option>
                                <option value="Tamat SD">Tamat SD</option>
                                <option value="Tamat SMP">Tamat SMP</option>
                                <option value="Tamat SMA">Tamat SMA</option>
                                <option value="Tamat Perguruan Tinggi">Tamat Perguruan Tinggi</option>
                            </select>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="pekerjaan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Pekerjaan :
                            </label>
                            <input type="text" name="pekerjaan[` + i + `]" class="pekerjaan appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" placeholder="Pekerjaan..." required>
                        </div>
                    </div>
                </div>
            `);
            });

            $(document).on("click", ".btn-remove-form", function() {
                --i;
                let id = $(this).data('form');
                $(".form" + id).remove();
            });

            $(document).on("submit", "#form-add", function(e) {
                let nomor_kk = [];
                let nik = [];
                let nama = [];
                let jenis_kelamin = [];
                let status_pernikahan = [];
                let tanggal_kelahiran = [];
                let status = [];
                let status_pendidikan = [];
                let pekerjaan = [];

                $(".nomor_kk").each(function() {
                    nomor_kk.push($(this).val());
                });

                $(".nik").each(function() {
                    nik.push($(this).val());
                });

                $(".nama").each(function() {
                    nama.push($(this).val());
                });

                $(".jenis_kelamin").each(function() {
                    jenis_kelamin.push($(this).val());
                });

                $(".status_pernikahan").each(function() {
                    status_pernikahan.push($(this).val());
                });

                $(".tanggal_kelahiran").each(function() {
                    tanggal_kelahiran.push($(this).val());
                });

                $(".status").each(function() {
                    status.push($(this).val());
                });

                $(".status_pendidikan").each(function() {
                    status_pendidikan.push($(this).val());
                });

                $(".pekerjaan").each(function() {
                    pekerjaan.push($(this).val());
                });

                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/data_anggota_keluarga",
                    data: {
                        _token: "{{ csrf_token() }}",
                        nomor_kk: nomor_kk,
                        nik: nik,
                        nama: nama,
                        jenis_kelamin: jenis_kelamin,
                        status_pernikahan: status_pernikahan,
                        tanggal_kelahiran: tanggal_kelahiran,
                        status: status,
                        status_pendidikan: status_pendidikan,
                        pekerjaan: pekerjaan,
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
