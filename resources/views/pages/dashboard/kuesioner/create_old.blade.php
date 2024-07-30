@extends('layouts.main')

@section('content')
<form action="/kuesioner" method="post" class="formCreate">
    @csrf
    @foreach ($check_status as $status)
    @if($status->status === "Baduta")
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
        </div>
        @foreach ($questionnaires as $key => $question)
        @if($question->question_category === "Baduta")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @endif
        @endif
        @endforeach
    </div>
    @endif

    @if($status->status === "Anak SD")
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
        </div>
        @foreach ($questionnaires as $key => $question)
        @if($question->question_category === "Anak SD")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @endif
        @endif
        @endforeach
    </div>
    @endif

    @if($status->status === "Remaja Putri")
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
        </div>
        @foreach ($questionnaires as $key => $question)
        @if($question->question_category === "Remaja Putri")
        @if($question->question_subcategory === "kuesioner")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @endif
        @endif
        @endif
        @endforeach

        <div class="mt-12 mb-7">
            <h1 class="font-bold text-lg">Pengetahuan {{ $status->status }} :</h1>
        </div>
        @foreach ($questionnaires as $key => $question)
        @if($question->question_category === "Remaja Putri")
        @if ($question->question_subcategory == "pengetahuan")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @endif
        @endif
        @endif
        @endforeach
    </div>
    @endif

    @if($status->status === "Ibu atau Ibu Hamil")
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner {{ $status->status }} :</h1>
        </div>
        @foreach ($questionnaires as $key => $question)
        @if($question->question_category === "Ibu atau Ibu Hamil")
        @if($question->question_subcategory === "kuesioner")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @endif
        @endif
        @endif
        @endforeach


        <div class="mt-12 mb-7">
            <h1 class="font-bold text-lg">Pemeriksaan Kehamilan {{ $status->status }} :</h1>
        </div>
        @foreach ($questionnaires as $key => $question)
        @if($question->question_category === "Ibu atau Ibu Hamil")
        @if ($question->question_subcategory == "pemeriksaan_kehamilan")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @elseif ($question->question_type == "textmultiple")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="text" name="answer[{{$key}}][]" id="question[{{$key}}]" placeholder="Masukkan usia kehamilan saat pemeriksaan">
                        <label for="question[{{$key}}]" class="text-sm">0-3 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="text" name="answer[{{$key}}][]" id="question[{{$key}}]" placeholder="Masukkan usia kehamilan saat pemeriksaan">
                        <label for="question[{{$key}}]" class="text-sm">4-6 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="text" name="answer[{{$key}}][]" id="question[{{$key}}]" placeholder="Masukkan usia kehamilan saat pemeriksaan">
                        <label for="question[{{$key}}]" class="text-sm">7-melahirkan</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
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
        @if($question->question_category === "Ibu atau Ibu Hamil")
        @if ($question->question_subcategory == "pengetahuan")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @endif
        @endif
        @endif
        @endforeach
    </div>
    @endif
    @endforeach

    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner Lingkungan :</h1>
        </div>
        @foreach ($questionnaires as $key => $question)
        @if($question->question_category === "Lingkungan")
        @if ($question->question_type == "radio")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $k => $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="question_item_id[{{$key}}]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('radio', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "checkbox")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach ($questionnaireItems as $item)
                @if($item->question_id == $question->id)
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="question_item_id[{{$key}}][]" id="answer{{$item->id}}" value="{{ $item->id }}" onchange="getPoint('checkbox', {{ $key }}, {{ $item->question_item_point }})">
                        <label for="answer{{$item->id}}" class="text-sm">
                            {{ $item->question_item }}</label>
                    </div>
                </div>
                <input type="hidden" name="question_id[{{$key}}][]" value="{{$question->id}}">
                <input type="hidden" name="nomor_kk[{{$key}}][]" value="{{ $nomor_kk }}">
                <input type="hidden" name="answer_point[{{$key}}][]" id="answer_point[{$key}]">
                @endif
                @endforeach
            </div>
        </div>
        @elseif ($question->question_type == "text")
        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">{{ $question->question }} :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[{{$key}}]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="{{ $question->question }}...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="question_id[{{$key}}]" value="{{$question->id}}">
            <input type="hidden" name="nomor_kk[{{$key}}]" value="{{ $nomor_kk }}">
        </div>
        @endif
        @endif
        @endforeach
    </div>
    <div class="flex gap-3 w-full justify-end mt-12">
        <button type="submit" class="shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded" id="btn-add">Simpan</button>
    </div>
</form>

<script>
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