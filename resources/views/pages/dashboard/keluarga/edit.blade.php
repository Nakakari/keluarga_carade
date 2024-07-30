@extends('layouts.main')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" id="form-edit" action="/data_keluarga/{{ $keluarga->id }}" method="post"
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
                                id="nomor_kk" placeholder="Nomor KK..." value="{{ $keluarga->nomor_kk }}"
                                onkeypress="return numbersonly(this, event);" maxlength="16" minlength="16">
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="provinsi" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Provinsi :
                            </label>
                            <select name="provinsi"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="provinsi" onchange="getKabupatenByProvinsi(this.value)" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="kabkot" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Kabupaten/Kota :
                            </label>
                            <select name="kabkot"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="kabkot" onchange="getKecamatanByKabupaten(this.value)" required>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="kecamatan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Kecamatan :
                            </label>
                            <input type="hidden" id="kecamatan_old" value="{{ $keluarga->kecamatan }}">
                            <select name="kecamatan"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="kecamatan" onchange="getKelurahanByKecamatan(this.value)" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="Desa" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Desa :
                            </label>
                            <select name="desa"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="desa" required>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="wilayah_kerja_puskesmas"
                                class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Wilayah Kerja Puskesmas :
                            </label>
                            <select name="wilayah_kerja_puskesmas"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white select2-selection--single"
                                id="wilayah_kerja_puskesmas">
                                <option value="">Pilih Wilayah Kerja Puskesmas</option>
                                @foreach ($puskesmas as $item)
                                    <option value="{{ $item->nama }}"
                                        {{ $keluarga->wilayah_kerja_puskesmas == $item->nama ? 'selected' : '' }}>
                                        {{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-3 sm:mb-6 sm:w-full">
                            <label for="rt" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                RT/RW :
                            </label>
                            <input type="text" name="rt"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="rt" placeholder="RT..." value="{{ $keluarga->rw }}" maxlength="3"
                                onkeypress="return numbersonly(this, event);" required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="rw"
                                class="hidden sm:block uppercase tracking-wide text-black text-xs font-bold mb-4">.</label>
                            <input type="text" name="rw"
                                class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                                id="rw" placeholder="RW..." value="{{ $keluarga->rt }}"
                                onkeypress="return numbersonly(this, event);" maxlength="3" required>
                        </div>
                    </div>

                    <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                        <div class="flex flex-wrap -mx-3 mb-3 sm:mb-6 sm:w-full">
                            <label for="lat" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                                Titik kordinat :
                            </label>
                            <input type="text" name="lat"
                                class="appearance-none block rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white w-full"
                                id="lat" placeholder="Latitude..." value="{{ $keluarga->lat }}" required>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                            <label for="long"
                                class="hidden sm:block uppercase tracking-wide text-black text-xs font-bold mb-4">.</label>
                            <input type="text" name="long"
                                class="appearance-none block rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white w-full"
                                id="long" placeholder="Longitude..." value="{{ $keluarga->long }}" required>
                        </div>
                    </div>

                    <div class="flex gap-3 w-full justify-end">
                        <button type="button"
                            class="btn-get-location shadow-lg bg-blue-600 hover:bg-blue-500 active:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                            Ambil Lokasi
                        </button>
                        <button type="submit"
                            class="shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#wilayah_kerja_puskesmas").select2({
                placeholder: "Pilih Wilayah Kerja Puskesmas...",
                tags: true,
            });

            $("#provinsi").select2({
                placeholder: "Pilih Provinsi...",
            });

            $("#kabkot").select2({
                placeholder: "Pilih Kabupaten/Kota...",
            });

            $("#kecamatan").select2({
                placeholder: "Pilih Kecamatan...",
            });

            $("#desa").select2({
                placeholder: "Pilih Desa...",
            });

            $(document).on("click", ".btn-get-location", function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        $("#lat").val(position.coords.latitude);
                        $("#long").val(position.coords.longitude);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Geolocation tidak didukung oleh browser anda!',
                    })
                }
            });

            $(document).on("submit", "#form-edit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: "/data_keluarga/{{ $keluarga->id }}",
                    type: "PUT",
                    data: {
                        _token: "{{ csrf_token() }}",
                        nomor_kk: $('input[name="nomor_kk"]').val(),
                        wilayah_kerja_puskesmas: $('#wilayah_kerja_puskesmas').find(':selected')
                            .val(),
                        provinsi: $('#provinsi').find(':selected').val(),
                        kabkot: $('#kabkot').find(':selected').val(),
                        kecamatan: $('#kecamatan').find(':selected').val(),
                        kelurahan: $('#desa').find(':selected').val(),
                        rw: $('input[name="rw"]').val(),
                        rt: $('input[name="rt"]').val(),
                        lat: $('input[name="lat"]').val(),
                        long: $('input[name="long"]').val(),
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
                                window.location.href = "/data_keluarga";
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

        getProvinsi()

        function getProvinsi() {
            let oldProvinsi = $("#provinsi_old").val()
            $.ajax({
                url: "{{ route('base-wilayah.get-provinsi') }}",
                type: 'GET'
            }).then(function(res) {
                $('#provinsi').append('<option value="">Silahkan Pilih</option>');
                res.forEach(function(val) {
                    if (val.id == '{{ $keluarga->provinsi }}') {
                        $('#provinsi').append('<option selected value="' + val.id + '">' + val
                            .nama_provinsi +
                            '</option>');
                    } else {
                        $('#provinsi').append('<option value="' + val.id + '">' + val.nama_provinsi +
                            '</option>');
                    }
                });
            });
        }
        getKabupatenByProvinsi('{{ $keluarga->provinsi }}')

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
                $("#kecamatan").empty();
                response.forEach(function(val) {
                    if (val.id == kabkot) {
                        kabupatenSelect.append('<option selected value="' + val.id + '">' + val
                            .nama_kabupaten +
                            '</option>');
                    } else if (val.id == '{{ $keluarga->kabkot }}') {
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
        getKecamatanByKabupaten('{{ $keluarga->kabkot }}')

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
                    if (val.id == kecamatan) {
                        kecamatanSelect.append('<option selected value="' + val.id + '">' + val
                            .nama_kecamatan +
                            '</option>');
                    } else if (val.id == '{{ $keluarga->kecamatan }}') {
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

        getKelurahanByKecamatan('{{ $keluarga->kecamatan }}')

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
                    if (val.id == desa) {
                        kelurahanSelect.append('<option selected value="' + val.id + '">' + val
                            .nama_kelurahan +
                            '</option>');
                    } else if (val.id == '{{ $keluarga->kelurahan }}') {
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
    </script>
@endsection
