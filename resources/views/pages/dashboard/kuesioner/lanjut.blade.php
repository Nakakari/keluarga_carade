@extends('layouts.main')

@section('content')
<form action="/kuesioner/lanjut" method="post" class="formCreate">
    @csrf
    @foreach ($check_status as $status)
    @if($status->status == 'Baduta')
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner Baduta :</h1>
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Berat badan lahir</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[0]" id="jarak_kurang_2500" value="< 2500 gram" data-nilai_kuesioner_baduta="0">
                        <label for="jarak_kurang_2500" class="text-sm">
                            < 2500 gram</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[0]" id="jarak_lebih_2500" value="< 2500 gram" data-nilai_kuesioner_baduta="1">
                        <label for="jarak_lebih_2500" class="text-sm">
                            < 2500 gram</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[0]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[0]" value="1">
            <input type="hidden" name="answer_point[0]" value="0">
            <input type="hidden" name="answer_category[0]" value="Baduta">
            <input type="hidden" name="answer_type[0]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Panjang badan saat lahir :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[1]" class="border-zinc-500 rounded w-4/4 w-full" id="panjang_badan" placeholder="Masukkan panjang badan baduta saat lahir...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[1]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[1]" value="2">
            <input type="hidden" name="answer_point[1]" value="0">
            <input type="hidden" name="answer_category[1]" value="Baduta">
            <input type="hidden" name="answer_type[1]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Lingkaran kepala saat lahir :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[2]" class="border-zinc-500 rounded w-4/4 w-full" id="lingkaran_kepala" placeholder="Masukkan lingkaran kepala baduta saat lahir...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[2]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[2]" value="3">
            <input type="hidden" name="answer_point[2]" value="0">
            <input type="hidden" name="answer_category[2]" value="Baduta">
            <input type="hidden" name="answer_type[2]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Penolong persalinan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[3]" id="DokterKandungan" value="Dokter kandungan" data-nilai_kuesioner_baduta="1">
                        <label for="DokterKandungan" class="text-sm">
                            Dokter kandungan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[3]" id="DokterUmum" value="Dokter umum" data-nilai_kuesioner_baduta="1">
                        <label for="DokterUmum" class="text-sm">
                            Dokter umum</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[3]" id="Bidan" value="Bidan" data-nilai_kuesioner_baduta="1">
                        <label for="Bidan" class="text-sm">
                            Bidan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[3]" id="Perawat" value="Perawat" data-nilai_kuesioner_baduta="1">
                        <label for="Perawat" class="text-sm">
                            Perawat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[3]" id="DukunBeranak" value="Dukun Beranak" data-nilai_kuesioner_baduta="0">
                        <label for="DukunBeranak" class="text-sm">Dukun Beranak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[3]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[3]" value="4">
            <input type="hidden" name="answer_point[3]" value="0">
            <input type="hidden" name="answer_category[3]" value="Baduta">
            <input type="hidden" name="answer_type[3]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Jenis Persalinan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[4]" id="LahirNormal" value="Lahir Normal">
                        <label for="LahirNormal" class="text-sm">
                            Lahir Normal</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[4]" id="LahirPremature" value="Lahir Premature">
                        <label for="LahirPremature" class="text-sm">
                            Lahir Premature</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[4]" id="LahirCaecar" value="Lahir Caecar">
                        <label for="LahirCaecar" class="text-sm">
                            Lahir Caecar</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[4]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[4]" value="5">
            <input type="hidden" name="answer_point[4]" value="0">
            <input type="hidden" name="answer_category[4]" value="Baduta">
            <input type="hidden" name="answer_type[4]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah Bayi dilakukan Inisisasi menuyusui Dini :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[5]" id="YaMenyusui" value="Ya">
                        <label for="YaMenyusui" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[5]" id="TidakMenyusui" value="Tidak">
                        <label for="TidakMenyusui" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[5]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[5]" value="6">
            <input type="hidden" name="answer_point[5]" value="0">
            <input type="hidden" name="answer_category[5]" value="Baduta">
            <input type="hidden" name="answer_type[5]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Pemberian kolostrum pada saat lahir (ASI yang pertama keluar biasanya encer bening dan atau berwarna kekuningan) :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[6]" id="YaKolostrim" value="Ya" data-nilai_kuesioner_baduta="1">
                        <label for="YaKolostrim" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[6]" id="TidakKolostrum" value="Tidak" data-nilai_kuesioner_baduta="0">
                        <label for="TidakKolostrum" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[6]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[6]" value="7">
            <input type="hidden" name="answer_point[6]" value="0">
            <input type="hidden" name="answer_category[6]" value="Baduta">
            <input type="hidden" name="answer_type[6]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Pemberian ASI (Khusus untuk bayi) :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[7]" id="ASI" value="ASI" data-nilai_kuesioner_baduta="1">
                        <label for="ASI" class="text-sm">
                            ASI</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[7]" id="ASISusuFormula" value="ASI + Susu Formula" data-nilai_kuesioner_baduta="0">
                        <label for="ASISusuFormula" class="text-sm">
                            ASI + Susu Formula</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[7]" id="ASIFormula" value="ASI Formula" data-nilai_kuesioner_baduta="0">
                        <label for="ASIFormula" class="text-sm">
                            ASI Formula</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[7]" id="Lainnya" value="Lainnya" data-nilai_kuesioner_baduta="0">
                        <label for="Lainnya" class="text-sm">
                            Lainnya</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[7]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[7]" value="8">
            <input type="hidden" name="answer_point[7]" value="0">
            <input type="hidden" name="answer_category[7]" value="Baduta">
            <input type="hidden" name="answer_type[7]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Alasan tidak diberikan ASI :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[8]" class="border-zinc-500 rounded w-4/4 w-full" id="AlasantidakdiberikanASI" placeholder="Masukkan alasan tidak diberikan ASI...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[8]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[8]" value="9">
            <input type="hidden" name="answer_point[8]" value="0">
            <input type="hidden" name="answer_category[8]" value="Baduta">
            <input type="hidden" name="answer_type[8]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah sampai sekarang masih diberikan ASI :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[9]" id="YaMasih" value="Ya">
                        <label for="YaMasih" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[9]" id="TidakLagi" value="Tidak">
                        <label for="TidakLagi" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[9]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[9]" value="10">
            <input type="hidden" name="answer_point[9]" value="0">
            <input type="hidden" name="answer_category[9]" value="Baduta">
            <input type="hidden" name="answer_type[9]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Rutin ke Posyandu :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[10]" id="YaRutin" value="Ya" data-nilai_kuesioner_baduta="1">
                        <label for="YaRutin" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[10]" id="TidakRutin" value="Tidak" data-nilai_kuesioner_baduta="0">
                        <label for="TidakRutin" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[10]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[10]" value="11">
            <input type="hidden" name="answer_point[10]" value="0">
            <input type="hidden" name="answer_category[10]" value="Baduta">
            <input type="hidden" name="answer_type[10]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Status Imunisasi :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[11]" id="Lengkap" value="Lengkap: imunisasi sesuai Usia" data-nilai_kuesioner_baduta="1">
                        <label for="Lengkap" class="text-sm">Lengkap: imunisasi sesuai Usia</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[11]" id="TidakLengkap" value="Tidak Lengkap: imunisasi tidak sesuai usia" data-nilai_kuesioner_baduta="0">
                        <label for="TidakLengkap" class="text-sm">Tidak Lengkap: imunisasi tidak sesuai usia</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[11]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[11]" value="12">
            <input type="hidden" name="answer_point[11]" value="0">
            <input type="hidden" name="answer_category[11]" value="Baduta">
            <input type="hidden" name="answer_type[11]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Pengisian berdasarkan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[12]" id="Catatan" value="Ya, berdasarkan catatan">
                        <label for="Catatan" class="text-sm">Ya, berdasarkan catatan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[12]" id="Pengakuan" value="Ya, berdasarkan pengakuan">
                        <label for="Pengakuan" class="text-sm">Ya, berdasarkan pengakuan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[12]" id="TidakDilakukan" value="Tidak dilakukan">
                        <label for="TidakDilakukan" class="text-sm">Tidak dilakukan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[12]" id="TidakTahu" value="Tidak tahu">
                        <label for="TidakTahu" class="text-sm">Tidak tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[12]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[12]" value="13">
            <input type="hidden" name="answer_point[12]" value="0">
            <input type="hidden" name="answer_category[12]" value="Baduta">
            <input type="hidden" name="answer_type[12]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Jenis Imunisasi :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="HepatitisB0" value="Hepatitis B 0">
                        <label for="HepatitisB0" class="text-sm">Hepatitis B 0</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="BCG" value="BCG">
                        <label for="BCG" class="text-sm">BCG</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="DPT-HBCombo/DPT-HBHiB1" value="DPT-HB Combo / DPT-HBHiB 1">
                        <label for="DPT-HBCombo/DPT-HBHiB1" class="text-sm">DPT-HB Combo / DPT-HBHiB 1</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="DPT-HB Combo/DPT-HBHiB2" value="DPT-HB Combo / DPT-HBHiB 2">
                        <label for="DPT-HB Combo/DPT-HBHiB2" class="text-sm">DPT-HB Combo / DPT-HBHiB 2</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="DPT-HBCombo/DPT-HBHiB3" value="DPT-HB Combo / DPT-HBHiB 3">
                        <label for="DPT-HBCombo/DPT-HBHiB3" class="text-sm">DPT-HB Combo / DPT-HBHiB 3</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="DPT-HBCombo/DPT-HBHiBlanjutan" value="DPT-HB Combo / DPT-HBHiB lanjutan">
                        <label for="DPT-HBCombo/DPT-HBHiBlanjutan" class="text-sm">DPT-HB Combo / DPT-HBHiB lanjutan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="OralPolioVaccine(OPV)1" value="Oral Polio Vaccine (OPV) 1">
                        <label for="OralPolioVaccine(OPV)1" class="text-sm">Oral Polio Vaccine (OPV) 1</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="OralPolioVaccine(OPV)2" value="Oral Polio Vaccine (OPV) 2">
                        <label for="OralPolioVaccine(OPV)2" class="text-sm">Oral Polio Vaccine (OPV) 2</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="OralPolioVaccine(OPV)3" value="Oral Polio Vaccine (OPV) 3">
                        <label for="OralPolioVaccine(OPV)3" class="text-sm">Oral Polio Vaccine (OPV) 3</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="OralPolioVaccine(OPV)4" value="Oral Polio Vaccine (OPV) 4">
                        <label for="OralPolioVaccine(OPV)4" class="text-sm">Oral Polio Vaccine (OPV) 4</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="InactivatedPoliovirusVaccine(IPV)1" value="Inactivated Poliovirus Vaccine (IPV) 1">
                        <label for="InactivatedPoliovirusVaccine(IPV)1" class="text-sm">Inactivated Poliovirus Vaccine (IPV) 1</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="InactivatedPoliovirusVaccine(IPV)2" value="Inactivated Poliovirus Vaccine (IPV) 2">
                        <label for="InactivatedPoliovirusVaccine(IPV)2" class="text-sm">Inactivated Poliovirus Vaccine (IPV) 2</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="InactivatedPoliovirusVaccine(IPV)3" value="Inactivated Poliovirus Vaccine (IPV) 3">
                        <label for="InactivatedPoliovirusVaccine(IPV)3" class="text-sm">Inactivated Poliovirus Vaccine (IPV) 3</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="Campak-Rubela(MR/MMR)" value="Campak-Rubela (MR/MMR)">
                        <label for="Campak-Rubela(MR/MMR)" class="text-sm">Campak-Rubela (MR/MMR)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[13][]" id="Campak-Rubela(MR/MMR)lanjutan" value="Campak-Rubela (MR/MMR) lanjutan">
                        <label for="Campak-Rubela(MR/MMR)lanjutan" class="text-sm">Campak-Rubela (MR/MMR) lanjutan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[13]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[13]" value="14">
            <input type="hidden" name="answer_point[13]" value="0">
            <input type="hidden" name="answer_category[13]" value="Baduta">
            <input type="hidden" name="answer_type[13]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Alasan Imunisasi Tidak Lengkap :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Lupatidaktahujadwalimnisasi" value="Lupa/tidak tahu jadwal imunisasi">
                        <label for="Lupatidaktahujadwalimnisasi" class="text-sm">Lupa/tidak tahu jadwal imunisasi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="TidaktahujadwalPosyandu" value="Tidak tahu jadwal Posyandu">
                        <label for="TidaktahujadwalPosyandu" class="text-sm">Tidak tahu jadwal Posyandu</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Vaksintidaktersedia" value="Vaksin tidak tersedia">
                        <label for="Vaksintidaktersedia" class="text-sm">Vaksin tidak tersedia</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Tidakdiijinkanpihakkeluarga" value="Tidak diijinkan pihak keluarga">
                        <label for="Tidakdiijinkanpihakkeluarga" class="text-sm">Tidak diijinkan pihak keluarga</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Pelayananposyandututup" value="Pelayanan Posyandu tutup">
                        <label for="Pelayananposyandututup" class="text-sm">Pelayanan Posyandu tutup</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Fasilitaskesehatanjauh" value="Fasilitas kesehatan jauh">
                        <label for="Fasilitaskesehatanjauh" class="text-sm">Fasilitas kesehatan jauh</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Transportasisulit/mahal" value="Transportasi sulit/ mahal">
                        <label for="Transportasisulit/mahal" class="text-sm">Transportasi sulit/ mahal</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Takutanakpanas/demam" value="Takut anak panas/demam">
                        <label for="Takutanakpanas/demam" class="text-sm">Takut anak panas/demam</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Kepercayaan/agama" value="Kepercayaan/agama">
                        <label for="Kepercayaan/agama" class="text-sm">Kepercayaan/agama</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="Belumadapelayananimunisasi" value="Belum ada pelayanan imunisasi sesuai jadwal di Buku KIA">
                        <label for="Belumadapelayananimunisasi" class="text-sm">Belum ada pelayanan imunisasi sesuai jadwal di Buku KIA</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[14][]" id="TakuttertularCOVID-19" value="Takut tertular COVID-19">
                        <label for="TakuttertularCOVID-19" class="text-sm">Takut tertular COVID-19</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[14]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[14]" value="15">
            <input type="hidden" name="answer_point[14]" value="0">
            <input type="hidden" name="answer_category[14]" value="Baduta">
            <input type="hidden" name="answer_type[14]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Penimbangan berat badan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="PuskemasTimbangan" value="Puskemas">
                        <label for="PuskemasTimbangan" class="text-sm">Puskemas</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="Posyandu" value="Posyandu">
                        <label for="Posyandu" class="text-sm">Posyandu</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="Klinik/PraktekDokter/Bidan/Perawat" value="Klinik/Praktek Dokter/Bidan/Perawat">
                        <label for="Klinik/PraktekDokter/Bidan/Perawat" class="text-sm">Klinik/Praktek Dokter/Bidan/Perawat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="Rumahsakit" value="Rumah sakit">
                        <label for="Rumahsakit" class="text-sm">Rumah sakit</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="Kunjunganpetugaskerumah" value="Kunjungan petugas ke rumah">
                        <label for="Kunjunganpetugaskerumah" class="text-sm">Kunjungan petugas ke rumah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="Mandiridirumahtangga" value="Mandiri di rumah tangga">
                        <label for="Mandiridirumahtangga" class="text-sm">Mandiri di rumah tangga</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="PAUD/TK/sederajat" value="PAUD/TK/sederajat">
                        <label for="PAUD/TK/sederajat" class="text-sm">PAUD/TK/sederajat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[15]" id="TidakPernahditimbang" value="Tidak Pernah ditimbang">
                        <label for="TidakPernahditimbang" class="text-sm">Tidak Pernah ditimbang</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[15]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[15]" value="16">
            <input type="hidden" name="answer_point[15]" value="0">
            <input type="hidden" name="answer_category[15]" value="Baduta">
            <input type="hidden" name="answer_type[15]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Usia Anak diberikan Makanan Pendamping ASI (MP-ASI) :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[16]" id="kurang6bulan" value="< 6 bulan">
                        <label for="kurang6bulan" class="text-sm">
                            < 6 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[16]" id="lebih6bulan" value=">= 6 bulan">
                        <label for="lebih6bulan" class="text-sm">>= 6 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[16]" id="BelumMPASI" value="Belum MPA-SI">
                        <label for="BelumMPASI" class="text-sm">Belum MPA-SI</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[16]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[16]" value="17">
            <input type="hidden" name="answer_point[16]" value="0">
            <input type="hidden" name="answer_category[16]" value="Baduta">
            <input type="hidden" name="answer_type[16]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Jenis MP ASI yang diberikan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[17]" id="Dibuatsendiri" value="Dibuat sendiri">
                        <label for="Dibuatsendiri" class="text-sm">
                            Dibuat sendiri</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[17]" id="Instan/dibeli" value="Instan/dibeli">
                        <label for="Instan/dibeli" class="text-sm">Instan/dibeli</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[17]" id="BelumMPASI18" value="Belum MPA-SI">
                        <label for="BelumMPASI18" class="text-sm">Belum MPA-SI</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[17]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[17]" value="18">
            <input type="hidden" name="answer_point[17]" value="0">
            <input type="hidden" name="answer_category[17]" value="Baduta">
            <input type="hidden" name="answer_type[17]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Anak tetap diberikan ASI selama mendapatkan MP-ASI :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[18]" id="Ya19" value="Ya">
                        <label for="Ya19" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[18]" id="Tidak19" value="Tidak">
                        <label for="Tidak19" class="text-sm">Tidak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[18]" id="BelumMPASI19" value="Belum MPA-SI">
                        <label for="BelumMPASI19" class="text-sm">Belum MPA-SI</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[18]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[18]" value="19">
            <input type="hidden" name="answer_point[18]" value="0">
            <input type="hidden" name="answer_category[18]" value="Baduta">
            <input type="hidden" name="answer_type[18]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 24 jam terakhir (mulai dari bangun tidur kemarin pagi hingga pagi tadi), makanan apa saja yang diberikan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="ASIsaja" value="ASI saja">
                        <label for="ASIsaja" class="text-sm">
                            ASI saja</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Airputih" value="Air putih">
                        <label for="Airputih" class="text-sm">Air putih</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Susuformulabayi/baduta" value="Susu formula bayi/baduta">
                        <label for="Susuformulabayi/baduta" class="text-sm">Susu formula bayi/baduta</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Jusatausaribuah" value="Jus atau sari buah">
                        <label for="Jusatausaribuah" class="text-sm">Jus atau sari buah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Minuman/cairanlainnya" value="Minuman/cairan lainnya (seperti air gula, kental manis, teh, air tajin, susu kedelai, dll)">
                        <label for="Minuman/cairanlainnya" class="text-sm">Minuman/cairan lainnya (seperti air gula, kental manis, teh, air tajin, susu kedelai, dll)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Yogurt" value="Yogurt (Yakult, Vitacarm, dll tidak dimasukkan sebagai Yogurt)">
                        <label for="Yogurt" class="text-sm">Yogurt (Yakult, Vitacarm, dll tidak dimasukkan sebagai Yogurt)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Makananbayibermerek" value="Makanan bayi bermerek, misalnya Sun, Milna, Cerelac dll">
                        <label for="Makananbayibermerek" class="text-sm">Makanan bayi bermerek, misalnya Sun, Milna, Cerelac dll</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="makananBerat" value="Nasi, roti, mie, bubur, jagung, sagu atau makanan lain yang dibuat dari padi - padian seperti beras, gandum, sorgum, dll">
                        <label for="makananBerat" class="text-sm">Nasi, roti, mie, bubur, jagung, sagu atau makanan lain yang dibuat dari padi - padian seperti beras, gandum, sorgum, dll</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Sayur" value="Labu kuning, wortel, atau ubi jalar yang berwarna kuning atau oranye didalamnya">
                        <label for="Sayur" class="text-sm">Labu kuning, wortel, atau ubi jalar yang berwarna kuning atau oranye didalamnya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Umbian" value="Kentang, ubi kayu/ketela pohon/singkong, talas, dan makanan lain dari akar - akaran atau akar umb">
                        <label for="Umbian" class="text-sm">Kentang, ubi kayu/ketela pohon/singkong, talas, dan makanan lain dari akar - akaran atau akar umb</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="SayurHijau" value="Sayuran hijau (bayam, kangkung, katuk, daun singkong, daun labu dll.)">
                        <label for="SayurHijau" class="text-sm">Sayuran hijau (bayam, kangkung, katuk, daun singkong, daun labu dll.)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="BuahBuahan" value="Buah-buahan yang kaya vitamin A yang masak, seperti mangga, pepaya, 8 nangka, cempedak, kesemek, melon kuning">
                        <label for="BuahBuahan" class="text-sm">Buah-buahan yang kaya vitamin A yang masak, seperti mangga, pepaya, 8 nangka, cempedak, kesemek, melon kuning</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="BuahLainnya" value="Buah atau sayuran lainnya (seperti apel, alpukat, kapri, terong, oyong dll)">
                        <label for="BuahLainnya" class="text-sm">Buah atau sayuran lainnya (seperti apel, alpukat, kapri, terong, oyong dll)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="HatiAmpela" value="Hati, ampela, ginjal, jantung, atau jeroan lainnya">
                        <label for="HatiAmpela" class="text-sm">Hati, ampela, ginjal, jantung, atau jeroan lainnya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Daging" value="Daging: ayam, sapi, kambing, babi atau itik">
                        <label for="Daging" class="text-sm">Daging: ayam, sapi, kambing, babi atau itik</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Telur" value="Telur">
                        <label for="Telur" class="text-sm">Telur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="KacangKacangan" value="Makanan dari kacang - kacangan (kacang kedelai, kacang merah, kacang tolo, kacang jogo, kacang hijau, kacang babi, kacang tanah, tahu, tempe, dll.)">
                        <label for="KacangKacangan" class="text-sm">Makanan dari kacang - kacangan (kacang kedelai, kacang merah, kacang tolo, kacang jogo, kacang hijau, kacang babi, kacang tanah, tahu, tempe, dll.)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Seefood" value="Ikan atau makan seafood">
                        <label for="Seefood" class="text-sm">Ikan atau makan seafood</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="Keju" value="Keju atau makanan lain yang terbuat dari susu">
                        <label for="Keju" class="text-sm">Keju atau makanan lain yang terbuat dari susu</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="MakananPadat" value="Makanan padat, setengah padat, makana lumat lainnya termasuk kue-kue seperti kue pisang, cucur,pancong, permen">
                        <label for="MakananPadat" class="text-sm">Makanan padat, setengah padat, makana lumat lainnya termasuk kue-kue seperti kue pisang, cucur,pancong, permen</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[19][]" id="BelumdiberikanMPASI20" value="Belum diberikan MP-ASI">
                        <lbel for="BelumdiberikanMPASI20" class="text-sm">Belum diberikan MP-ASI</lbel>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[19]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[19]" value="20">
            <input type="hidden" name="answer_point[19]" value="0">
            <input type="hidden" name="answer_category[19]" value="Baduta">
            <input type="hidden" name="answer_type[19]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 1 bulan terakhir, apakah pernah di diagnosis ISPA oleh tenaga kesehatan? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[20]" id="Ya21" value="Ya">
                        <label for="Ya21" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[20]" id="Tidak21" value="Tidak">
                        <label for="Tidak21" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[20]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[20]" value="21">
            <input type="hidden" name="answer_point[20]" value="0">
            <input type="hidden" name="answer_category[20]" value="Baduta">
            <input type="hidden" name="answer_type[20]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 1 bulan terakhir, apakah pernah mengalami gejala ISPA seperti demam, batuk < 2 minggu, pilek, dan atau sakit tenggorokan? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[21]" id="Ya22" value="Ya">
                        <label for="Ya22" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[21]" id="Tidak22" value="Tidak">
                        <label for="Tidak22" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[21]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[21]" value="22">
            <input type="hidden" name="answer_point[21]" value="0">
            <input type="hidden" name="answer_category[21]" value="Baduta">
            <input type="hidden" name="answer_type[21]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 1 bulan terakhir, apakah pernah di diagnosis DIARE oleh tenaga kesehatan? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[22]" id="Ya23" value="Ya">
                        <label for="Ya23" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[22]" id="Tidak23" value="Tidak">
                        <label for="Tidak23" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[22]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[22]" value="23">
            <input type="hidden" name="answer_point[22]" value="0">
            <input type="hidden" name="answer_category[22]" value="Baduta">
            <input type="hidden" name="answer_type[22]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 1 bulan terakhir, apakah pernah mengalami gejala DIARE seperti BAB lebih cair dan lebih 3 kali sehari dan atau BAB cair tidak bercampur darah? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[23]" id="Ya24" value="Ya">
                        <label for="Ya24" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[23]" id="Tidak24" value="Tidak">
                        <label for="Tidak24" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[23]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[23]" value="24">
            <input type="hidden" name="answer_point[23]" value="0">
            <input type="hidden" name="answer_category[23]" value="Baduta">
            <input type="hidden" name="answer_type[23]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 12 bulan terakhir, apakah pernah di diagnosis radang paru :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[24]" id="Ya25" value="Ya">
                        <label for="Ya25" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[24]" id="Tidak25" value="Tidak">
                        <label for="Tidak25" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[24]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[24]" value="25">
            <input type="hidden" name="answer_point[24]" value="0">
            <input type="hidden" name="answer_category[24]" value="Baduta">
            <input type="hidden" name="answer_type[24]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">(PNEUMONIA) dengan atau tanpa dilakukan foto dada (foto rontgen) oleh tenaga kesehatan? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[25]" id="Ya26" value="Ya">
                        <label for="Ya26" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[25]" id="Tidak26" value="Tidak">
                        <label for="Tidak26" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[25]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[25]" value="26">
            <input type="hidden" name="answer_point[25]" value="0">
            <input type="hidden" name="answer_category[25]" value="Baduta">
            <input type="hidden" name="answer_type[25]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 12 bulan terakhir, apakah pernah di diagnosa CAMPAK oleh tenaga kesehatan? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[26]" id="Ya27" value="Ya">
                        <label for="Ya27" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[26]" id="Tidak27" value="Tidak">
                        <label for="Tidak27" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[26]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[26]" value="27">
            <input type="hidden" name="answer_point[26]" value="0">
            <input type="hidden" name="answer_category[26]" value="Baduta">
            <input type="hidden" name="answer_type[26]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 12 bulan terakhir, apakah pernah mengalami gejala CAMPAK seperti demam , batuk atau pilek, dan timbul ruam merah di seluruh tubuh? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[27]" id="Ya28" value="Ya">
                        <label for="Ya28" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[27]" id="Tidak28" value="Tidak">
                        <label for="Tidak28" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[27]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[27]" value="28">
            <input type="hidden" name="answer_point[27]" value="0">
            <input type="hidden" name="answer_category[27]" value="Baduta">
            <input type="hidden" name="answer_type[27]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 12 bulan terakhir, apakah [NAMA] pernah di diagnosa KECACINGAN oleh tenaga kesehatan? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[28]" id="Ya29" value="Ya">
                        <label for="Ya29" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[28]" id="Tidak29" value="Tidak">
                        <label for="Tidak29" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[28]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[28]" value="29">
            <input type="hidden" name="answer_point[28]" value="0">
            <input type="hidden" name="answer_category[28]" value="Baduta">
            <input type="hidden" name="answer_type[28]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 12 bulan terakhir, apakah pernah mengalami gejala KECACINGAN seperti ditemukan cacing dalam tinja atau di anus/dubur dan atau anak sering menggaruk/ mengeluhkan rasa gatal pada area anus terutama di malam hari? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[29]" id="Ya30" value="Ya">
                        <label for="Ya30" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[29]" id="Tidak30" value="Tidak">
                        <label for="Tidak30" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[29]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[29]" value="30">
            <input type="hidden" name="answer_point[29]" value="0">
            <input type="hidden" name="answer_category[29]" value="Baduta">
            <input type="hidden" name="answer_type[29]" value="kuesioner">
        </div>
    </div>
    @elseif ($status->status == 'Anak SD')
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner Anak SD :</h1>
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Berat badan Anak :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[30]" id="PernahTimbang" value="Pernah ditimbang">
                        <label for="PernahTimbang" class="text-sm">
                            Pernah ditimbang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[30]" id="TidakPernahDitimbang" value="Tidak pernah ditimbang">
                        <label for="TidakPernahDitimbang" class="text-sm">
                            Tidak pernah ditimbang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[30]" id="TidakPerluDitimbang" value="Tidak perlu ditimbang">
                        <label for="TidakPerluDitimbang" class="text-sm">
                            Tidak perlu ditimbang</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[30]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[30]" value="31">
            <input type="hidden" name="answer_point[30]" value="0">
            <input type="hidden" name="answer_category[30]" value="Anak SD">
            <input type="hidden" name="answer_type[30]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Tempat Penimbangan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[31]" id="Sekolah" value="Sekolah">
                        <label for="Sekolah" class="text-sm">
                            Sekolah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[31]" id="Rumah/Mandiri" value="Rumah/Mandiri">
                        <label for="Rumah/Mandiri" class="text-sm">
                            Rumah/Mandiri</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[31]" id="TidakPerluDitimbang2" value="Tidak perlu ditimbang">
                        <label for="TidakPerluDitimbang2" class="text-sm">
                            Tidak perlu ditimbang</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[31]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[31]" value="32">
            <input type="hidden" name="answer_point[31]" value="0">
            <input type="hidden" name="answer_category[31]" value="Anak SD">
            <input type="hidden" name="answer_type[31]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dalam 24 jam terakhir (mulai dari bangun tidur kemarin pagi hingga pagi tadi), makanan apa saja yang diberikan</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="AirputihSD3" value="Air putih" data-nilai_kuesioner_anak="0">
                        <label for="AirputihSD3" class="text-sm">Air putih</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="JusatausaribuahSD3" value="Jus atau sari buah" data-nilai_kuesioner_anak="0">
                        <label for="JusatausaribuahSD3" class="text-sm">
                            Jus atau sari buah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="SusuformulaSD3" value="Susu formula" data-nilai_kuesioner_anak="0">
                        <label for="SusuformulaSD3" class="text-sm">
                            Susu formula</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="YogurtSD3" value="Yogurt (Yakult, Vitacarm, dll tidak dimasukkan sebagai Yogurt)" data-nilai_kuesioner_anak="0">
                        <label for="YogurtSD3" class="text-sm">
                            Yogurt (Yakult, Vitacarm, dll tidak dimasukkan sebagai Yogurt)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="NasirotiSD3" value="Nasi, roti, mie, bubur, jagung, sagu atau makanan lain yang dibuat dari padi-padian seperti beras, gandum, sorgum, dll" data-nilai_kuesioner_anak="0">
                        <label for="NasirotiSD3" class="text-sm">
                            Nasi, roti, mie, bubur, jagung, sagu atau makanan lain yang dibuat dari padi-padian seperti beras, gandum, sorgum, dll</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="LabukuningSD3" value="Labu kuning, wortel, atau ubi jalar yang berwarna kuning atau oranye didalamnya" data-nilai_kuesioner_anak="0">
                        <label for="LabukuningSD3" class="text-sm">
                            Labu kuning, wortel, atau ubi jalar yang berwarna kuning atau oranye didalamnya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="KentangubiSD3" value="Kentang, ubi kayu/ketela pohon/singkong, talas, dan makanan lain dari akarakaran atau akar umbi" data-nilai_kuesioner_anak="0">
                        <label for="KentangubiSD3" class="text-sm">
                            Kentang, ubi kayu/ketela pohon/singkong, talas, dan makanan lain dari akarakaran atau akar umbi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="SayuranhijauSD3" value="Sayuran hijau (bayam, kangkung, katuk, daun singkong, daun labu dll.)" data-nilai_kuesioner_anak="0">
                        <label for="SayuranhijauSD3" class="text-sm">
                            Sayuran hijau (bayam, kangkung, katuk, daun singkong, daun labu dll.)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="BuahBuahanSD3" value="Buah-buahan yang kaya vitamin A yang masak, seperti mangga, pepaya, nangka, cempedak, kesemek, melon kuning" data-nilai_kuesioner_anak="0">
                        <label for="BuahBuahanSD3" class="text-sm">
                            Buah-buahan yang kaya vitamin A yang masak, seperti mangga, pepaya, nangka, cempedak, kesemek, melon kuning</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="BuahsayuranSD3" value="Buah atau sayuran lainnya (seperti apel, alpukat, kapri, terong, oyong dll)" data-nilai_kuesioner_anak="0">
                        <label for="BuahsayuranSD3" class="text-sm">
                            Buah atau sayuran lainnya (seperti apel, alpukat, kapri, terong, oyong dll)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="HatiampelaSD3" value="Hati, ampela, ginjal, jantung, atau jeroan lainnya" data-nilai_kuesioner_anak="0">
                        <label for="HatiampelaSD3" class="text-sm">Hati, ampela, ginjal, jantung, atau jeroan lainnya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="DagingSD3" value="Daging: ayam, sapi, kambing atau itik" data-nilai_kuesioner_anak="1">
                        <label for="DagingSD3" class="text-sm">Daging: ayam, sapi, kambing atau itik</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="Telur" value="Telur" data-nilai_kuesioner_anak="0">
                        <label for="Telur" class="text-sm">Telur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="kacangkacanganSD3" value="Makanan dari kacangkacangan (kacang kedelai, kacang merah, kacang tolo, kacang jogo, kacang hijau, kacang babi, kacang tanah, tahu, tempe, dll.)" data-nilai_kuesioner_anak="0">
                        <label for="kacangkacanganSD3" class="text-sm">Makanan dari kacangkacangan (kacang kedelai, kacang merah, kacang tolo, kacang jogo, kacang hijau, kacang babi, kacang tanah, tahu, tempe, dll.)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="seafoodSD3" value="Ikan atau makan seafood" data-nilai_kuesioner_anak="1">
                        <label for="seafoodSD3" class="text-sm">Ikan atau makan seafood</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="KejuSD3" value="Keju atau makanan lain yang terbuat dari susu" data-nilai_kuesioner_anak="0">
                        <label for="KejuSD3" class="text-sm">Keju atau makanan lain yang terbuat dari susu</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[32][]" id="MieinstanSD3" value="Mie instan" data-nilai_kuesioner_anak="0">
                        <label for="MieinstanSD3" class="text-sm">Mie instan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[32]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[32]" value="33">
            <input type="hidden" name="answer_point[32]" value="0">
            <input type="hidden" name="answer_category[32]" value="Anak SD">
            <input type="hidden" name="answer_type[32]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Frekuensi makan ikan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[33]" id="SangatseringSD4" value="Sangat sering (setiap hari)" data-nilai_kuesioner_anak="1">
                        <label for="SangatseringSD4" class="text-sm">
                            Sangat sering (setiap hari)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[33]" id="JarangSD4" value="Jarang/Kadang-kadang" data-nilai_kuesioner_anak="0">
                        <label for="JarangSD4" class="text-sm">
                            Jarang/Kadang-kadang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[33]" id="TidakPernahSD4" value="Tidak Pernah" data-nilai_kuesioner_anak="0">
                        <label for="TidakPernahSD4" class="text-sm">
                            Tidak Pernah</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[33]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[33]" value="34">
            <input type="hidden" name="answer_point[33]" value="0">
            <input type="hidden" name="answer_category[33]" value="Anak SD">
            <input type="hidden" name="answer_type[33]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Alasan tidak makan ikan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[34]" id="AlergiproteinSD4" value="Alergi protein">
                        <label for="AlergiproteinSD4" class="text-sm">
                            Alergi protein</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[34]" id="TidaksukaSD4" value="Tidak suka rasa">
                        <label for="TidaksukaSD4" class="text-sm">
                            Tidak suka rasa</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[34]" id="LainnyaSD4" value="Lainnya">
                        <label for="LainnyaSD4" class="text-sm">
                            Lainnya</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[34]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[34]" value="35">
            <input type="hidden" name="answer_point[34]" value="0">
            <input type="hidden" name="answer_category[34]" value="Anak SD">
            <input type="hidden" name="answer_type[34]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Konsumsi susu :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[35]" id="SangasSD6" value="Sangat sering (setiap hari)">
                        <label for="SangasSD6" class="text-sm">
                            Sangat sering (setiap hari)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[35]" id="JarangSD6" value="Tidak suka rasa">
                        <label for="JarangSD6" class="text-sm">
                            Tidak suka rasa</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[35]" id="TidakPernahSD6" value="Tidak Pernah">
                        <label for="TidakPernahSD6" class="text-sm">
                            Tidak Pernah</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[35]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[35]" value="36">
            <input type="hidden" name="answer_point[35]" value="0">
            <input type="hidden" name="answer_category[35]" value="Anak SD">
            <input type="hidden" name="answer_type[35]" value="kuesioner">
        </div>
    </div>
    @elseif ($status->status == 'Remaja Putri')
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner Remaja Putri :</h1>
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Usia pertama kali menstruasi/ Haid :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[36]" class="border-zinc-500 rounded w-4/4 w-full" id="PertamaHaid" placeholder="Masukkan usia pertama kali haid...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[36]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[36]" value="37">
            <input type="hidden" name="answer_point[36]" value="0">
            <input type="hidden" name="answer_category[36]" value="Remaja Putri">
            <input type="hidden" name="answer_type[36]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah Pernah Mengkonsumsi Tablet Fe :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[37]" id="YaPutri2" value="Ya" data-nilai_kuesioner_remaja="1">
                        <label for="YaPutri2" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[37]" id="TidakPutri2" value="Tidak" data-nilai_kuesioner_anak="0">
                        <label for="TidakPutri2" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[37]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[37]" value="38">
            <input type="hidden" name="answer_point[37]" value="0">
            <input type="hidden" name="answer_category[37]" value="Remaja Putri">
            <input type="hidden" name="answer_type[37]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Seberapa sering konsumsi tablet Fe :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[38]" id="SaatPutri3" value="Saat menstruasi (sebelum/Saat/sesudah menstruasi)" data-nilai_kuesioner_anak="1">
                        <label for="SaatPutri3" class="text-sm">Saat menstruasi (sebelum/Saat/sesudah menstruasi)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[38]" id="JarangPutri3" value="Jarang/Kadang-kadang" data-nilai_kuesioner_anak="0">
                        <label for="JarangPutri3" class="text-sm">Jarang/Kadang-kadang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[38]" id="TidakpernahPutri3" value="Tidak pernah" data-nilai_kuesioner_anak="0">
                        <label for="TidakpernahPutri3" class="text-sm">Tidak pernah</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[38]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[38]" value="39">
            <input type="hidden" name="answer_point[38]" value="0">
            <input type="hidden" name="answer_category[38]" value="Remaja Putri">
            <input type="hidden" name="answer_type[38]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Alasan tidak mengkonsumsi Tablet Fe :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[39]" class="border-zinc-500 rounded w-4/4 w-full" id="AlasanPutri4" placeholder="Masukkan alasan tidak mengkonsumsi obat fe...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[39]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[39]" value="40">
            <input type="hidden" name="answer_point[39]" value="0">
            <input type="hidden" name="answer_category[39]" value="Remaja Putri">
            <input type="hidden" name="answer_type[39]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Sumber mendapatkan Tablet Fe :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[40]" id="PetugasKesehatanPutri5" value="Petugas Kesehatan">
                        <label for="PetugasKesehatanPutri5" class="text-sm">
                            Petugas Kesehatan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[40]" id="BeliSendiriPuti5" value="Beli Sendiri">
                        <label for="BeliSendiriPuti5" class="text-sm">
                            Beli Sendiri</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[40]" id="KeluargaPutri5" value="Keluarga (ibu, kakak, adik dan keluarga lainnya)">
                        <label for="KeluargaPutri5" class="text-sm">Keluarga (ibu, kakak, adik dan keluarga lainnya)</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[40]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[40]" value="41">
            <input type="hidden" name="answer_point[40]" value="0">
            <input type="hidden" name="answer_category[40]" value="Remaja Putri">
            <input type="hidden" name="answer_type[40]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah pernah diukur Kadar HB :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[41]" id="YaPutri6" value="Ya" data-nilai_kuesioner_anak="1">
                        <label for="YaPutri6" class="text-sm">
                            Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[41]" id="TidakPutri6" value="Tidak" data-nilai_kuesioner_anak="0">
                        <label for="TidakPutri6" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[41]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[41]" value="42">
            <input type="hidden" name="answer_point[41]" value="0">
            <input type="hidden" name="answer_category[41]" value="Remaja Putri">
            <input type="hidden" name="answer_type[41]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Ukuran lingkar lengan atas :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[42]" class="border-zinc-500 rounded w-4/4 w-full" id="LingkarLenganPutri7" placeholder="Masukkan ukuran lingkar lengan atas...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[42]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[42]" value="43">
            <input type="hidden" name="answer_point[42]" value="0">
            <input type="hidden" name="answer_category[42]" value="Remaja Putri">
            <input type="hidden" name="answer_type[42]" value="kuesioner">
        </div>

        <div class="mt-7 mb-7">
            <h1 class="font-bold text-lg">Pengetahuan :</h1>
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apa itu anemia :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[43]" id="KurangnyakadarHbPutri1" value="Kurangnya kadar Hb dalam darah" data-nilai_pengetahuan_remaja="1">
                        <label for="KurangnyakadarHbPutri1" class="text-sm">Kurangnya kadar Hb dalam darah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[43]" id="DarahrendahPutri1" value="Darah rendah" data-nilai_pengetahuan_remaja="0">
                        <label for="DarahrendahPutri1" class="text-sm">
                            Darah rendah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[43]" id="KurangdarahPutri1" value="Kurang darah" data-nilai_pengetahuan_remaja="0">
                        <label for="KurangdarahPutri1" class="text-sm">
                            Kurang darah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[43]" id="TidaktahuPP1" value="Tidak tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TidaktahuPP1" class="text-sm">
                            Tidak tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[43]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[43]" value="44">
            <input type="hidden" name="answer_point[43]" value="0">
            <input type="hidden" name="answer_category[43]" value="Remaja Putri">
            <input type="hidden" name="answer_type[43]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apa saja penyebab anemia ? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[44][]" id="KurangnyakadarHbPP2" value="Kurangnya kadar Hb dalam darah" data-nilai_pengetahuan_remaja="0">
                        <label for="KurangnyakadarHbPP2" class="text-sm">Kurangnya kadar Hb dalam darah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[44][]" id="MenstruasiPP2" value="Menstruasi" data-nilai_pengetahuan_remaja="1">
                        <label for="MenstruasiPP2" class="text-sm">
                            Menstruasi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[44][]" id="ProteinZatBesiPP2" value="Kurangnya konsumsi makanan yang mengandung zat besi atau Fe" data-nilai_pengetahuan_remaja="1">
                        <label for="ProteinZatBesiPP2" class="text-sm">
                            Kurangnya konsumsi makanan yang mengandung zat besi atau Fe</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[44][]" id="PerdarahanPP2" value="Perdarahan" data-nilai_pengetahuan_remaja="1">
                        <label for="PerdarahanPP2" class="text-sm">Perdarahan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[44][]" id="KurangMakanProteinPP2" value="Kurangnya konsumsi makanan yang mengandung protein" data-nilai_pengetahuan_remaja="0">
                        <label for="KurangMakanProteinPP2" class="text-sm">
                            Kurangnya konsumsi makanan yang mengandung protein</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[44][]" id="TerlaluBanyakMakanPP2" value="Terlalu banyak makanan berlemak" data-nilai_pengetahuan_remaja="0">
                        <label for="TerlaluBanyakMakanPP2" class="text-sm">
                            Terlalu banyak makanan berlemak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[44][]" id="TidakTahuPP2" value="Tidak tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakTahuPP2" class="text-sm">
                            Tidak tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[44]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[44]" value="45">
            <input type="hidden" name="answer_point[44]" value="0">
            <input type="hidden" name="answer_category[44]" value="Remaja Putri">
            <input type="hidden" name="answer_type[44]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Bagaimana cara mengetahui anemia :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[45][]" id="PemeriksaanDarahPP3" value="Periksa darah untuk mengetahui kadar Hb" data-nilai_pengetahuan_remaja="1">
                        <label for="PemeriksaanDarahPP3" class="text-sm">Periksa darah untuk mengetahui kadar Hb</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[45][]" id="CiriFisikPP3" value="Melihat ciri-ciri fisik (kulit dan telapak tangan pucat)" data-nilai_pengetahuan_remaja="1">
                        <label for="CiriFisikPP3" class="text-sm">
                            Melihat ciri-ciri fisik (kulit dan telapak tangan pucat)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[45][]" id="SeringPusingPP3" value="Merasa sering pusing" data-nilai_pengetahuan_remaja="1">
                        <label for="SeringPusingPP3" class="text-sm">Merasa sering pusing</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[45][]" id="MataKunangPP3" value="Mata sering berkunang-kunang" data-nilai_pengetahuan_remaja="0">
                        <label for="MataKunangPP3" class="text-sm">
                            Mata sering berkunang-kunang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[45][]" id="AdaBintikPP3" value="Mengecek apakah ada bintik-bintik merah di kulit" data-nilai_pengetahuan_remaja="0">
                        <label for="AdaBintikPP3" class="text-sm">
                            Mengecek apakah ada bintik-bintik merah di kulit</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[45][]" id="MerasaMualPP3" value="Sering merasa mual" data-nilai_pengetahuan_remaja="0">
                        <label for="MerasaMualPP3" class="text-sm">
                            Sering merasa mual</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[45][]" id="TidaktahuPP3" value="Tidak tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TidaktahuPP3" class="text-sm">
                            Tidak tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[45]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[45]" value="46">
            <input type="hidden" name="answer_point[45]" value="0">
            <input type="hidden" name="answer_category[45]" value="Remaja Putri">
            <input type="hidden" name="answer_type[45]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Sumber zat besi yang berasal dari makanan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="DagingPP4" value="Daging" data-nilai_pengetahuan_remaja="1">
                        <label for="DagingPP4" class="text-sm">Daging</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="IkanPP4" value="Ikan" data-nilai_pengetahuan_remaja="1">
                        <label for="IkanPP4" class="text-sm">
                            Ikan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="HatiPP4" value="Hati" data-nilai_pengetahuan_remaja="0">
                        <label for="HatiPP4" class="text-sm">Hati</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="AyamPP4" value="Ayam" data-nilai_pengetahuan_remaja="1">
                        <label for="AyamPP4" class="text-sm">
                            Ayam</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="TelurPP4" value="Telur" data-nilai_pengetahuan_remaja="1">
                        <label for="TelurPP4" class="text-sm">
                            Telur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="KentangPP4" value="Kentang" data-nilai_pengetahuan_remaja="1">
                        <label for="KentangPP4" class="text-sm">
                            Kentang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="KacangtanahPP4" value="Kacang tanah" data-nilai_pengetahuan_remaja="1">
                        <label for="KacangtanahPP4" class="text-sm">
                            Kacang tanah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="DaunsingkongPP4" value="Daun singkong" data-nilai_pengetahuan_remaja="0">
                        <label for="DaunsingkongPP4" class="text-sm">
                            Daun singkong</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="BayamPP4" value="Bayam" data-nilai_pengetahuan_remaja="1">
                        <label for="BayamPP4" class="text-sm">
                            Bayam</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="TomatPP4" value="Tomat" data-nilai_pengetahuan_remaja="0">
                        <label for="TomatPP4" class="text-sm">
                            Tomat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="JerukPP4" value="Jeruk" data-nilai_pengetahuan_remaja="0">
                        <label for="JerukPP4" class="text-sm">
                            Jeruk</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="WortelPP4" value="Wortel" data-nilai_pengetahuan_remaja="0">
                        <label for="WortelPP4" class="text-sm">
                            Wortel</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[46][]" id="TidakTauPP4" value="Tidak Tau" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakTauPP4" class="text-sm">
                            Tidak Tau</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[46]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[46]" value="47">
            <input type="hidden" name="answer_point[46]" value="0">
            <input type="hidden" name="answer_category[46]" value="Remaja Putri">
            <input type="hidden" name="answer_type[46]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Gejala apa saja yang ditimbulkan oleh anemia :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="PusingPP5" value="Pusing" data-nilai_pengetahuan_remaja="1">
                        <label for="PusingPP5" class="text-sm">Pusing</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="MataKunangPP5" value="Mata berkunang-kunang" data-nilai_pengetahuan_remaja="1">
                        <label for="MataKunangPP5" class="text-sm">
                            Mata berkunang-kunang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="KelopakMataPP5" value="Kelopak mata dan kulit menjadi pucat" data-nilai_pengetahuan_remaja="1">
                        <label for="KelopakMataPP5" class="text-sm">Kelopak mata dan kulit menjadi pucat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="LesuPP5" value="Lesu" data-nilai_pengetahuan_remaja="1">
                        <label for="LesuPP5" class="text-sm">
                            Lesu</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="LemahPP5" value="Lemah" data-nilai_pengetahuan_remaja="1">
                        <label for="LemahPP5" class="text-sm">
                            Lemah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="LetihPP5" value="Letih" data-nilai_pengetahuan_remaja="1">
                        <label for="LetihPP5" class="text-sm">
                            Letih</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="LelahPP5" value="Lelah" data-nilai_pengetahuan_remaja="1">
                        <label for="LelahPP5" class="text-sm">
                            Lelah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="BeratBadanTurunPP5" value="Berat badan turun" data-nilai_pengetahuan_remaja="0">
                        <label for="BeratBadanTurunPP5" class="text-sm">
                            Berat badan turun</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="BintikMerahPP5" value="Bintik-bintik merah di kulit" data-nilai_pengetahuan_remaja="0">
                        <label for="BintikMerahPP5" class="text-sm">
                            Bintik-bintik merah di kulit</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="RasaPahitPP5" value="Rasa pahit di mulut" data-nilai_pengetahuan_remaja="0">
                        <label for="RasaPahitPP5" class="text-sm">
                            Rasa pahit di mulut</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[47][]" id="TidakTahuPP5" value="Tidak Tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakTahuPP5" class="text-sm">
                            Tidak Tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[47]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[47]" value="48">
            <input type="hidden" name="answer_point[47]" value="0">
            <input type="hidden" name="answer_category[47]" value="Remaja Putri">
            <input type="hidden" name="answer_type[47]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dampak anemia terhadap prestasi belajar :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[48]" id="TidakPengaruhPP6" value="Pusing" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakPengaruhPP6" class="text-sm">Pusing</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[48]" id="MenurunPP6" value="Menurun" data-nilai_pengetahuan_remaja="1">
                        <label for="MenurunPP6" class="text-sm">
                            Menurun</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[48]" id="MeningkatPP6" value="Meningkat" data-nilai_pengetahuan_remaja="0">
                        <label for="MeningkatPP6" class="text-sm">Meningkat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[48]" id="TidaktahuPP6" value="Tidak tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TidaktahuPP6" class="text-sm">
                            Tidak tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[48]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[48]" value="49">
            <input type="hidden" name="answer_point[48]" value="0">
            <input type="hidden" name="answer_category[48]" value="Remaja Putri">
            <input type="hidden" name="answer_type[48]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah anemia dapat dicegah :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[49]" id="YaPP7" value="Ya" data-nilai_pengetahuan_remaja="1">
                        <label for="YaPP7" class="text-sm">Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[49]" id="TidakPP7" value="Tidak" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakPP7" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[49]" id="TidakTahuPP7" value="Tidak Tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakTahuPP7" class="text-sm">Tidak Tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[49]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[49]" value="50">
            <input type="hidden" name="answer_point[49]" value="0">
            <input type="hidden" name="answer_category[49]" value="Remaja Putri">
            <input type="hidden" name="answer_type[49]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Bagaimana caranya untuk mencegah anemia :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[50][]" id="MakanSayurPP8" value="Makan sayur dan buah yang banyak mengandung vitamin C" data-nilai_pengetahuan_remaja="0">
                        <label for="MakanSayurPP8" class="text-sm">Makan sayur dan buah yang banyak mengandung vitamin C</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[50][]" id="BebasCacinganPP8" value="Menjaga diri dan lingkungan agar bebas cacingan" data-nilai_pengetahuan_remaja="0">
                        <label for="BebasCacinganPP8" class="text-sm">
                            Menjaga diri dan lingkungan agar bebas cacingan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[50][]" id="KonsumsiAyamPP8" value="Mengkonsumsi ayam, hati dan telur" data-nilai_pengetahuan_remaja="1">
                        <label for="KonsumsiAyamPP8" class="text-sm">Mengkonsumsi ayam, hati dan telur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[50][]" id="MinumTTDPP8" value="Minum Tablet Tambah Darah (TTD)" data-nilai_pengetahuan_remaja="1">
                        <label for="MinumTTDPP8" class="text-sm">Minum Tablet Tambah Darah (TTD)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[50][]" id="OlahragaPP8" value="Berolah raga secara teratur" data-nilai_pengetahuan_remaja="0">
                        <label for="OlahragaPP8" class="text-sm">Berolah raga secara teratur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[50][]" id="MengurangiMakanLemakPP8" value="Mengurangi makanan berlemak" data-nilai_pengetahuan_remaja="0">
                        <label for="MengurangiMakanLemakPP8" class="text-sm">Mengurangi makanan berlemak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[50][]" id="TudakTahuPP8" value="Tidak Tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TudakTahuPP8" class="text-sm">Tidak Tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[50]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[50]" value="51">
            <input type="hidden" name="answer_point[50]" value="0">
            <input type="hidden" name="answer_category[50]" value="Remaja Putri">
            <input type="hidden" name="answer_type[50]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah anemia dapat diobati :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[51]" id="YaPP9" value="Ya" data-nilai_pengetahuan_remaja="1">
                        <label for="YaPP9" class="text-sm">Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[51]" id="TidakPP9" value="Tidak" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakPP9" class="text-sm">
                            Tidak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[51]" id="TidakTahuPP9" value="Tidak Tahu" data-nilai_pengetahuan_remaja="0">
                        <label for="TidakTahuPP9" class="text-sm">Tidak Tahu</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[51]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[51]" value="52">
            <input type="hidden" name="answer_point[51]" value="0">
            <input type="hidden" name="answer_category[51]" value="Remaja Putri">
            <input type="hidden" name="answer_type[51]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Bagaimanakah cara mengobati anemia :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[52][]" id="MengobatiCacingan10" value="Mengobati cacingan, malaria dan penyakit TBC" data-nilai_pengetahuan_remaja="0">
                        <label for="MengobatiCacingan10" class="text-sm">Mengobati cacingan, malaria dan penyakit TBC</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[52][]" id="MeningkatkanKonsumsiMakan10" value="Meningkatkan Konsumsi Makanan yang mengandung zat besi" data-nilai_pengetahuan_remaja="1">
                        <label for="MeningkatkanKonsumsiMakan10" class="text-sm">
                            Meningkatkan Konsumsi Makanan yang mengandung zat besi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[52][]" id="MenambahZatBesi10" value="Menambah pemasukan zat besi dengan minum tablet besi" data-nilai_pengetahuan_remaja="1">
                        <label for="MenambahZatBesi10" class="text-sm">Menambah pemasukan zat besi dengan minum tablet besi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[52][]" id="OlahragaTeratur10" value="Olahraga secara teratur" data-nilai_pengetahuan_remaja="0">
                        <label for="OlahragaTeratur10" class="text-sm">Olahraga secara teratur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="answer[52][]" id="IstirahatCukup10" value="Istirahat yang cukup" data-nilai_pengetahuan_remaja="0">
                        <label for="IstirahatCukup10" class="text-sm">Istirahat yang cukup</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[52]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[52]" value="53">
            <input type="hidden" name="answer_point[52]" value="0">
            <input type="hidden" name="answer_category[52]" value="Remaja Putri">
            <input type="hidden" name="answer_type[52]" value="pengetahuan">
        </div>
    </div>
    @elseif ($status->status == 'Ibu atau Ibu Hamil')
    <div class="flex-col mb-20 shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner Ibu & Ibu Hamil :</h1>
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="UsiaMenikah" class="font-semibold">Usia Saat Menikah :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[53]" class="border-zinc-500 rounded w-4/4 w-full" id="UsiaMenikah" placeholder="Masukkan usia saat menikah...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[53]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[53]" value="54">
            <input type="hidden" name="answer_point[53]" value="0">
            <input type="hidden" name="answer_category[53]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[53]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="UsiaKehamilanSaatIni" class="font-semibold">Usia Kehamilan saat ini (Khusus Ibu Hamil) :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[54]" class="border-zinc-500 rounded w-4/4 w-full" id="UsiaKehamilanSaatIni" placeholder="Masukkan usia saat menikah...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[54]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[54]" value="55">
            <input type="hidden" name="answer_point[54]" value="0">
            <input type="hidden" name="answer_category[54]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[54]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="UsiaKehamilanPertamaKali" class="font-semibold">Usia Kehamilan pertama kali memeriksakan kehamilan :</label>
            </div>
            <div class="flex gap-10 w-full">
                <div class="flex items-center w-full">
                    <div class="flex items-center w-full">
                        <input type="text" name="answer[55]" class="border-zinc-500 rounded w-4/4 w-full" id="UsiaKehamilanPertamaKali" placeholder="Masukkan usia kehamilan saat pertama kali memeriksa kehamilan...">
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[55]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[55]" value="56">
            <input type="hidden" name="answer_point[55]" value="0">
            <input type="hidden" name="answer_category[55]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[55]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Selama Kehamilan Melakukan Pemeriksaan (Antenatal Care) :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[56]" id="YaIbu4" value="Ya">
                        <label for="YaIbu4" class="text-sm">Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[56]" id="TidakIbu4" value="Tidak">
                        <label for="TidakIbu4" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[56]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[56]" value="57">
            <input type="hidden" name="answer_point[56]" value="0">
            <input type="hidden" name="answer_category[56]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[56]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Tempat pemeriksaan Kehamilan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[57]" id="puskesmasIbu5" value="Puskesmas">
                        <label for="puskesmas" class="text-sm">Puskesmas</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[57]" id="PosyanduIbu5" value="Posyandu">
                        <label for="PosyanduIbu5" class="text-sm">Posyandu</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[57]" id="Klinik/PraktekDokter/Bidan/PerawatIbu5" value="Klinik/Praktek Dokter/Bidan/Perawat">
                        <label for="Klinik/PraktekDokter/Bidan/PerawatIbu5" class="text-sm">Klinik/Praktek Dokter/Bidan/Perawat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[57]" id="RumahSakitIbu5" value="Rumah sakit">
                        <label for="RumahSakitIbu5" class="text-sm">Rumah sakit</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[57]" id="BidanDesaIbu5" value="Bidan Desa">
                        <label for="BidanDesaIbu5" class="text-sm">Bidan Desa</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[57]" id="TidakMemeriksakanIbu5" value="Tidak memeriksakan">
                        <label for="TidakMemeriksakanIbu5" class="text-sm">Tidak memeriksakan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[57]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[57]" value="58">
            <input type="hidden" name="answer_point[57]" value="0">
            <input type="hidden" name="answer_category[57]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[57]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-extrabold">Frekuensi Pemeriksaan Kehamilan :</label>
            </div>
            <div class="mb-3">
                <label for="" class="font-semibold">Tri Semester 1 (usia Kehamilan 1-3 Bulan/ 0-12 Minggu) :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[58]" id="1kaliIbu6" value="1 Kali" data-nilai_kuesioner_ibu="0">
                        <label for="1kaliIbu6" class="text-sm">1 Kali</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[58]" id="Lebih1KaliIbu6" value="> 1kal" data-nilai_kuesioner_ibu="1">
                        <label for="Lebih1KaliIbu6" class="text-sm">> 1kal</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[58]" id="TidakPernahIbu6" value="Tidak Pernah" data-nilai_kuesioner_ibu="0">
                        <label for="TidakPernahIbu6" class="text-sm">Tidak Pernah</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[58]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[58]" value=" 59">
            <input type="hidden" name="answer_point[58]" value="0">
            <input type="hidden" name="answer_category[58]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[58]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Tri Semester 2 (usia Kehamilan 4- 6 Bulan/13-24 Minggu) :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[59]" id="1kaliIbu7" value="1 Kali" data-nilai_kuesioner_ibu="0">
                        <label for="1kaliIbu7" class="text-sm">1 Kali</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[59]" id="Lebih1KaliIbu7" value="> 1kal" data-nilai_kuesioner_ibu="1">
                        <label for="Lebih1KaliIbu7" class="text-sm">> 1kal</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[59]" id="TidakPernahIbu7" value="Tidak Pernah" data-nilai_kuesioner_ibu="0">
                        <label for="TidakPernahIbu7" class="text-sm">Tidak Pernah</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[59]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[59]" value="60">
            <input type="hidden" name="answer_point[59]" value="0">
            <input type="hidden" name="answer_category[59]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[59]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Tri Semester 3 (usia Kehamilan 7-10 Bulan/25-40 Minggu) :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[60]" id="1kaliIbu8" value="1 Kali" data-nilai_kuesioner_ibu="0">
                        <label for="1kaliIbu8" class="text-sm">1 Kali</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[60]" id="Lebih1KaliIbu8" value="> 1kal" data-nilai_kuesioner_ibu="1">
                        <label for="Lebih1KaliIbu8" class="text-sm">> 1kal</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[60]" id="TidakPenahIbu8" value="Tidak Pernah" data-nilai_kuesioner_ibu="0">
                        <label for="TidakPenahIbu8" class="text-sm">Tidak Pernah</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[60]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[60]" value="61">
            <input type="hidden" name="answer_point[60]" value="0">
            <input type="hidden" name="answer_category[60]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[60]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah Ibu Rutin Konsumsi tablet Fe :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[61]" id="Rutin9" value="Rutin sesuai anjuran dokter/bidan/perawat" data-nilai_kuesioner_ibu="1">
                        <label for="Rutin9" class="text-sm">Rutin sesuai anjuran dokter/bidan/perawat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[61]" id="Kadang9" value="Kadang-kadang/Jarang" data-nilai_kuesioner_ibu="0">
                        <label for="Kadang9" class="text-sm">Kadang-kadang/Jarang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[61]" id="TidakPenahIbu9" value="Tidak Pernah" data-nilai_kuesioner_ibu="0">
                        <label for="TidakPenahIbu9" class="text-sm">Tidak Pernah</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[61]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[61]" value="62">
            <input type="hidden" name="answer_point[61]" value="0">
            <input type="hidden" name="answer_category[61]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[61]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah ibu pernah mengalami infeksi kecacingan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[62]" id="YaIbu10" value="Ya">
                        <label for="YaIbu10" class="text-sm">Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[62]" id="TidakIbu10" value="Tidak">
                        <label for="TidakIbu10" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[62]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[62]" value="63">
            <input type="hidden" name="answer_point[62]" value="0">
            <input type="hidden" name="answer_category[62]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[62]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah ibu sedang atau pernah hamil / mengandung :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="soal_ibu_11" id="YaIbu11" value="Ya">
                        <label for="YaIbu11" class="text-sm">Ya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="soal_ibu_11" id="TidakIbu11" value="Tidak">
                        <label for="TidakIbu11" class="text-sm">Tidak</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="jenis_pemeriksaan_kehamilan">
            <div class="mb-7">
                <h1 class="font-bold text-lg">Jenis Pemeriksaan kehamilan :</h1>
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Pengukuran tinggi badan pertama kali :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[63]" id="0bulan1" value="0-3 bulan">
                            <label for="0bulan1" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[63]" id="4bulan1" value="4-6 bulan">
                            <label for="4bulan1" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[63]" id="7bulan1" value="7-melahirkan">
                            <label for="7bulan1" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[63]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[63]" value="64">
                <input type="hidden" name="answer_point[63]" value="0">
                <input type="hidden" name="answer_category[63]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[63]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Penimbangan berat badan :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[64]" id="0bulan2" value="0-3 bulan">
                            <label for="0bulan2" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[64]" id="4bulan2" value="4-6 bulan">
                            <label for="4bulan2" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[64]" id="7bulan2" value="7-melahirkan">
                            <label for="7bulan2" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[64]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[64]" value="65">
                <input type="hidden" name="answer_point[64]" value="0">
                <input type="hidden" name="answer_category[64]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[64]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Pengukuran tekanan darah :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[65]" id="0bulan3" value="0-3 bulan">
                            <label for="0bulan3" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[65]" id="4bulan3" value="4-6 bulan">
                            <label for="4bulan3" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[65]" id="7bulan3" value="7-melahirkan">
                            <label for="7bulan3" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[65]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[65]" value="66">
                <input type="hidden" name="answer_point[65]" value="0">
                <input type="hidden" name="answer_category[65]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[65]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Pengukuran lingkar lengan atas pertama kali :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[66]" id="0bulan4" value="0-3 bulan">
                            <label for="0bulan4" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[66]" id="4bulan4" value="4-6 bulan">
                            <label for="4bulan4" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[66]" id="7bulan4" value="7-melahirkan">
                            <label for="7bulan4" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[66]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[66]" value="67">
                <input type="hidden" name="answer_point[66]" value="0">
                <input type="hidden" name="answer_category[66]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[66]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Pemeriksaan tinggi fundus uter :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[67]" id="0bulan5" value="0-3 bulan">
                            <label for="0bulan5" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[67]" id="4bulan5" value="4-6 bulan">
                            <label for="4bulan5" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[67]" id="7bulan5" value="7-melahirkan">
                            <label for="7bulan5" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[67]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[67]" value="68">
                <input type="hidden" name="answer_point[67]" value="0">
                <input type="hidden" name="answer_category[67]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[67]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Pemeriksaan letak janin :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[68]" id="0bulan6" value="0-3 bulan">
                            <label for="0bulan6" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[68]" id="4bulan6" value="4-6 bulan">
                            <label for="4bulan6" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[68]" id="7bulan6" value="7-melahirkan">
                            <label for="7bulan6" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[68]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[68]" value="69">
                <input type="hidden" name="answer_point[68]" value="0">
                <input type="hidden" name="answer_category[68]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[68]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Perhitungan denyut jantung janin :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[69]" id="0bulan7" value="0-3 bulan">
                            <label for="0bulan7" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[69]" id="4bulan7" value="4-6 bulan">
                            <label for="4bulan7" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[69]" id="7bulan7" value="7-melahirkan">
                            <label for="7bulan7" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[69]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[69]" value="70">
                <input type="hidden" name="answer_point[69]" value="0">
                <input type="hidden" name="answer_category[69]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[69]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Skrining Imunisasi Tetanus Difteri (Td) :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[70]" id="0bulan8" value="0-3 bulan">
                            <label for="0bulan8" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[70]" id="4bulan8" value="4-6 bulan">
                            <label for="4bulan8" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[70]" id="7bulan8" value="7-melahirkan">
                            <label for="7bulan8" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[70]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[70]" value="71">
                <input type="hidden" name="answer_point[70]" value="0">
                <input type="hidden" name="answer_category[70]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[70]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Imunisasi Tetanus Difteri (Td) :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[71]" id="0bulan9" value="0-3 bulan">
                            <label for="0bulan9" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[71]" id="4bulan9" value="4-6 bulan">
                            <label for="4bulan9" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[71]" id="7bulan9" value="7-melahirkan">
                            <label for="7bulan9" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[71]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[71]" value="72">
                <input type="hidden" name="answer_point[71]" value="0">
                <input type="hidden" name="answer_category[71]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[71]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Pemberian Tablet Fe (Tiap semester 30 tablet) :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[72]" id="0bulan10" value="0-3 bulan">
                            <label for="0bulan10" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[72]" id="4bulan10" value="4-6 bulan">
                            <label for="4bulan10" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[72]" id="7bulan10" value="7-melahirkan">
                            <label for="7bulan10" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[72]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[72]" value="73">
                <input type="hidden" name="answer_point[72]" value="0">
                <input type="hidden" name="answer_category[72]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[72]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Tes Golongan Darah :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[73]" id="0bulan11" value="0-3 bulan">
                            <label for="0bulan11" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[73]" id="4bulan11" value="4-6 bulan">
                            <label for="4bulan11" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[73]" id="7bulan11" value="7-melahirkan">
                            <label for="7bulan11" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[73]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[73]" value="74">
                <input type="hidden" name="answer_point[73]" value="0">
                <input type="hidden" name="answer_category[73]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[73]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Tes protein urine :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[74]" id="0bulan12" value="0-3 bulan">
                            <label for="0bulan12" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[74]" id="4bulan12" value="4-6 bulan">
                            <label for="4bulan12" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[74]" id="7bulan12" value="7-melahirkan">
                            <label for="7bulan12" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[74]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[74]" value="75">
                <input type="hidden" name="answer_point[74]" value="0">
                <input type="hidden" name="answer_category[74]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[74]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Tes HIV :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[75]" id="0bulan13" value="0-3 bulan">
                            <label for="0bulan13" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[75]" id="4bulan13" value="4-6 bulan">
                            <label for="4bulan13" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[75]" id="7bulan13" value="7-melahirkan">
                            <label for="7bulan13" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[75]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[75]" value="76">
                <input type="hidden" name="answer_point[75]" value="0">
                <input type="hidden" name="answer_category[75]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[75]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Tes Hb :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[76]" id="0bulan14" value="0-3 bulan">
                            <label for="0bulan14" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[76]" id="4bulan14" value="4-6 bulan">
                            <label for="4bulan14" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[76]" id="7bulan14" value="7-melahirkan">
                            <label for="7bulan14" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[76]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[76]" value="77">
                <input type="hidden" name="answer_point[76]" value="0">
                <input type="hidden" name="answer_category[76]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[76]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Kadar Hb :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="text" name="answer[77]" id="0bulan15" placeholder="Masukkan kadar gr%">
                            <label for="0bulan15" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="text" name="answer[77]" id="4bulan15" placeholder="Masukkan kadar gr%">
                            <label for="4bulan15" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="text" name="answer[77]" id="7bulan15" placeholder="Masukkan kadar gr%">
                            <label for="7bulan15" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[77]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[77]" value="78">
                <input type="hidden" name="answer_point[77]" value="0">
                <input type="hidden" name="answer_category[77]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[77]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Usia Kehamilan Saat Pemeriksaan Hb :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="text" name="answer[78]" id="0bulan16" placeholder="Masukkan usia kehamilan saat pemeriksaan">
                            <label for=" 0bulan16" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="text" name="answer[78]" id="4bulan16" placeholder="Masukkan usia kehamilan saat pemeriksaan">
                            <label for="4bulan16" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="text" name="answer[78]" id="7bulan16" placeholder="Masukkan usia kehamilan saat pemeriksaan">
                            <label for="7bulan16" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[78]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[78]" value="79">
                <input type="hidden" name="answer_point[78]" value="0">
                <input type="hidden" name="answer_category[78]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[78]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Konseling :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[79]" id="0bulan17" value="0-3 bulan">
                            <label for="0bulan17" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[79]" id="4bulan17" value="4-6 bulan">
                            <label for="4bulan17" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[79]" id="7bulan17" value="7-melahirkan">
                            <label for="7bulan17" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[79]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[79]" value="80">
                <input type="hidden" name="answer_point[79]" value="0">
                <input type="hidden" name="answer_category[79]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[79]" value="pemeriksaan_kehamilan">
            </div>

            <div class="mb-12">
                <div class="mb-3">
                    <label for="" class="font-semibold">Tata laksana kasus (Tindakan) :</label>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[80]" id="0bulan18" value="0-3 bulan">
                            <label for="0bulan18" class="text-sm">0-3 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[80]" id="4bulan18" value="4-6 bulan">
                            <label for="4bulan18" class="text-sm">4-6 bulan</label>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="answer[80]" id="7bulan18" value="7-melahirkan">
                            <label for="7bulan18" class="text-sm">7-melahirkan</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="nomor_kk[80]" value="{{ $nomor_kk }}">
                <input type="hidden" name="question_id[80]" value="81">
                <input type="hidden" name="answer_point[80]" value="0">
                <input type="hidden" name="answer_category[80]" value="Ibu atau Ibu Hamil">
                <input type="hidden" name="answer_type[80]" value="pemeriksaan_kehamilan">
            </div>
        </div>

        <div class="mb-7">
            <h1 class="font-bold text-lg">Pengetahuan Ibu Tentang Stunting :</h1>
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apa yang dimaksud dengan stunting ? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[81]" id="StuntingPI1" value="Gangguan tumbuh kembang yang disebabkan keturunan" data-nilai_pengetahuan_ibu="0">
                        <label for="StuntingPI1" class="text-sm">Gangguan tumbuh kembang yang disebabkan keturunan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[81]" id="GGTumbuhAnakPI1" value="Gangguan tumbuh kembang anak yang tinggi badannya tidak sesuai dengan umur" data-nilai_pengetahuan_ibu="1">
                        <label for="GGTumbuhAnakPI1" class="text-sm">Gangguan tumbuh kembang anak yang tinggi badannya tidak sesuai dengan umur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[81]" id="MakanMiePI1" value="Gangguan tumbuh kembang yang disebabkan anak terlalu banyak makan mie instan" data-nilai_pengetahuan_ibu="0">
                        <label for="MakanMiePI1" class="text-sm">Gangguan tumbuh kembang yang disebabkan anak terlalu banyak makan mie instan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[81]" id="AktifitasFisikPI1" value="Gangguan tumbuh kembang yang disebabkan oleh ak@vitas fisik anak" data-nilai_pengetahuan_ibu="0">
                        <label for="AktifitasFisikPI1" class="text-sm">Gangguan tumbuh kembang yang disebabkan oleh ak@vitas fisik anak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[81]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[81]" value="82">
            <input type="hidden" name="answer_point[81]" value="0">
            <input type="hidden" name="answer_category[81]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[81]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Stunting anak disebabkan oleh :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[82]" id="KekuranganAsupanPI2" value="Kekurangan asupan karbohidrat: nasi, ubi-ubian, mie" data-nilai_pengetahuan_ibu="0">
                        <label for="KekuranganAsupanPI2" class="text-sm">Kekurangan asupan karbohidrat: nasi, ubi-ubian, mie</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[82]" id="KekuranganLemakPI2" value="Kekurangan asupan lemak: daging, kacang-kacangan, selai kacang" data-nilai_pengetahuan_ibu="0">
                        <label for="KekuranganLemakPI2" class="text-sm">Kekurangan asupan lemak: daging, kacang-kacangan, selai kacang</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[82]" id="KekuranganGiziPI2" value="Kekurangan gizi dan penyakit infeksi" data-nilai_pengetahuan_ibu="1">
                        <label for="KekuranganGiziPI2" class="text-sm">Kekurangan gizi dan penyakit infeksi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[82]" id="SeratSayuranPI2" value="Kekurangan serat sayuran" data-nilai_pengetahuan_ibu="0">
                        <label for="SeratSayuranPI2" class="text-sm">Kekurangan serat sayuran</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[82]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[82]" value="83">
            <input type="hidden" name="answer_point[82]" value="0">
            <input type="hidden" name="answer_category[82]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[82]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Stunting pada anak merupakan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[83]" id="PenyakitBawaanPI3" value="Penyakit bawaan sejak lahir" data-nilai_pengetahuan_ibu="0">
                        <label for="PenyakitBawaanPI3" class="text-sm">Penyakit bawaan sejak lahir</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[83]" id="PenyakitMenularPI3" value="Penyakit menular" data-nilai_pengetahuan_ibu="0">
                        <label for="PenyakitMenularPI3" class="text-sm">Penyakit menular</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[83]" id="PenyakitTidakMenilarPI3" value="Penyakit tidak menular" data-nilai_pengetahuan_ibu="0">
                        <label for="PenyakitTidakMenilarPI3" class="text-sm">Penyakit tidak menular</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[83]" id="GangguanTumbuhKembangPI3" value="Gangguan tumbuh kembang" data-nilai_pengetahuan_ibu="1">
                        <label for="GangguanTumbuhKembangPI3" class="text-sm">Gangguan tumbuh kembang</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[83]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[83]" value="84">
            <input type="hidden" name="answer_point[83]" value="0">
            <input type="hidden" name="answer_category[83]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[83]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Berikut salah satu ciri-ciri anak stunting :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[84]" id="PertumbuhanLambatPI4" value="Pertumbuhan melambat" data-nilai_pengetahuan_ibu="1">
                        <label for="PertumbuhanLambatPI4" class="text-sm">Pertumbuhan melambat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[84]" id="GiziCepatPI4" value="Pertumbuhan gigi cepat" data-nilai_pengetahuan_ibu="0">
                        <label for="GiziCepatPI4" class="text-sm">Pertumbuhan gigi cepat</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[84]" id="IntelektualPI4" value="Anak memiliki @ngkat intelektual yang baik" data-nilai_pengetahuan_ibu="0">
                        <label for="IntelektualPI4" class="text-sm">Anak memiliki @ngkat intelektual yang baik</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[84]" id="TumbuhTinngiPI4" value="Anak sudah tumbuh tinggi" data-nilai_pengetahuan_ibu="0">
                        <label for="TumbuhTinngiPI4" class="text-sm">Anak sudah tumbuh tinggi</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[84]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[84]" value="85">
            <input type="hidden" name="answer_point[84]" value="0">
            <input type="hidden" name="answer_category[84]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[84]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Salah satu dampak jangka pendek dari stunting adalah :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[85]" id="GangguanMentalPI5" value="Gangguan mental" data-nilai_pengetahuan_ibu="0">
                        <label for="GangguanMentalPI5" class="text-sm">Gangguan mental</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[85]" id="GangguanSpikologisPI5" value="Gangguan psikologis" data-nilai_pengetahuan_ibu="0">
                        <label for="GangguanSpikologisPI5" class="text-sm">Gangguan psikologis</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[85]" id="GKecerdasanPI5" value="Gangguan kecerdasan dan pertumbuhan fiisk" data-nilai_pengetahuan_ibu="1">
                        <label for="GKecerdasanPI5" class="text-sm">Gangguan kecerdasan dan pertumbuhan fiisk</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[85]" id="GMemoryPI5" value="Gangguan memori untuk mengingat" data-nilai_pengetahuan_ibu="0">
                        <label for="GMemoryPI5" class="text-sm">Gangguan memori untuk mengingat</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[85]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[85]" value="86">
            <input type="hidden" name="answer_point[85]" value="0">
            <input type="hidden" name="answer_category[85]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[85]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Dampak jangka panjang stun%ng salah satunya yaitu :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[86]" id="PenurunanKekebalanTubuhPI6" value="Penurunan kekebalan tubuh dan prestasi belajar" data-nilai_pengetahuan_ibu="1">
                        <label for="PenurunanKekebalanTubuhPI6" class="text-sm">Penurunan kekebalan tubuh dan prestasi belajar</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[86]" id="PenurunanBBPI6" value="Penurunan berat badan" data-nilai_pengetahuan_ibu="0">
                        <label for="PenurunanBBPI6" class="text-sm">Penurunan berat badan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[86]" id="PenurunanTinggiBadanPI6" value="Penurunan tinggi badan" data-nilai_pengetahuan_ibu="0">
                        <label for="PenurunanTinggiBadanPI6" class="text-sm">Penurunan tinggi badan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[86]" id="PenurunanKekuatanFisikPI6" value="Penurunan kekuatan fisik" data-nilai_pengetahuan_ibu="0">
                        <label for="PenurunanKekuatanFisikPI6" class="text-sm">Penurunan kekuatan fisik</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[86]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[86]" value="87">
            <input type="hidden" name="answer_point[86]" value="0">
            <input type="hidden" name="answer_category[86]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[86]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Pada usia berapa stunting pada anak dapat terlihat jelas :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[87]" id="0-2bulanPI7" value="0-2 bulan" data-nilai_pengetahuan_ibu="0">
                        <label for="0-2bulanPI7" class="text-sm">0-2 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[87]" id="0-6bulanPI7" value="0-6 bulan" data-nilai_pengetahuan_ibu="0">
                        <label for="0-6bulanPI7" class="text-sm">0-6 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[87]" id="0-8bulanPI7" value="0-8 bulan" data-nilai_pengetahuan_ibu="0">
                        <label for="0-8bulanPI7" class="text-sm">0-8 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[87]" id="0-24bulan/60bulanPI7" value="0-24bulan/60bulan" data-nilai_pengetahuan_ibu="1">
                        <label for="0-24bulan/60bulanPI7" class="text-sm">0-24bulan/60bulan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[87]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[87]" value="88">
            <input type="hidden" name="answer_point[87]" value="0">
            <input type="hidden" name="answer_category[87]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[87]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Menurut keluarga penanganan gizi spesifik stun%ng dapat dilakukan dengan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[88]" id="TambahanPMTPI8" value="Memberikan makanan tambahan (PMT) pada ibu hamil dan memberikan ASI eksklusif serta MP-ASI pada anak" data-nilai_pengetahuan_ibu="1">
                        <label for="TambahanPMTPI8" class="text-sm">Memberikan makanan tambahan (PMT) pada ibu hamil dan memberikan ASI eksklusif serta MP-ASI pada anak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[88]" id="MemberikanASIPI8" value="Memberikan ASI dan susu formula" data-nilai_pengetahuan_ibu="0">
                        <label for="MemberikanASIPI8" class="text-sm">Memberikan ASI dan susu formula</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[88]" id="MemberikanProteinPI8" value="Memberikan makanan yang berprotein tinggi (daging, ayam, ikan, telur)" data-nilai_pengetahuan_ibu="0">
                        <label for="MemberikanProteinPI8" class="text-sm">Memberikan makanan yang berprotein tinggi (daging, ayam, ikan, telur)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[88]" id="MemberikanSuplemenPI8" value="Memberikan suplemen makan pada anak" data-nilai_pengetahuan_ibu="0">
                        <label for="MemberikanSuplemenPI8" class="text-sm">Memberikan suplemen makan pada anak</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[88]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[88]" value="89">
            <input type="hidden" name="answer_point[88]" value="0">
            <input type="hidden" name="answer_category[88]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[88]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Menurut keluarga penanganan gizi sensitif stunting dapat dilakukan salah satunya dengan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[89]" id="LingkunagndanSumberAirPI9" value="Lingkungan dan sumber air harus bersih" data-nilai_pengetahuan_ibu="1">
                        <label for="LingkunagndanSumberAirPI9" class="text-sm">Lingkungan dan sumber air harus bersih</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[89]" id="JalanRayaPI9" value="Lingkungan tempat tinggal dekat dengan jalan raya" data-nilai_pengetahuan_ibu="0">
                        <label for="JalanRayaPI9" class="text-sm">Lingkungan tempat tinggal dekat dengan jalan raya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[89]" id="TempatTinggalDekatPasarPI9" value="Lingkungan tempat tinggal dekat dengan pasar" data-nilai_pengetahuan_ibu="0">
                        <label for="TempatTinggalDekatPasarPI9" class="text-sm">Lingkungan tempat tinggal dekat dengan pasar</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[89]" id="TempatTinggalDekatPuskesmasPI9" value="Lingkungan tempat tinggal dekat dengan puskesmas" data-nilai_pengetahuan_ibu="0">
                        <label for="TempatTinggalDekatPuskesmasPI9" class="text-sm">Lingkungan tempat tinggal dekat dengan puskesmas</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[89]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[89]" value="90">
            <input type="hidden" name="answer_point[89]" value="0">
            <input type="hidden" name="answer_category[89]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[89]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Berikut ini adalah salah satu kegiatan yang dapat berkontribusi untukmenurunkan kejadian stunting :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[90]" id="PemberianSusuFormula10" value="Menyediakan dan memastikan pemberian susu formula untuk anak" data-nilai_pengetahuan_ibu="0">
                        <label for="PemberianSusuFormula10" class="text-sm">Menyediakan dan memastikan pemberian susu formula untuk anak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[90]" id="AirBersihdanSanitasiPI10" value="Menyediakan dan memastikan terhadap air bersih dan sanitasi" data-nilai_pengetahuan_ibu="0">
                        <label for="AirBersihdanSanitasiPI10" class="text-sm">Menyediakan dan memastikan terhadap air bersih dan sanitasi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[90]" id="MendapatImunisasiPI10" value="Memberikan dan memastikan anak mendapatkan imunisasi" data-nilai_pengetahuan_ibu="0">
                        <label for="MendapatImunisasiPI10" class="text-sm">Memberikan dan memastikan anak mendapatkan imunisasi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[90]" id="MakananBerproteinPI10" value="Memberikan dan memastikan anak mendapatkan makanan berprotein" data-nilai_pengetahuan_ibu="1">
                        <label for="MakananBerproteinPI10" class="text-sm">Memberikan dan memastikan anak mendapatkan makanan berprotein</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[90]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[90]" value="91">
            <input type="hidden" name="answer_point[90]" value="0">
            <input type="hidden" name="answer_category[90]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[90]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Bagaimana cara keluarga untuk mengetahui jika anak mengalami stunting :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[91]" id="BBTidakSesuaiPI11" value="Saat di ukur BB (Berat Badan) tidak sesuai usia" data-nilai_pengetahuan_ibu="0">
                        <label for="BBTidakSesuaiPI11" class="text-sm">Saat di ukur BB (Berat Badan) tidak sesuai usia</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[91]" id="TBTidakSesuaiPI11" value="Saat di ukur BB/TB (Tinggi Badan) tidak sesuai usia" data-nilai_pengetahuan_ibu="0">
                        <label for="TBTidakSesuaiPI11" class="text-sm">Saat di ukur BB/TB (Tinggi Badan) tidak sesuai usia</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[91]" id="LebihPendekPI11" value="Saat tinggi badan anak lebih pendek dari teman seusianya" data-nilai_pengetahuan_ibu="0">
                        <label for="LebihPendekPI11" class="text-sm">Saat tinggi badan anak lebih pendek dari teman seusianya</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[91]" id="SkiriningPerkembanganPI11" value="Pemeriksaan KPSP (Kuesioner Pre Skrining Perkembangan)" data-nilai_pengetahuan_ibu="1">
                        <label for="SkiriningPerkembanganPI11" class="text-sm">Pemeriksaan KPSP (Kuesioner Pre Skrining Perkembangan)</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[91]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[91]" value="92">
            <input type="hidden" name="answer_point[91]" value="0">
            <input type="hidden" name="answer_category[91]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[91]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Supaya anak tidak mengalami stunting, maka sebaiknya orang tua memberikan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[92]" id="MakananBergiziPI12" value="Makanan yang bergizi: nasi, lauk-pauk (berprotein), sayur-sayuran" data-nilai_pengetahuan_ibu="1">
                        <label for="MakananBergiziPI12" class="text-sm">Makanan yang bergizi: nasi, lauk-pauk (berprotein), sayur-sayuran</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[92]" id="SusuFormulaPI12" value="Susu formula" data-nilai_pengetahuan_ibu="0">
                        <label for="SusuFormulaPI12" class="text-sm">Susu formula</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[92]" id="SuplemenMakanPI12" value="Suplemen makan" data-nilai_pengetahuan_ibu="0">
                        <label for="SuplemenMakanPI12" class="text-sm">Suplemen makan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[92]" id="TerapiBermainPI12" value="Terapi bermain" data-nilai_pengetahuan_ibu="0">
                        <label for="TerapiBermainPI12" class="text-sm">Terapi bermain</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[92]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[92]" value="93">
            <input type="hidden" name="answer_point[92]" value="0">
            <input type="hidden" name="answer_category[92]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[92]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Penatalaksanaan pencegahan stunting sebaiknya dilaksanakan selama :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[93]" id="9bulanPI13" value="9 bulan" data-nilai_pengetahuan_ibu="0">
                        <label for="9bulanPI13" class="text-sm">9 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[93]" id="12bulanPI13" value="12 bulan" data-nilai_pengetahuan_ibu="0">
                        <label for="12bulanPI13" class="text-sm">12 bulan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[93]" id="SeribuHariPI13" value="1000 hari (umur 0-2 tahun)" data-nilai_pengetahuan_ibu="1">
                        <label for="SeribuHariPI13" class="text-sm">1000 hari (umur 0-2 tahun)</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[93]" id="60bulanPI13" value="60 bulan" data-nilai_pengetahuan_ibu="0">
                        <label for="60bulanPI13" class="text-sm">60 bulan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[93]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[93]" value="94">
            <input type="hidden" name="answer_point[93]" value="0">
            <input type="hidden" name="answer_category[93]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[93]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah anak stunting dapat kembali normal? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[94]" id="KekuranganGiziPI14" value="Tidak dapat karena kekurangan gizi lama" data-nilai_pengetahuan_ibu="0">
                        <label for="KekuranganGiziPI14" class="text-sm">Tidak dapat karena kekurangan gizi lama</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[94]" id="KeturunanPI14" value="Tidak dapat karena sudah menjadi keturunan" data-nilai_pengetahuan_ibu="0">
                        <label for="KeturunanPI14" class="text-sm">Tidak dapat karena sudah menjadi keturunan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[94]" id="KembaliNormalPI14" value="Dapat kembali normal, tanpa diberi makanan yang bergizi" data-nilai_pengetahuan_ibu="0">
                        <label for="KembaliNormalPI14" class="text-sm">Dapat kembali normal, tanpa diberi makanan yang bergizi</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[94]" id="GiziDiperbaikiPI14" value="Dapat kembali normal bila gizi diperbaiki" data-nilai_pengetahuan_ibu="1">
                        <label for="GiziDiperbaikiPI14" class="text-sm">Dapat kembali normal bila gizi diperbaiki</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[94]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[94]" value="95">
            <input type="hidden" name="answer_point[94]" value="0">
            <input type="hidden" name="answer_category[94]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[94]" value="pengetahuan">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Kekurangan gizi kronis pada 1000 hari pertama kehidupan anak dapat menyebabkan :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[95]" id="StuntingPI15" value="Stunting" data-nilai_pengetahuan_ibu="1">
                        <label for="StuntingPI15" class="text-sm">Stunting</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[95]" id="GiziBurukPI15" value="Gizi buruk" data-nilai_pengetahuan_ibu="0">
                        <label for="GiziBurukPI15" class="text-sm">Gizi buruk</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[95]" id="GizikronisPI15" value="Gizi kronis" data-nilai_pengetahuan_ibu="0">
                        <label for="GizikronisPI15" class="text-sm">Gizi kronis</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[95]" id="GizilebihPI15" value="Gizi lebih" data-nilai_pengetahuan_ibu="0">
                        <label for="GizilebihPI15" class="text-sm">Gizi lebih</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[95]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[95]" value="96">
            <input type="hidden" name="answer_point[95]" value="0">
            <input type="hidden" name="answer_category[95]" value="Ibu atau Ibu Hamil">
            <input type="hidden" name="answer_type[95]" value="pengetahuan">
        </div>
    </div>
    @endif
    @endforeach
    <div class="flex-col shadow px-10 py-12">
        <div class="mb-7">
            <h1 class="font-bold text-lg">Kuesioner Lingkungan</h1>
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Jarak dari sumber air minum ke tempat pembuangan limbah/kotoran/sampah :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[96]" id="jarak_kurang_10" value="< 10 meter" data-nilai_kuesioner_lingkungan="0">
                        <label for="jarak_kurang_10" class="text-sm">
                            < 10 meter</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[96]" id="jarak_lebih_10" value="≥ 10 meter" data-nilai_kuesioner_lingkungan="1">
                        <label for="jarak_lebih_10" class="text-sm">≥ 10 meter</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[96]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[96]" value="97">
            <input type="hidden" name="answer_point[96]" value="0">
            <input type="hidden" name="answer_category[96]" value="lingkungan">
            <input type="hidden" name="answer_type[96]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah sumber air utama yang digunakan rumah tangga untuk masak/mandi/cuci pakaian/dan lainnya ? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="AirisiUlang" value="Air isi Ulang" data-nilai_kuesioner_lingkungan="1">
                        <label for="AirisiUlang" class="text-sm">
                            Air isi Ulang
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Mataairterlindung" value="Mata air terlindung" data-nilai_kuesioner_lingkungan="1">
                        <label for="Mataairterlindung" class="text-sm">
                            Mata air terlindung
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Sumurboratausumurpompa" value="Sumur bor atau sumur pompa" data-nilai_kuesioner_lingkungan="1">
                        <label for="Sumurboratausumurpompa" class="text-sm">
                            Sumur bor atau sumur pompa
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Airledeng/PDAM" value="Air ledeng/PDAM" data-nilai_kuesioner_lingkungan="1">
                        <label for="Airledeng/PDAM" class="text-sm">
                            Air ledeng/PDAM
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Mataairtidakterlindung" value="Mata air tidak terlindung" data-nilai_kuesioner_lingkungan="0">
                        <label for="Mataairtidakterlindung" class="text-sm">
                            Mata air tidak terlindung
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Aireceran(yangdijualmelaluitanki,airsumur)" value="Air eceran (yang dijual melalui tanki, air sumur)" data-nilai_kuesioner_lingkungan="1">
                        <label for="Aireceran(yangdijualmelaluitanki,airsumur)" class="text-sm">
                            Air eceran (yang dijual melalui tanki, air sumur)
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Hydrantumum" value="Hydrant umum" data-nilai_kuesioner_lingkungan="1">
                        <label for="Hydrantumum" class="text-sm">
                            Hydrant umum
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Sumurgaliterlindung" value="Sumur gali terlindung" data-nilai_kuesioner_lingkungan="1">
                        <label for="Sumurgaliterlindung" class="text-sm">
                            Sumur gali terlindung
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Terminalair" value="Terminal air" data-nilai_kuesioner_lingkungan="1">
                        <label for="Terminalair" class="text-sm">
                            Terminal air
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Sumurgalitidakterlindung" value="Sumur gali tidak terlindung" data-nilai_kuesioner_lingkungan="0">
                        <label for="Sumurgalitidakterlindung" class="text-sm">
                            Sumur gali tidak terlindung
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="AirPermukaan" value="Air Permukaan" data-nilai_kuesioner_lingkungan="1">
                        <label for="AirPermukaan" class="text-sm">
                            Air Permukaan
                        </label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[97]" id="Penampunganairhujan(PAH)" value="Penampungan air hujan (PAH)" data-nilai_kuesioner_lingkungan="1">
                        <label for="Penampunganairhujan(PAH)" class="text-sm">
                            Penampungan air hujan (PAH)
                        </label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[97]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[97]" value="98">
            <input type="hidden" name="answer_point[97]" value="0">
            <input type="hidden" name="answer_category[97]" value="lingkungan">
            <input type="hidden" name="answer_type[97]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah memiliki Jamban ? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[98]" id="ARTSendiri" value="Ya, Millik sendiri, digunakan ART Sendiri" data-nilai_kuesioner_lingkungan="1">
                        <label for="ARTSendiri" class="text-sm">Ya, Millik sendiri, digunakan ART Sendiri</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[98]" id="ARTSendiridanRutalain" value="Ya, Millik sendiri, digunakan ART Sendiri dan Ruta lain" data-nilai_kuesioner_lingkungan="0">
                        <label for="ARTSendiridanRutalain" class="text-sm">Ya, Millik sendiri, digunakan ART Sendiri dan Ruta lain</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[98]" id="tidakdigunakan" value="Ya, Milik sendiri tetapi tidak digunakan" data-nilai_kuesioner_lingkungan="0">
                        <label for="tidakdigunakan" class="text-sm">Ya, Milik sendiri tetapi tidak digunakan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[98]" id="Tidakpunya" value="Tidak punya" data-nilai_kuesioner_lingkungan="0">
                        <label for="Tidakpunya" class="text-sm">Tidak punya</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[98]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[98]" value="99">
            <input type="hidden" name="answer_point[98]" value="0">
            <input type="hidden" name="answer_category[98]" value="lingkungan">
            <input type="hidden" name="answer_type[98]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Apakah jenis kloset (dudukan) yang biasanya digunakan oleh anggota rumah tangga ketika buang air besar (BAB) ? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[99]" id="Leher_angsa" value="Leher angsa">
                        <label for="Leher_angsa" class="text-sm">Leher angsa</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[99]" id="Cemplungtanpatutup" value="Cemplung tanpa tutup">
                        <label for="Cemplungtanpatutup" class="text-sm">Cemplung tanpa tutup</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[99]" id="Plengsengantanpatutup" value="Plengsengan tanpa tutup">
                        <label for="Plengsengantanpatutup" class="text-sm">Plengsengan tanpa tutup</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[99]" id="Cemplungdengantutup" value="Cemplung dengan tutup">
                        <label for="Cemplungdengantutup" class="text-sm">Cemplung dengan tutup</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[99]" id="Plengsengandengantutup" value="Plengsengan dengan tutup">
                        <label for="Plengsengandengantutup" class="text-sm">Plengsengan dengan tutup</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[99]" id="Lainnya4" value="Lainnya">
                        <label for="Lainnya4" class="text-sm">Lainnya</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[99]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[99]" value="100">
            <input type="hidden" name="answer_point[99]" value="0">
            <input type="hidden" name="answer_category[99]" value="lingkungan">
            <input type="hidden" name="answer_type[99]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Ke mana tinja tersebut dialirkan/ditampung? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="IPAL/SPAL" value="IPAL/SPAL">
                        <label for="IPAL/SPAL" class="text-sm">IPAL/SPAL</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="LubangTanah" value="Lubang Tanah">
                        <label for="LubangTanah" class="text-sm">Lubang Tanah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="Kolam/Danau/Laut" value="Kolam/Danau/Laut">
                        <label for="Kolam/Danau/Laut" class="text-sm">Kolam/Danau/Laut</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="SeptikTank" value="Septik Tank">
                        <label for="SeptikTank" class="text-sm">Septik Tank</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="Got/Selokan" value="Got/Selokan">
                        <label for="Got/Selokan" class="text-sm">Got/Selokan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="Sumurresapan" value="Sumur resapan">
                        <label for="Sumurresapan" class="text-sm">Sumur resapan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="Sungai" value="Sungai">
                        <label for="Sungai" class="text-sm">Sungai</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[100]" id="Lainnya5" value="Lainnya">
                        <label for="Lainnya5" class="text-sm">Lainnya</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[100]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[100]" value="101">
            <input type="hidden" name="answer_point[100]" value="0">
            <input type="hidden" name="answer_category[100]" value="lingkungan">
            <input type="hidden" name="answer_type[100]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Ke mana pembuangan Limbah rumah tangga (limbah dari dapur, kamar mandi, cucian, limbah bekas industri rumahtangga ? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="IPAL/SPAL6" value="IPAL/SPAL">
                        <label for="IPAL/SPAL6" class="text-sm">IPAL/SPAL</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="LubangTanah6" value="Lubang Tanah">
                        <label for="LubangTanah6" class="text-sm">Lubang Tanah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="Kolam/Danau/Laut6" value="Kolam/Danau/Laut">
                        <label for="Kolam/Danau/Laut6" class="text-sm">Kolam/Danau/Laut</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="SeptikTank6" value="Septik Tank">
                        <label for="SeptikTank6" class="text-sm">Septik Tank</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="Got/Selokan6" value="Got/Selokan">
                        <label for="Got/Selokan6" class="text-sm">Got/Selokan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="Sumurresapan6" value="Sumur resapan">
                        <label for="Sumurresapan6" class="text-sm">Sumur resapan</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="Sungai6" value="Sungai">
                        <label for="Sungai6" class="text-sm">Sungai</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[101]" id="Lainnya6" value="Lainnya">
                        <label for="Lainnya6" class="text-sm">Lainnya</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[101]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[101]" value="102">
            <input type="hidden" name="answer_point[101]" value="0">
            <input type="hidden" name="answer_category[101]" value="lingkungan">
            <input type="hidden" name="answer_type[101]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Bagaimana cara pembuangan sampah UTAMA rumah tangga ? :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[102]" id="Diangkutpetugas" value="Diangkut petugas" data-nilai_kuesioner_lingkungan="1">
                        <label for="Diangkutpetugas" class="text-sm">Diangkut petugas</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[102]" id="DibuangsendirikeTPS" value="Dibuang sendiri ke TPS" data-nilai_kuesioner_lingkungan="1">
                        <label for="DibuangsendirikeTPS" class="text-sm">Dibuang sendiri ke TPS</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[102]" id="DibuatKompos" value="Dibuat Kompos" data-nilai_kuesioner_lingkungan="1">
                        <label for="DibuatKompos" class="text-sm">Dibuat Kompos</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[102]" id="Ditimbundalamtanah" value="Ditimbun dalam tanah" data-nilai_kuesioner_lingkungan="1">
                        <label for="Ditimbundalamtanah" class="text-sm">Ditimbun dalam tanah</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[102]" id="Dibakar" value="Dibakar" data-nilai_kuesioner_lingkungan="0">
                        <label for="Dibakar" class="text-sm">Dibakar</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[102]" id="sungai/parit/danau/laut" value="Dibuang ke sungai/parit/danau/laut" data-nilai_kuesioner_lingkungan="0">
                        <label for="sungai/parit/danau/laut" class="text-sm">Dibuang ke sungai/parit/danau/laut</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[102]" id="Lainnya7" value="Lainnya" data-nilai_kuesioner_lingkungan="0">
                        <label for="Lainnya7" class="text-sm">Lainnya</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[102]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[102]" value="103">
            <input type="hidden" name="answer_point[102]" value="0">
            <input type="hidden" name="answer_category[102]" value="lingkungan">
            <input type="hidden" name="answer_type[102]" value="kuesioner">
        </div>

        <div class="mb-12">
            <div class="mb-3">
                <label for="" class="font-semibold">Ruangan dalami Rumah :</label>
            </div>
            <div class="grid grid-cols-4 gap-5">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[103]" id="KamarTidur" value="Kamar Tidur" data-nilai_kuesioner_lingkungan="1">
                        <label for="KamarTidur" class="text-sm">Kamar Tidur</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[103]" id="Dapur/Tempatmasak" value="Dapur/Tempatmasak" data-nilai_kuesioner_lingkungan="1">
                        <label for="Dapur/Tempatmasak" class="text-sm">Dapur/Tempatmasak</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[103]" id="Ruangkeluarga" value="Ruang keluarga" data-nilai_kuesioner_lingkungan="1">
                        <label for="Ruangkeluarga" class="text-sm">Ruang keluarga</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[103]" id="RuangTamu" value="Ruang Tamu" data-nilai_kuesioner_lingkungan="1">
                        <label for="RuangTamu" class="text-sm">Ruang Tamu</label>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="answer[103]" id="Ruangcampuran" value="Ruang campuran" data-nilai_kuesioner_lingkungan="0">
                        <label for="Ruangcampuran" class="text-sm">Ruang campuran</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="nomor_kk[103]" value="{{ $nomor_kk }}">
            <input type="hidden" name="question_id[103]" value="104">
            <input type="hidden" name="answer_point[103]" value="0">
            <input type="hidden" name="answer_category[103]" value="lingkungan">
            <input type="hidden" name="answer_type[103]" value="kuesioner">
        </div>
    </div>
    <div class="flex gap-3 w-full justify-end mt-12">
        <button type="submit" class="shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded" id="btn-add">Input</button>
    </div>
</form>
<script>
    $(".jenis_pemeriksaan_kehamilan").hide();
    $("input[name='soal_ibu_11']:checked").change(function() {
        let pemeriksaan_kehamilan = $(".jenis_pemeriksaan_kehamilan");
        if ($(this).val() === "Ya") {
            pemeriksaan_kehamilan.show();
        } else if ($(this).val() === "Tidak") {
            pemeriksaan_kehamilan.hide();
        }
    });
</script>
@endsection