@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-600">
            <div class="p-3 mr-3 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person"
                    viewBox="0 0 20 20">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Admin
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ number_format($j_admin, 0, ',', '.') }}
                </p>
            </div>
        </div>
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-600">
            <div class="p-3 mr-3 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Surveyor
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ number_format($j_surveyor, 0, ',', '.') }}
                </p>
            </div>
        </div>
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-600">
            <div class="p-3 mr-3 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Keluarga
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ number_format($j_keluarga, 0, ',', '.') }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-600">
            <div class="p-3 mr-3 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <g>
                        <path fill="none" d="M0 0L24 0 24 24 0 24z" />
                        <path
                            d="M6 4v4h12V4h2.007c.548 0 .993.445.993.993v16.014c0 .548-.445.993-.993.993H3.993C3.445 22 3 21.555 3 21.007V4.993C3 4.445 3.445 4 3.993 4H6zm3 13H7v2h2v-2zm0-3H7v2h2v-2zm0-3H7v2h2v-2zm7-9v4H8V2h8z" />
                    </g>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Survei
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ number_format($j_survei, 0, ',', '.') }}
                </p>
            </div>
        </div>
    </div>

    <div class="grid gap-6 mb-8 md:grid-cols-2 py-12">
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-700">
            {{-- <form action="{{ url('dashboard') }}" method="GET"> --}}
            <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                    <label for="kabkot" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                        Kabupaten/Kota :
                    </label>
                    <select
                        class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                        id="kabkot" onchange="getKecamatanByKabupaten(this.value); graphShow();">
                        <option value=""></option>
                    </select>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                    <label for="kecamatan" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                        Kecamatan :
                    </label>
                    <select
                        class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                        id="kecamatan" onchange="getKelurahanByKecamatan(this.value);graphShow();">
                        <option value=""></option>
                    </select>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                    <label for="Desa" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                        Desa :
                    </label>
                    <select name="kelurahan"
                        class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white"
                        id="desa" onchange="graphShow(this.value)" required>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            {{-- </form> --}}
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Diagram Hasil
            </h4>
            <canvas id="pie"></canvas>
            <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                <!-- Chart legend -->
                {{-- @foreach ($pie['ket'] as $item)
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                        <span>{{ $item }}{{ $loop->first ? ' / ' : '' }}</span>
                    </div>
                @endforeach --}}
            </div>
        </div>
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-700">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Peta Keluarga
            </h4>
            <div class="mt-3 mb-3" id="map" style="height: 400px;"></div>
        </div>
    </div>

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

        //map
        var myIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            }),
            myIcon2 = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

        let mapOptions = {
            center: [-0.4159609, 115.3410473],
            minZoom: 2,
            zoom: 4
        }

        let map = new L.map('map', mapOptions);

        let layer = new L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });
        map.addLayer(layer);
        let marker = null;

        function graphShow(kelurahan) {
            $.ajax({
                url: '{{ route('data.dashboard.graph') }}',
                type: 'GET',
                data: {
                    kelurahan: kelurahan,
                    kecamatan: $("#kecamatan").val(),
                    kabkot: $("#kabkot").val(),
                }
            }).then(function(res) {
                res.koordinate.forEach((v, index) => {
                    var menuju = "Keluarga Carade&#039;";
                    var icon = v.keluarga == menuju ? myIcon2 : myIcon;

                    if (v.lat && v.long) {
                        L.marker([(v.lat).replace(" ", ""),
                                (v.long).replace(" ", "")
                            ], {
                                icon: icon
                            })
                            .bindPopup(
                                "No KK: " + v.nomor_kk + '<br>' +
                                "Keluarga: " + v.keluarga + '<br>'
                            )
                            .addTo(map);
                    }
                });

                // PIE
                // Fix for PIE chart data
                const pieData = res.pie.graph.map((data) => data);
                const pieLabels = res.pie.ket.map((label) => label + " (%)");

                const pieConfig = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: pieData,
                            /**
                             * These colors come from Tailwind CSS palette
                             * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                             */
                            backgroundColor: ['#0694a2', '#1c64f2', '#7e3af2'],
                            label: 'Dataset 1',
                        }],
                        labels: pieLabels,
                    },
                    options: {
                        responsive: true,
                        cutoutPercentage: 80,
                        /**
                         * Default legends are ugly and impossible to style.
                         * See examples in charts.html to add your own legends
                         */
                        legend: {
                            display: false,
                        },
                    },
                }

                // change this to the id of your chart element in HTML
                const pieCtx = document.getElementById('pie');
                window.myPie = new Chart(pieCtx, pieConfig);
            });

        }
    </script>
@endsection
