@extends('layouts.main')

@section('content')
    <form action="/kuesioner/{{ $idAnggotaKeluarga }}/update" method="post" class="formCreate">
        @csrf
        @method('PUT')
        <input type="hidden" name="kk_number" value="{{ $nomor_kk }}">
        <input type="hidden" name="id_anggota_keluarga" value="{{ $idAnggotaKeluarga }}">
        @foreach ($check_status as $status)
            @if ($status->status === 'Baduta')
                <div class="flex-col mb-20 shadow px-10 py-12">
                    <div class="mb-7">
                        <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Baduta')
                            @if ($question->question_type == 'radio')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }}
                                            :</label>
                                    </div>
                                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                        @foreach ($questionnaireItems as $k => $item)
                                            @if ($item->question_id == $question->id)
                                                <div class="flex items-center gap-2">
                                                    <div class="flex items-center gap-2">
                                                        <input type="radio" name="question_item_id[{{ $question->id }}]"
                                                            id="answer{{ $item->id }}"
                                                            value="{{ $item->question_item . ';' . $item->id }}"
                                                            <?php
                                                            $isChecked = false;
                                                            foreach ($answers as $answer) {
                                                                if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                    $isChecked = true;
                                                                    break;
                                                                }
                                                            }
                                                            ?> {{ $isChecked == true ? 'checked' : '' }}>
                                                        <label for="answer{{ $item->id }}" class="text-sm">
                                                            {{ $item->question_item }}
                                                            <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @elseif ($question->question_type === 'checkbox')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }}
                                            :</label>
                                    </div>
                                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                        @foreach ($questionnaireItems as $item)
                                            @if ($item->question_id == $question->id)
                                                <div class="flex items-center gap-2">
                                                    <div class="flex items-center gap-2">
                                                        <input type="checkbox"
                                                            name="question_item_id[{{ $question->id }}][]"
                                                            id="answer{{ $item->id }}"
                                                            value="{{ $item->question_item . ';' . $item->id }}"
                                                            onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                            <?php
                                                            $isChecked = false;
                                                            foreach ($answers as $answer) {
                                                                if ($answer->question_id == $question->id) {
                                                                    $position = strpos($answer->answer, $item->question_item);
                                                                    if ($position !== false) {
                                                                        $isChecked = true;
                                                                        break;
                                                                    }
                                                                }
                                                            } ?> {{ $isChecked ? 'checked' : '' }}>
                                                        <label for="answer{{ $item->id }}" class="text-sm">
                                                            {{ $item->question_item }}
                                                            <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @elseif ($question->question_type == 'text')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }}
                                            :</label>
                                    </div>
                                    @foreach ($answers as $answer)
                                        @if ($answer->question_id == $question->id)
                                            <div class="flex gap-10 w-full">
                                                <div class="flex items-center w-full">
                                                    <div class="flex items-center w-full">
                                                        <input type="text" name="answer[{{ $question->id }}]"
                                                            class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid"
                                                            placeholder="{{ $question->question }}..."
                                                            value="{{ $answer->answer }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif

            @if ($status->status === 'Anak SD')
                <div class="flex-col mb-20 shadow px-10 py-12">
                    <div class="mb-7">
                        <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Anak SD')
                            @if ($question->question_type == 'radio')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }}
                                            :</label>
                                    </div>
                                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                        @foreach ($questionnaireItems as $k => $item)
                                            @if ($item->question_id == $question->id)
                                                <div class="flex items-center gap-2">
                                                    <div class="flex items-center gap-2">
                                                        <input type="radio" name="question_item_id[{{ $question->id }}]"
                                                            id="answer{{ $item->id }}"
                                                            value="{{ $item->question_item . ';' . $item->id }}"
                                                            <?php
                                                            $isChecked = false;
                                                            foreach ($answers as $answer) {
                                                                if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                    $isChecked = true;
                                                                    break;
                                                                }
                                                            }
                                                            ?> {{ $isChecked == true ? 'checked' : '' }}>
                                                        <label for="answer{{ $item->id }}" class="text-sm">
                                                            {{ $item->question_item }}
                                                            <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @elseif ($question->question_type === 'checkbox')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }}
                                            :</label>
                                    </div>
                                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                        @foreach ($questionnaireItems as $item)
                                            @if ($item->question_id == $question->id)
                                                <div class="flex items-center gap-2">
                                                    <div class="flex items-center gap-2">
                                                        <input type="checkbox"
                                                            name="question_item_id[{{ $question->id }}][]"
                                                            id="answer{{ $item->id }}"
                                                            value="{{ $item->question_item . ';' . $item->id }}"
                                                            onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                            <?php
                                                            $isChecked = false;
                                                            foreach ($answers as $answer) {
                                                                if ($answer->question_id == $question->id) {
                                                                    $position = strpos($answer->answer, $item->question_item);
                                                                    if ($position !== false) {
                                                                        $isChecked = true;
                                                                        break;
                                                                    }
                                                                }
                                                            } ?> {{ $isChecked ? 'checked' : '' }}>
                                                        <label for="answer{{ $item->id }}" class="text-sm">
                                                            {{ $item->question_item }}
                                                            <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @elseif ($question->question_type == 'text')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }}
                                            :</label>
                                    </div>
                                    @foreach ($answers as $answer)
                                        @if ($answer->question_id == $question->id)
                                            <div class="flex gap-10 w-full">
                                                <div class="flex items-center w-full">
                                                    <div class="flex items-center w-full">
                                                        <input type="text" name="answer[{{ $question->id }}]"
                                                            class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid"
                                                            placeholder="{{ $question->question }}..."
                                                            value="{{ $answer->answer }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif

            @if ($status->status === 'Remaja Putri')
                <div class="flex-col mb-20 shadow px-10 py-12">
                    <div class="mb-7">
                        <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Remaja Putri')
                            @if ($question->question_subcategory === 'kuesioner')
                                @if ($question->question_type == 'radio')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $k => $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="radio"
                                                                name="question_item_id[{{ $question->id }}]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                        $isChecked = true;
                                                                        break;
                                                                    }
                                                                }
                                                                ?>
                                                                {{ $isChecked == true ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type === 'checkbox')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="checkbox"
                                                                name="question_item_id[{{ $question->id }}][]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id) {
                                                                        $position = strpos($answer->answer, $item->question_item);
                                                                        if ($position !== false) {
                                                                            $isChecked = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                } ?> {{ $isChecked ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type == 'text')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        @foreach ($answers as $answer)
                                            @if ($answer->question_id == $question->id)
                                                <div class="flex gap-10 w-full">
                                                    <div class="flex items-center w-full">
                                                        <div class="flex items-center w-full">
                                                            <input type="text" name="answer[{{ $question->id }}]"
                                                                class="border-zinc-500 rounded w-4/4 w-full"
                                                                id="PertamaHaid"
                                                                placeholder="{{ $question->question }}..."
                                                                value="{{ $answer->answer }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach

                    <div class="mt-12 mb-7">
                        <h1 class="font-bold text-lg">Pengetahuan {{ $status->status }} :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Remaja Putri')
                            @if ($question->question_subcategory == 'pengetahuan')
                                @if ($question->question_type == 'radio')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $k => $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="radio"
                                                                name="question_item_id[{{ $question->id }}]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                        $isChecked = true;
                                                                        break;
                                                                    }
                                                                }
                                                                ?>
                                                                {{ $isChecked == true ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type === 'checkbox')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="checkbox"
                                                                name="question_item_id[{{ $question->id }}][]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id) {
                                                                        $position = strpos($answer->answer, $item->question_item);
                                                                        if ($position !== false) {
                                                                            $isChecked = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                } ?> {{ $isChecked ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type == 'text')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        @foreach ($answers as $answer)
                                            @if ($answer->question_id == $question->id)
                                                <div class="flex gap-10 w-full">
                                                    <div class="flex items-center w-full">
                                                        <div class="flex items-center w-full">
                                                            <input type="text" name="answer[{{ $question->id }}]"
                                                                class="border-zinc-500 rounded w-4/4 w-full"
                                                                id="PertamaHaid"
                                                                placeholder="{{ $question->question }}..."
                                                                value="{{ $answer->answer }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif

            @if ($status->status === 'Ibu atau Ibu Hamil')
                <div class="flex-col mb-20 shadow px-10 py-12">
                    <div class="mb-7">
                        <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Ibu atau Ibu Hamil')
                            @if ($question->question_subcategory === 'kuesioner')
                                @if ($question->question_type == 'radio')
                                    <div class="mb-12">
                                        @if ($question->id == 59 || $question->id == 60 || $question->id == 61)
                                            <div class="mb-3" id="select{{ $question->id }}">
                                                <label for="" class="font-semibold">Frekuensi Pemeriksaan
                                                    Kehamilan:
                                                    <select id="trisemester"
                                                        class="appearance-none w-full block rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white">
                                                        <?php
                                                        $isSelected = '';
                                                        foreach ($answers as $answer) {
                                                            if ($answer->question_id == 59) {
                                                                $isSelected = $answer->question_id;
                                                            } elseif ($answer->question_id == 60) {
                                                                $isSelected = $answer->question_id;
                                                            } elseif ($answer->question_id == 61) {
                                                                $isSelected = $answer->question_id;
                                                            }
                                                        }
                                                        ?>
                                                        <option value="59" {{ $isSelected == 59 ? 'selected' : '' }}>
                                                            Tri
                                                            Semester 1 (usia Kehamilan 1-3 Bulan/
                                                            0-12 Minggu)</option>
                                                        <option value="60" {{ $isSelected == 60 ? 'selected' : '' }}>
                                                            Tri Semester 2 (usia Kehamilan 4- 6
                                                            Bulan/13-24 Minggu)</option>
                                                        <option value="61" {{ $isSelected == 61 ? 'selected' : '' }}>
                                                            Tri Semester 3 (usia Kehamilan 7-10
                                                            Bulan/25-40 Minggu)</option>
                                                    </select>
                                                </label>
                                            </div>
                                            <div id="jawaban{{ $question->id }}"
                                                class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                                @foreach ($questionnaireItems as $k => $item)
                                                    @if ($item->question_id == $question->id)
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex items-center gap-2">
                                                                <input type="radio"
                                                                    name="question_item_id[{{ $question->id }}]"
                                                                    id="answerTrisemester"
                                                                    value="{{ $item->question_item . ';' . $item->id }}"
                                                                    <?php
                                                                    $isChecked = false;
                                                                    foreach ($answers as $answer) {
                                                                        if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                            $isChecked = true;
                                                                            $idCheck = $question->id;
                                                                            $itemidCheck = $item->id;
                                                                            break;
                                                                        }
                                                                    }
                                                                    ?> {{ $isChecked ? 'checked' : '' }}>
                                                                <label for="answer{{ $item->id }}" class="text-sm">
                                                                    {{ $item->question_item }}
                                                                    <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="mb-3">
                                                <label for="" class="font-semibold">{{ $question->question }}
                                                    :</label>
                                            </div>
                                            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                                @foreach ($questionnaireItems as $k => $item)
                                                    @if ($item->question_id == $question->id)
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex items-center gap-2">
                                                                <input type="radio"
                                                                    name="question_item_id[{{ $question->id }}]"
                                                                    id="answer{{ $item->id }}"
                                                                    value="{{ $item->question_item . ';' . $item->id }}"
                                                                    <?php
                                                                    $isChecked = false;
                                                                    foreach ($answers as $answer) {
                                                                        if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                            $isChecked = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                    ?>
                                                                    {{ $isChecked == true ? 'checked' : '' }}>
                                                                <label for="answer{{ $item->id }}" class="text-sm">
                                                                    {{ $item->question_item }}
                                                                    <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                @elseif ($question->question_type === 'checkbox')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="checkbox"
                                                                name="question_item_id[{{ $question->id }}][]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id) {
                                                                        $position = strpos($answer->answer, $item->question_item);
                                                                        if ($position !== false) {
                                                                            $isChecked = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                } ?> {{ $isChecked ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type == 'text')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        @foreach ($answers as $answer)
                                            @if ($answer->question_id == $question->id)
                                                <div class="flex gap-10 w-full">
                                                    <div class="flex items-center w-full">
                                                        <div class="flex items-center w-full">
                                                            <input type="text" name="answer[{{ $question->id }}]"
                                                                class="border-zinc-500 rounded w-4/4 w-full"
                                                                id="PertamaHaid"
                                                                placeholder="{{ $question->question }}..."
                                                                value="{{ $answer->answer }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach


                    <div class="mt-12 mb-7">
                        <h1 class="font-bold text-lg">Pemeriksaan Kehamilan {{ $status->status }} :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Ibu atau Ibu Hamil')
                            @if ($question->question_subcategory == 'pemeriksaan_kehamilan')
                                @if ($question->question_type == 'radio')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $k => $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="radio"
                                                                name="question_item_id[{{ $question->id }}]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                        $isChecked = true;
                                                                        break;
                                                                    }
                                                                }
                                                                ?> {{ $isChecked ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type === 'checkbox')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="checkbox"
                                                                name="question_item_id[{{ $question->id }}][]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id) {
                                                                        $position = strpos($answer->answer, $item->question_item);
                                                                        if ($position !== false) {
                                                                            $isChecked = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                } ?> {{ $isChecked ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type == 'text')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        @foreach ($answers as $answer)
                                            @if ($answer->question_id == $question->id)
                                                <div class="flex gap-10 w-full">
                                                    <div class="flex items-center w-full">
                                                        <div class="flex items-center w-full">
                                                            <input type="text" name="answer[{{ $question->id }}]"
                                                                class="border-zinc-500 rounded w-4/4 w-full"
                                                                id="PertamaHaid"
                                                                placeholder="{{ $question->question }}..."
                                                                value="{{ $answer->answer }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @elseif ($question->question_type == 'textmultiple')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $k => $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="text"
                                                                name="answer[{{ $question->id }}][{{ $item->id }}]"
                                                                id="answer{{ $item->id }}" <?php
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                        $value = $answer->answer;
                                                                    }
                                                                }
                                                                ?>
                                                                value="{{ $value ?? '' }}">
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach

                    <div class="mt-12 mb-7">
                        <h1 class="font-bold text-lg">Pengetahuan {{ $status->status }} :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Ibu atau Ibu Hamil')
                            @if ($question->question_subcategory == 'pengetahuan')
                                @if ($question->question_type == 'radio')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $k => $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="radio"
                                                                name="question_item_id[{{ $question->id }}]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id && $item->id === $answer->question_item_id) {
                                                                        $isChecked = true;
                                                                        break;
                                                                    }
                                                                }
                                                                ?> {{ $isChecked ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type === 'checkbox')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                            @foreach ($questionnaireItems as $item)
                                                @if ($item->question_id == $question->id)
                                                    <div class="flex items-center gap-2">
                                                        <div class="flex items-center gap-2">
                                                            <input type="checkbox"
                                                                name="question_item_id[{{ $question->id }}][]"
                                                                id="answer{{ $item->id }}"
                                                                value="{{ $item->question_item . ';' . $item->id }}"
                                                                onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                                <?php
                                                                $isChecked = false;
                                                                foreach ($answers as $answer) {
                                                                    if ($answer->question_id == $question->id) {
                                                                        $position = strpos($answer->answer, $item->question_item);
                                                                        if ($position !== false) {
                                                                            $isChecked = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                } ?> {{ $isChecked ? 'checked' : '' }}>
                                                            <label for="answer{{ $item->id }}" class="text-sm">
                                                                {{ $item->question_item }}
                                                                <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif ($question->question_type == 'text')
                                    <div class="mb-12">
                                        <div class="mb-3">
                                            <label for="" class="font-semibold">{{ $question->question }}
                                                :</label>
                                        </div>
                                        @foreach ($answers as $answer)
                                            @if ($answer->question_id == $question->id)
                                                <div class="flex gap-10 w-full">
                                                    <div class="flex items-center w-full">
                                                        <div class="flex items-center w-full">
                                                            <input type="text" name="answer[{{ $question->id }}]"
                                                                class="border-zinc-500 rounded w-4/4 w-full"
                                                                id="PertamaHaid"
                                                                placeholder="{{ $question->question }}..."
                                                                value="{{ $answer->answer }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif

            @if ($status->status == 'Lainnya')
                <div class="flex-col mb-20 shadow px-10 py-12">
                    <div class="mb-7">
                        <h1 class="font-bold text-lg">Kuesioner Lingkungan :</h1>
                    </div>
                    @foreach ($questionnaires as $key => $question)
                        @if ($question->question_category === 'Lingkungan')
                            @if ($question->question_type == 'radio')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }} :</label>
                                    </div>
                                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                        @foreach ($questionnaireItems as $k => $item)
                                            @foreach ($answers as $answer)
                                                @if ($item->question_id == $question->id)
                                                    @if ($answer->question_id == $question->id)
                                                        <div class="flex items-center gap-2">
                                                            <div class="flex items-center gap-2">
                                                                <input type="radio"
                                                                    name="question_item_id[{{ $question->id }}]"
                                                                    id="answer{{ $item->id }}"
                                                                    value="{{ $item->question_item . ';' . $item->id }}"
                                                                    {{ $item->id === $answer->question_item_id ? 'checked' : '' }}>
                                                                <label for="answer{{ $item->id }}" class="text-sm">
                                                                    {{ $item->question_item }}
                                                                    <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            @elseif ($question->question_type === 'checkbox')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }} :</label>
                                    </div>
                                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                                        @foreach ($questionnaireItems as $item)
                                            @if ($item->question_id == $question->id)
                                                <div class="flex items-center gap-2">
                                                    <div class="flex items-center gap-2">
                                                        <input type="checkbox"
                                                            name="question_item_id[{{ $question->id }}][]"
                                                            id="answer{{ $item->id }}"
                                                            value="{{ $item->question_item . ';' . $item->id ?? null }}"
                                                            onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})"
                                                            <?php
                                                            foreach ($answers as $answer) {
                                                                if ($answer->question_id === $question->id) {
                                                                    $position = strpos($answer->answer, $item->question_item);
                                                                    $isChecked = $position !== false ? 'checked' : '';
                                                                }
                                                            }
                                                            ?> {{ $isChecked ?? '' }}>
                                                        <label for="answer{{ $item->id }}" class="text-sm">
                                                            {{ $item->question_item }}
                                                            <b>{{ $item->question_item_point === '1' ? '(Memenuhi)' : '' }}</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @elseif ($question->question_type == 'text')
                                <div class="mb-12">
                                    <div class="mb-3">
                                        <label for="" class="font-semibold">{{ $question->question }} :</label>
                                    </div>
                                    @foreach ($answers as $answer)
                                        @if ($answer->question_id == $question->id)
                                            <div class="flex gap-10 w-full">
                                                <div class="flex items-center w-full">
                                                    <div class="flex items-center w-full">
                                                        <input type="text" name="answer[{{ $question->id }}]"
                                                            class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid"
                                                            placeholder="{{ $question->question }}..."
                                                            value="{{ $answer->answer }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach
        <div class="flex gap-3 w-full justify-end mt-12">
            <button type="submit"
                class="shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded"
                id="btn-add">Simpan</button>
        </div>
    </form>

    <script>
        @if (isset($idCheck))
            let idCheck = '{{ $idCheck }}';
            let itemidCheck = '{{ $itemidCheck }}';
            let gantiId = 0;

            pilihanTrisemester();
            $('#trisemester').change(function() {
                pilihanTrisemester($(this).val());
                $('#answerTrisemester').prop('checked', false);
            });

            function pilihanTrisemester(id) {
                $('#select60').hide();
                $('#select61').hide();
                $('#jawaban59').hide();
                $('#jawaban60').hide();
                $('#jawaban61').hide();

                let idShow = (typeof id !== 'undefined') ? id : idCheck
                $('#jawaban' + idShow).show();
            }
        @endif
        console.log(idCheck);
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
