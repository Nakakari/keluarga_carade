@extends('layouts.main')
<?php
use Carbon\Carbon;
?>
@section('content')
    <style>
        .items-start {
            align-items: flex-start;
        }
    </style>
    <form action="{{ route('catin.quiz-store') }}" method="post" class="formCreate">
        @csrf

        <input type="hidden" name="id_calon_pengantin" value="{{ $catin->id }}">
        <div class="flex-col mb-20 shadow px-10 py-12">
            <div class="mb-7">
                <h1 class="font-bold text-lg">Kuesioner Calon Pengantin :</h1>
            </div>
            @foreach ($kuis as $data)
                @if ($data->kategori === 'catin')
                    @if ($data->type == 'radio')
                        <div class="mb-12">
                            <div class="mb-3">
                                <label for="" class="font-semibold">{{ $data->nama }} :</label>
                            </div>
                            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                @foreach ($data->detailKuis as $k => $item)
                                    @if ($item->id_quisioner_catin == $data->id)
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-2">
                                                <input type="radio" name="id_quisioner_catin[{{ $data->id }}]"
                                                    id="answer{{ $item->id }}" value="{{ $item->id }}">
                                                <label for="answer{{ $item->id }}" class="text-sm">
                                                    {{ $item->nama }}
                                                    <b>{{ $item->point === '1' ? '(Memenuhi)' : '' }}</b>
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @elseif ($data->type == 'checkbox')
                        <div class="mb-12">
                            <div class="mb-3">
                                <label for="" class="font-semibold">{{ $data->nama }} :</label>
                            </div>
                            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                @foreach ($data->detailKuis as $item)
                                    @if ($item->id_quisioner_catin == $data->id)
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-2">
                                                <input type="checkbox" name="id_quisioner_catin[{{ $data->id }}][]"
                                                    id="answer{{ $item->id }}" value="{{ $item->id }}">
                                                <label for="answer{{ $item->id }}" class="text-sm">
                                                    {{ $item->nama }}</label>
                                                <b>{{ $item->point === '1' ? '(Memenuhi)' : '' }}</b>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @elseif ($data->type == 'text')
                        <div class="mb-12">
                            <div class="mb-3">
                                <label for="" class="font-semibold">{{ $data->nama }} :</label>
                            </div>
                            <div class="flex gap-10 w-full">
                                <div class="flex items-center w-full">
                                    <div class="flex items-center w-full">
                                        <input type="text" name="id_quisioner_catin[{{ $data->id }}]"
                                            class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid"
                                            placeholder="{{ $data->nama }}...">
                                    </div>
                                </div>
                            </div>

                        </div>
                    @elseif ($data->type == 'number')
                        <div class="mb-12">
                            <div class="mb-3">
                                <label for="" class="font-semibold">{{ $data->nama }} :</label>
                            </div>
                            <div class="flex gap-10 w-full">
                                <div class="flex items-center w-full">
                                    <div class="flex items-center w-full">
                                        <input type="text" name="id_quisioner_catin[{{ $data->id }}]"
                                            class="border-zinc-500 rounded w-4/4 w-full"
                                            @if ($data->id == 1) value="{{ Carbon::parse($catin->tanggal_lahir)->age }}" @endif
                                            onkeypress="return numbersonly(this, event);"
                                            onchange="this.value = formatCurrency(this.value);"
                                            onblur="this.value = formatCurrency(this.value);"
                                            onkeyup="this.value = formatCurrency(this.value);"
                                            placeholder="{{ $data->nama }}...">
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                @endif
            @endforeach
        </div>


        <div class="flex gap-3 w-full justify-end mt-12">
            <a href="{{ route('catin.index') }}"
                class="shadow-lg bg-red-600 hover:bg-red-500 active:bg-red-800 text-white font-bold py-2 px-4 rounded"
                id="btn-add-form">
                Kembali
            </a>
            <button type="submit"
                class="shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded"
                id="btn-add">Simpan</button>
        </div>
    </form>

    <script>
        pilihanTrisemester();
        $('#trisemester').change(function() {
            pilihanTrisemester();
            $('#answerTrisemester').prop('checked', false);
        });

        function pilihanTrisemester() {
            $('#select60').hide();
            $('#select61').hide();
            $('#jawaban59').hide();
            $('#jawaban60').hide();
            $('#jawaban61').hide();

            let idShow = $('#trisemester').val();
            $('#jawaban' + idShow).show();
        }

        getPoint = (type, key, point) => {
            if (type === 'radio') {
                $("input[name = 'answer_point[" + key + "]']").val(point)
                console.log($("input[name = 'answer_point[" + key + "]']").val());
            } else {
                $("input[name = 'answer_point[" + key + "][]']:check").val(point)
                console.log($("input[name = 'answer_point[" + key + "][]']").val());
            }
        }
    </script>
@endsection
