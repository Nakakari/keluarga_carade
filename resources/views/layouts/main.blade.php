<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluarga Cara'de' - {{ $title }}</title>
    <link rel="icon" href="{{ url('') }}/logo-jpg-removebg-preview.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('') }}/logo-jpg-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if (Request::segment(3) != null)
        <link rel="stylesheet" href="../../css/datatables.min.css">
        <link rel="stylesheet" href="../../css/sweetalert.min.css">
        <link rel="stylesheet" href="../../css/select2.min.css">
    @elseif (Request::segment(2) != null)
        <link rel="stylesheet" href="../css/datatables.min.css">
        <link rel="stylesheet" href="../css/sweetalert.min.css">
        <link rel="stylesheet" href="../css/select2.min.css">
    @else
        <link rel="stylesheet" href="./css/datatables.min.css">
        <link rel="stylesheet" href="./css/sweetalert.min.css">
        <link rel="stylesheet" href="./css/select2.min.css">
    @endif
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
        }

        .dataTables_length {
            width: 180px;
            margin: auto;
        }

        .dataTables_filter {
            margin: auto;
        }

        .dataTables_length select {
            width: 35%;
        }

        .dataTables_length,
        .dataTables_filter {
            margin-bottom: 20px;
        }

        .dataTables_info,
        .dataTables_paginate {
            margin-top: 20px;
        }

        .select2-container .select2-selection--single {
            line-height: 50px;
            height: 44.5px;
        }

        .select2-selection__placeholder {
            line-height: 42px;
            width: max-content;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 42px;
        }

        .select2-selection__arrow {
            margin-top: 7.5px;
        }

        #map {
            position: relative;
            height: 500px;
        }

        .leaflet-marker-icon.selectedMarker {
            filter: hue-rotate(120deg);
        }
    </style>
    <script src="{{ mix('js/app.js') }}" defer></script>

    @if (Request::segment(3) != null)
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/datatables.min.js"></script>
        <script src="../../js/sweetalert.min.js"></script>
        <script src="../../js/select2.min.js"></script>
    @elseif (Request::segment(2) != null)
        <script src="../js/jquery.min.js"></script>
        <script src="../js/datatables.min.js"></script>
        <script src="../js/sweetalert.min.js"></script>
        <script src="../js/select2.min.js"></script>
    @else
        <script src="./js/jquery.min.js"></script>
        <script src="./js/datatables.min.js"></script>
        <script src="./js/sweetalert.min.js"></script>
        <script src="./js/select2.min.js"></script>
    @endif
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        $(document).ready(function() {
            <?php if (session('success')) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "<?= session('success') ?>",
                showConfirmButton: false,
                timer: 1000
            })
            <?php } ?>
            <?php if (session('error')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: "<?= session('error') ?>",
                showConfirmButton: false,
                timer: 1500
            })
            <?php } ?>
        });

        function numbersonly(myfield, e, dec) {
            var key;
            var keychar;

            if (window.event)
                key = window.event.keyCode;
            else if (e)
                key = e.which;
            else
                return true;
            keychar = String.fromCharCode(key);
            // control keys
            if ((key == null) || (key == 0) || (key == 8) ||
                (key == 9) || (key == 13) || (key == 27))
                return true;

            // numbers
            else if ((("0123456789").indexOf(keychar) > -1))
                return true;

            // decimal point jump
            else if (dec && (keychar == ".")) {
                myfield.form.elements[dec].focus();
                return false;
            } else
                return false;
        }

        function formatCurrency(num) {
            if (num != "" || num != "undefined") {
                //                    num = num.replace(/\$|\,00/g, '').replace(/\$|\./g, '');
                num = num.replace(/\$|\,00/g, '').replace(/\$|\./g, '');
                sign = (num == (num = Math.abs(num)));
                num = Math.floor(num * 100 + 0.50000000001);
                cents = num % 100;
                num = Math.floor(num / 100).toString();
                if (cents < 10)
                    cents = "0" + cents;
                for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
                    num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
                return (((sign) ? '' : '-') + num);
                //                    return (((sign) ? '' : '-') + num + ',' + cents);
                /*			}*/
            }
        }
    </script>
</head>

<body>
    @include('partials.navbar')

    <div class="px-8 md:px-20 py-8 overflow-x-hidden">

        @yield('content')
    </div>
</body>

</html>
