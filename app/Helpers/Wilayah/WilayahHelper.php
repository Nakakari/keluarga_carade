<?php

namespace App\Helpers\Wilayah;

class WilayahHelper
{
    public function getWilayah()
    {
        $wilayah = [
            'provinsi' => [
                '73' => 'SULAWESI SELATAN',
            ],
            'kabupaten' => [
                '73' => [
                    '10' => 'PANGKAJENE KEPULAUAN',
                    '11' => 'BARRU',
                    '12' => 'SOPPENG',
                    '13' => 'WAJO',
                    '14' => 'SIDENRENG RAPPANG',
                    '15' => 'PINRANG',
                    '16' => 'ENREKANG',
                    '17' => 'LUWU',
                    '18' => 'TANA TORAJA',
                    '22' => 'LUWU UTARA',
                    '24' => 'LUWU TIMUR',
                    '26' => 'TORAJA UTARA',
                    '71' => 'KOTA MAKASSAR',
                    '72' => 'KOTA PARE PARE',
                    '73' => 'KOTA PALOPO',
                    '01' => 'KEPULAUAN SELAYAR',
                    '02' => 'BULUKUMBA',
                    '03' => 'BANTAENG',
                    '04' => 'JENEPONTO',
                    '05' => 'TAKALAR',
                    '06' => 'GOWA',
                    '07' => 'SINJAI',
                    '08' => 'BONE',
                    '09' => 'MAROS',
                ],
            ],
            'kecamatan' => [
                '7301' => [
                    '10' => 'PASIMASUNGGU TIMUR',
                    '11' => 'BUKI',
                    '01' => 'BENTENG',
                    '02' => 'BONTOHARU',
                    '03' => 'BONTOMATENE',
                    '04' => 'BONTOMANAI',
                    '05' => 'BONTOSIKUYU',
                    '06' => 'PASIMASUNGGU',
                    '07' => 'PASIMARANNU',
                    '08' => 'TAKA BONERATE',
                    '09' => 'PASILAMBENA',
                ],
                '7302' => [
                    '10' => 'RILAUALE',
                    '01' => 'GANTARANG',
                    '02' => 'UJUNG BULU',
                    '03' => 'BONTO BAHARI',
                    '04' => 'BONTO TIRO',
                    '05' => 'HERLANG',
                    '06' => 'KAJANG',
                    '07' => 'BULUKUMPA',
                    '08' => 'KINDANG',
                    '09' => 'UJUNGLOE',
                ],
                '7303' => [
                    '01' => 'BISSAPPU',
                    '02' => 'BANTAENG',
                    '03' => 'EREMERASA',
                    '04' => 'TOMPO BULU',
                    '05' => 'PAJUKUKANG',
                    '06' => 'ULUERE',
                    '07' => 'GANTARANG KEKE',
                    '08' => 'SINOA',
                ],
                '7304' => [
                    '10' => 'RUMBIA',
                    '11' => 'TAROWANG',
                    '01' => 'BANGKALA',
                    '02' => 'TAMALATEA',
                    '03' => 'BINAMU',
                    '04' => 'BATANG',
                    '05' => 'KELARA',
                    '06' => 'BANGKALA BARAT',
                    '07' => 'BONTORAMBA',
                    '08' => 'TURATEA',
                    '09' => 'ARUNGKEKE',
                ],
                '7305' => [
                    '10' => 'KEPULAUAN TANAKEKE',
                    '11' => 'POLONGBANGKENG TIMUR',
                    '12' => 'LAIKANG',
                    '01' => 'MAPPAKASUNGGU',
                    '02' => 'MANGARABOMBANG',
                    '03' => 'POLONGBANGKENG SELATAN',
                    '04' => 'POLONGBANGKENG UTARA',
                    '05' => 'GALESONG SELATAN',
                    '06' => 'GALESONG UTARA',
                    '07' => 'PATTALLASSANG',
                    '08' => 'SANROBONE',
                    '09' => 'GALESONG',
                ],
                '7306' => [
                    '10' => 'TOMBOLOPAO',
                    '11' => 'BIRINGBULU',
                    '12' => 'BAROMBONG',
                    '13' => 'PATTALLASANG',
                    '14' => 'MANUJU',
                    '15' => 'BONTOLEMPANGANG',
                    '16' => 'BONTONOMPO SELATAN',
                    '17' => 'PARIGI',
                    '18' => 'BAJENG BARAT',
                    '01' => 'BONTONOMPO',
                    '02' => 'BAJENG',
                    '03' => 'TOMPOBULU',
                    '04' => 'TINGGIMONCONG',
                    '05' => 'PARANGLOE',
                    '06' => 'BONTOMARANNU',
                    '07' => 'PALLANGGA',
                    '08' => 'SOMBA OPU',
                    '09' => 'BUNGAYA',
                ],
                '7307' => [
                    '01' => 'SINJAI BARAT',
                    '02' => 'SINJAI  SELATAN',
                    '03' => 'SINJAI TIMUR',
                    '04' => 'SINJAI TENGAH',
                    '05' => 'SINJAI UTARA',
                    '06' => 'BULUPODDO',
                    '07' => 'SINJAI BORONG',
                    '08' => 'TELLU LIMPOE',
                    '09' => 'PULAU SEMBILAN',
                ],
                '7308' => [
                    '10' => 'CINA',
                    '11' => 'PONRE',
                    '12' => 'LAPPARIAJA',
                    '13' => 'LAMURU',
                    '14' => 'ULAWENG',
                    '15' => 'PALAKKA',
                    '16' => 'AWANGPONE',
                    '17' => 'TELLU SIATTINGE',
                    '18' => 'AJANGALE',
                    '19' => 'DUA BOCCOE',
                    '20' => 'CENRANA',
                    '21' => 'TANETE RIATTANG',
                    '22' => 'TANETE RIATTANG BARAT',
                    '23' => 'TANETE RIATTANG TIMUR',
                    '24' => 'AMALI',
                    '25' => 'TELLULIMPOE',
                    '26' => 'BENGO',
                    '27' => 'PATIMPENG',
                    '01' => 'BONTOCANI',
                    '02' => 'KAHU',
                    '03' => 'KAJUARA',
                    '04' => 'SALOMEKKO',
                    '05' => 'TONRA',
                    '06' => 'LIBURENG',
                    '07' => 'MARE',
                    '08' => 'SIBULUE',
                    '09' => 'BAREBBO',
                ],
                '7309' => [
                    '10' => 'CENRANA',
                    '11' => 'TOMPOBULU',
                    '12' => 'LAU',
                    '13' => 'MONCONGLOE',
                    '14' => 'TURIKALE',
                    '01' => 'MANDAI',
                    '02' => 'CAMBA',
                    '03' => 'BANTIMURUNG',
                    '04' => 'MAROS BARU',
                    '05' => 'BONTOA',
                    '06' => 'MALLLAWA',
                    '07' => 'TANRALILI',
                    '08' => 'MARUSU',
                    '09' => 'SIMBANG',
                ],
                '7310' => [
                    '10' => 'MINASA TENE',
                    '11' => 'MANDALLE',
                    '12' => 'TONDONG TALLASA',
                    '13' => 'LIUKANG TUPABBIRING UTARA',
                    '01' => 'LIUKANG TANGAYA',
                    '02' => 'LIUKANG KALMAS',
                    '03' => 'LIUKANG TUPABBIRING',
                    '04' => 'PANGKAJENE',
                    '05' => 'BALOCCI',
                    '06' => 'BUNGORO',
                    '07' => 'LABAKKANG',
                    '08' => 'MARANG',
                    '09' => 'SEGERI',
                ],
                '7311' => [
                    '01' => 'TANETE RIAJA',
                    '02' => 'TANETE RILAU',
                    '03' => 'BARRU',
                    '04' => 'SOPPENG RIAJA',
                    '05' => 'MALLUSETASI',
                    '06' => 'PUJANANTING',
                    '07' => 'BALUSU',
                ],
                '7312' => [
                    '01' => 'MARIORIWAWO',
                    '02' => 'LILIRAJA',
                    '03' => 'LILIRILAU',
                    '04' => 'LALABATA',
                    '05' => 'MARIORIAWA',
                    '06' => 'DONRI DONRI',
                    '07' => 'GANRA',
                    '08' => 'CITTA',
                ],
                '7313' => [
                    '10' => 'PITUMPANUA',
                    '11' => 'BOLA',
                    '12' => 'PENRANG',
                    '13' => 'GILIRENG',
                    '14' => 'KEERA',
                    '01' => 'SABANGPARU',
                    '02' => 'PAMMANA',
                    '03' => 'TAKKALALLA',
                    '04' => 'SAJOANGING',
                    '05' => 'MAJAULENG',
                    '06' => 'TEMPE',
                    '07' => 'BELAWA',
                    '08' => 'TANASITOLO',
                    '09' => 'MANIANGPAJO',
                ],
                '7314' => [
                    '10' => 'PITU RIAWA',
                    '11' => 'PITU RIASE',
                    '01' => 'PANCA LAUTANG',
                    '02' => 'TELLU LIMPOE',
                    '03' => 'WATANG PULU',
                    '04' => 'BARANTI',
                    '05' => 'PANCA RIJANG',
                    '06' => 'KULO',
                    '07' => 'MARITENGNGAE',
                    '08' => 'WATANG SIDENRENG',
                    '09' => 'DUA PITUE',
                ],
                '7315' => [
                    '10' => 'LANRISANG',
                    '11' => 'PALETEANG',
                    '12' => 'BATULAPPA',
                    '01' => 'MATTIRO SOMPE',
                    '02' => 'SUPPA',
                    '03' => 'MATTIRO BULU',
                    '04' => 'WATANG SAWITTO',
                    '05' => 'PATAMPANUA',
                    '06' => 'DUAMPANUA',
                    '07' => 'LEMBANG',
                    '08' => 'CEMPA',
                    '09' => 'TIROANG',
                ],
                '7316' => [
                    '10' => 'BUNTU BATU',
                    '11' => 'MASALLE',
                    '12' => 'BAROKO',
                    '01' => 'MAIWA',
                    '02' => 'ENREKANG',
                    '03' => 'BARAKA',
                    '04' => 'ANGGERAJA',
                    '05' => 'ALLA',
                    '06' => 'BUNGIN',
                    '07' => 'CENDANA',
                    '08' => 'CURIO',
                    '09' => 'MALUA',
                ],
                '7317' => [
                    '10' => 'LAROMPONG SELATAN',
                    '11' => 'PONRANG',
                    '12' => 'LATIMOJONG',
                    '13' => 'KAMANRE',
                    '14' => 'BELOPA UTARA',
                    '15' => 'WALENRANG BARAT',
                    '16' => 'WALENRANG UTARA',
                    '17' => 'WALENRANG TIMUR',
                    '18' => 'LAMASI TIMUR',
                    '19' => 'SULI BARAT',
                    '20' => 'BAJO BARAT',
                    '21' => 'PONRANG SELATAN',
                    '22' => 'BASSE SANGTEMPE UTARA',
                    '01' => 'BASSE SANGTEMPE',
                    '02' => 'LAROMPONG',
                    '03' => 'SULI',
                    '04' => 'BAJO',
                    '05' => 'BUA PONRANG',
                    '06' => 'WALENRANG',
                    '07' => 'BELOPA',
                    '08' => 'BUA',
                    '09' => 'LAMASI',
                ],
                '7318' => [
                    '11' => 'RANTETAYO',
                    '12' => 'MENGKENDEK',
                    '13' => 'SANGALLA',
                    '19' => 'GANDANGBATU SILLANAN',
                    '20' => 'REMBON',
                    '27' => 'MAKALE UTARA',
                    '28' => 'MAPPAK',
                    '29' => 'MAKALE SELATAN',
                    '31' => 'MASANDA',
                    '33' => 'SANGALLA SELATAN',
                    '34' => 'SANGALLA UTARA',
                    '35' => 'MALIMBONG BALEPE',
                    '37' => 'RANO',
                    '38' => 'KURRA',
                    '01' => 'SALUPUTI',
                    '02' => 'BITTUANG',
                    '03' => 'BONGGAKARADENG',
                    '05' => 'MAKALE',
                    '09' => 'SIMBUANG',
                ],
                '7322' => [
                    '10' => 'MAPPEDECENG',
                    '11' => 'BAEBUNTA',
                    '12' => 'TANA LILI',
                    '13' => 'SUKAMAJU SELATAN',
                    '14' => 'BAEBUNTA SELATAN',
                    '15' => 'SABBANG SELATAN',
                    '01' => 'MALANGKE',
                    '02' => 'BONE BONE',
                    '03' => 'MASAMBA',
                    '04' => 'SABBANG',
                    '05' => 'RONGKONG',
                    '06' => 'SUKAMAJU',
                    '07' => 'SEKO',
                    '08' => 'MALANGKE BARAT',
                    '09' => 'RAMPI',
                ],
                '7324' => [
                    '10' => 'KALAENA',
                    '11' => 'WASUPONDA',
                    '01' => 'MANGKUTANA',
                    '02' => 'NUHA',
                    '03' => 'TOWUTI',
                    '04' => 'MALILI',
                    '05' => 'ANGKONA',
                    '06' => 'WOTU',
                    '07' => 'BURAU',
                    '08' => 'TOMONI',
                    '09' => 'TOMONI TIMUR',
                ],
                '7326' => [
                    '10' => 'BALUSU',
                    '11' => 'TALLUNGLIPU',
                    '12' => 'DENDE\' PIONGAN NAPO',
                    '13' => 'BUNTU PEPASAN',
                    '14' => 'BARUPPU',
                    '15' => 'KESU',
                    '16' => 'TONDON',
                    '17' => 'BANGKELEKILA',
                    '18' => 'RANTEBUA',
                    '19' => 'SESEAN SULOARA',
                    '20' => 'KAPALA PITU',
                    '21' => 'AWAN RANTE KARUA',
                    '01' => 'RANTEPAO',
                    '02' => 'SESEAN',
                    '03' => 'NANGGALA',
                    '04' => 'RINDINGALLO',
                    '05' => 'BUNTAO',
                    '06' => 'SA\'DAN',
                    '07' => 'SANGGALANGI',
                    '08' => 'SOPAI',
                    '09' => 'TIKALA',
                ],
                '7371' => [
                    '10' => 'TAMALATE',
                    '11' => 'BIRINGKANAYA',
                    '12' => 'MANGGALA',
                    '13' => 'RAPPOCINI',
                    '14' => 'TAMALANREA',
                    '15' => 'KEPULAUAN SANGKARRANG',
                    '01' => 'MARISO',
                    '02' => 'MAMAJANG',
                    '03' => 'MAKASSAR',
                    '04' => 'UJUNG PANDANG',
                    '05' => 'WAJO',
                    '06' => 'BONTOALA',
                    '07' => 'TALLO',
                    '08' => 'UJUNG TANAH',
                    '09' => 'PANAKKUKANG',
                ],
                '7372' => [
                    '01' => 'BACUKIKI',
                    '02' => 'UJUNG',
                    '03' => 'SOREANG',
                    '04' => 'BACUKIKI BARAT',
                ],
                '7373' => [
                    '01' => 'WARA',
                    '02' => 'WARA UTARA',
                    '03' => 'WARA SELATAN',
                    '04' => 'TELLUWANUA',
                    '05' => 'WARA TIMUR',
                    '06' => 'WARA BARAT',
                    '07' => 'SENDANA',
                    '08' => 'MUNGKAJANG',
                    '09' => 'BARA',
                ],
            ],
            'kelurahan' => [
                [
                    [
                        '7301011001', '730101', 'Benteng Utara'
                    ],
                    [
                        '7301011002', '730101', 'Benteng'
                    ],
                    [
                        '7301011003', '730101', 'Benteng Selatan'
                    ],
                    [
                        '7301021001', '730102', 'Putabangun'
                    ],
                    [
                        '7301021002', '730102', 'Bontobangun'
                    ],
                    [
                        '7301022003', '730102', 'Bontosunggu'
                    ],
                    [
                        '7301022004', '730102', 'Bontoborusu'
                    ],
                    [
                        '7301022005', '730102', 'Bontolebang'
                    ],
                    [
                        '7301022006', '730102', 'Bontotangnga'
                    ],
                    [
                        '7301022007', '730102', 'Kahu-Kahu'
                    ],
                    [
                        '7301022008', '730102', 'Kalepadang'
                    ],
                    [
                        '7301031001', '730103', 'Batangmata'
                    ],
                    [
                        '7301031002', '730103', 'Batangmata Sapo'
                    ],
                    [
                        '7301032003', '730103', 'Pamatata'
                    ],
                    [
                        '7301032004', '730103', 'Tanete'
                    ],
                    [
                        '7301032005', '730103', 'Bungaiya'
                    ],
                    [
                        '7301032006', '730103', 'Kayu Bauk'
                    ],
                    [
                        '7301032007', '730103', 'Barat Lambongan'
                    ],
                    [
                        '7301032008', '730103', 'Bontona Saluk'
                    ],
                    [
                        '7301032009', '730103', 'Onto'
                    ],
                    [
                        '7301032010', '730103', 'Maharayya'
                    ],
                    [
                        '7301032011', '730103', 'Menara Indah'
                    ],
                    [
                        '7301032015', '730103', 'Tamalanrea'
                    ],
                    [
                        '7301042001', '730104', 'Parak'
                    ],
                    [
                        '7301042002', '730104', 'Barugaiya'
                    ],
                    [
                        '7301042003', '730104', 'Jambuiya'
                    ],
                    [
                        '7301042004', '730104', 'Mare-Mare'
                    ],
                    [
                        '7301042005', '730104', 'Polebunging'
                    ],
                    [
                        '7301042006', '730104', 'Bonea Makmur'
                    ],
                    [
                        '7301042008', '730104', 'Bontomarannu'
                    ],
                    [
                        '7301042010', '730104', 'Bonea Timur'
                    ],
                    [
                        '7301042011', '730104', 'Bontokoraang'
                    ],
                    [
                        '7301042012', '730104', 'Kaburu'
                    ],
                    [
                        '7301052001', '730105', 'Harapan'
                    ],
                    [
                        '7301052002', '730105', 'Patikarya'
                    ],
                    [
                        '7301052003', '730105', 'Patilereng'
                    ],
                    [
                        '7301052004', '730105', 'Laiyolo Baru'
                    ],
                    [
                        '7301052005', '730105', 'Laiyolo'
                    ],
                    [
                        '7301052006', '730105', 'Lantibongan'
                    ],
                    [
                        '7301052007', '730105', 'Binanga Sombaiya'
                    ],
                    [
                        '7301052008', '730105', 'Lowa'
                    ],
                    [
                        '7301052009', '730105', 'Appatanah'
                    ],
                    [
                        '7301052010', '730105', 'Tambolongan'
                    ],
                    [
                        '7301052011', '730105', 'Polassi'
                    ],
                    [
                        '7301052012', '730105', 'Khusus Bahuluang'
                    ],
                    [
                        '7301062001', '730106', 'Kembang Ragi'
                    ],
                    [
                        '7301062003', '730106', "Maminasa"
                    ],
                    [
                        '7301062005', '730106', 'Tanamalala'
                    ],
                    [
                        '7301062006', '730106', 'Labuang Pamajang'
                    ],
                    [
                        '7301062007', '730106', 'Massungke'
                    ],
                    [
                        '7301062009', '730106', 'Bontosaile'
                    ],
                    [
                        '7301062011', '730106', 'Teluk Kampe'
                    ],
                    [
                        '7301072001', '730107', 'Bonerate'
                    ],
                    [
                        '7301072002', '730107', 'Majapahit'
                    ],
                    [
                        '7301072003', '730107', 'Batu Bingkung'
                    ],
                    [
                        '7301072004', '730107', 'Bonea'
                    ],
                    [
                        '7301072005', '730107', 'Lambego'
                    ],
                    [
                        '7301072006', '730107', 'Komba-Komba'
                    ],
                    [
                        '7301072007', '730107', 'Sambali'
                    ],
                    [
                        '7301072008', '730107', 'Lamantu'
                    ],
                    [
                        '7301082001', '730108', 'Kayuadi'
                    ],
                    [
                        '7301082002', '730108', 'Batang'
                    ],
                    [
                        '7301082003', '730108', 'Nyiur Indah'
                    ],
                    [
                        '7301082004', '730108', 'Tambuna'
                    ],
                    [
                        '7301082005', '730108', 'Jinato'
                    ],
                    [
                        '7301082006', '730108', 'Rajuni'
                    ],
                    [
                        '7301082007', '730108', 'Latondu'
                    ],
                    [
                        '7301082008', '730108', 'Tarupa'
                    ],
                    [
                        '7301082009', '730108', 'Khusus Pasitallu'
                    ],
                    [
                        '7301092001', '730109', 'Kalaotoa'
                    ],
                    [
                        '7301092002', '730109', 'Garaupa'
                    ],
                    [
                        '7301092003', '730109', 'Lembang Matene'
                    ],
                    [
                        '7301092004', '730109', 'Pulo Madu'
                    ],
                    [
                        '7301092005', '730109', 'Karumpa'
                    ],
                    [
                        '7301092006', '730109', 'Garaupa Raya'
                    ],
                    [
                        '7301102001', '730110', 'Bontobulaeng'
                    ],
                    [
                        '7301102002', '730110', 'Bontobaru'
                    ],
                    [
                        '7301102003', '730110', 'Bontomalling'
                    ],
                    [
                        '7301102004', '730110', 'Lembang Baji'
                    ],
                    [
                        '7301102005', '730110', 'Bontojati'
                    ],
                    [
                        '7301102006', '730110', 'Ujung'
                    ],
                    [
                        '7301112001', '730111', 'Buki'
                    ],
                    [
                        '7301112002', '730111', 'Lalang Bata'
                    ],
                    [
                        '7301112003', '730111', 'Balang Butung'
                    ],
                    [
                        '7301112004', '730111', 'Kohala'
                    ],
                    [
                        '7301112005', '730111', 'Bontolempangan'
                    ],
                    [
                        '7301112006', '730111', 'Mekar Indah'
                    ],
                    [
                        '7301112007', '730111', 'Buki Timur'
                    ],
                    [
                        '7302011001', '730201', 'Matekko'
                    ],
                    [
                        '7302011002', '730201', 'Jalanjang'
                    ],
                    [
                        '7302011003', '730201', 'Mario Rennu'
                    ],
                    [
                        '7302012004', '730201', 'Bialo'
                    ],
                    [
                        '7302012005', '730201', 'Bontomacinna'
                    ],
                    [
                        '7302012006', '730201', 'Gattareng'
                    ],
                    [
                        '7302012007', '730201', 'Dampang'
                    ],
                    [
                        '7302012008', '730201', 'Bontosunggu'
                    ],
                    [
                        '7302012009', '730201', 'Palambarae'
                    ],
                    [
                        '7302012010', '730201', 'Bontonyeleng'
                    ],
                    [
                        '7302012011', '730201', 'Benteng Malewang'
                    ],
                    [
                        '7302012012', '730201', 'Padang'
                    ],
                    [
                        '7302012013', '730201', 'Bontoraja'
                    ],
                    [
                        '7302012014', '730201', 'Paenre Lompoe'
                    ],
                    [
                        '7302012015', '730201', 'Benteng Gattareng'
                    ],
                    [
                        '7302012016', '730201', 'Bukit Harapan'
                    ],
                    [
                        '7302012017', '730201', 'Polewali'
                    ],
                    [
                        '7302012018', '730201', 'Bontomasila'
                    ],
                    [
                        '7302012019', '730201', 'Barombong'
                    ],
                    [
                        '7302012020', '730201', 'Bukit Tinggi'
                    ],
                    [
                        '7302012021', '730201', 'Taccorong'
                    ],
                    [
                        '7302021001', '730202', 'Tanah Kongkong'
                    ],
                    [
                        '7302021002', '730202', 'Bentengnge'
                    ],
                    [
                        '7302021003', '730202', 'Terang Terang'
                    ],
                    [
                        '7302021004', '730202', 'Kalumeme'
                    ],
                    [
                        '7302021005', '730202', 'Bintarore'
                    ],
                    [
                        '7302021006', '730202', 'Kasimpureng'
                    ],
                    [
                        '7302021007', '730202', 'Caile'
                    ],
                    [
                        '7302021008', '730202', 'Loka'
                    ],
                    [
                        '7302021009', '730202', 'Ela Ela'
                    ],
                    [
                        '7302031001', '730203', 'Tanahl Lemo'
                    ],
                    [
                        '7302031002', '730203', 'Sapo Lohe'
                    ],
                    [
                        '7302031003', '730203', 'Benjala'
                    ],
                    [
                        '7302031004', '730203', 'Tanah Beru'
                    ],
                    [
                        '7302032005', '730203', 'Bira'
                    ],
                    [
                        '7302032006', '730203', 'Ara'
                    ],
                    [
                        '7302032007', '730203', 'Darubiah'
                    ],
                    [
                        '7302032008', '730203', 'Lembanna'
                    ],
                    [
                        '7302041001', '730204', 'Eka Tiro'
                    ],
                    [
                        '7302042002', '730204', 'Dwitiro'
                    ],
                    [
                        '7302042003', '730204', 'Tritiro'
                    ],
                    [
                        '7302042004', '730204', 'Batang'
                    ],
                    [
                        '7302042005', '730204', 'Bontotangnga'
                    ],
                    [
                        '7302042006', '730204', 'Caramming'
                    ],
                    [
                        '7302042007', '730204', 'Tamalanrea'
                    ],
                    [
                        '7302042008', '730204', 'Bontobarua'
                    ],
                    [
                        '7302042009', '730204', 'Pakubalaho'
                    ],
                    [
                        '7302042010', '730204', 'Bontomarannu'
                    ],
                    [
                        '7302042011', '730204', 'Bontobulaeng'
                    ],
                    [
                        '7302042012', '730204', 'Buhung Bundang'
                    ],
                    [
                        '7302042013', '730204', 'Lamanda'
                    ],
                    [
                        '7302051001', '730205', 'Tanuntung'
                    ],
                    [
                        '7302051002', '730205', 'Bonto Kamase'
                    ],
                    [
                        '7302052003', '730205', 'Karassing'
                    ],
                    [
                        '7302052004', '730205', 'Singa'
                    ],
                    [
                        '7302052005', '730205', 'Gunturu'
                    ],
                    [
                        '7302052006', '730205', 'Borong'
                    ],
                    [
                        '7302052007', '730205', 'Tugondeng'
                    ],
                    [
                        '7302052008', '730205', 'Pataro'
                    ],
                    [
                        '7302061001', '730206', 'Tanah Jaya'
                    ],
                    [
                        '7302061002', '730206', 'Laikang'
                    ],
                    [
                        '7302062003', '730206', 'Tambangan'
                    ],
                    [
                        '7302062004', '730206', 'Lembanna'
                    ],
                    [
                        '7302062005', '730206', 'Possi Tanah'
                    ],
                    [
                        '7302062006', '730206', 'Tanah Towa'
                    ],
                    [
                        '7302062007', '730206', 'Bontobiraeng'
                    ],
                    [
                        '7302062008', '730206', 'Lembang'
                    ],
                    [
                        '7302062009', '730206', 'Batunilamung'
                    ],
                    [
                        '7302062010', '730206', 'Mattoanging'
                    ],
                    [
                        '7302062011', '730206', 'Malleleng'
                    ],
                    [
                        '7302062012', '730206', 'Bonto Baji'
                    ],
                    [
                        '7302062013', '730206', 'Bontorannu'
                    ],
                    [
                        '7302062014', '730206', 'Pattiroang'
                    ],
                    [
                        '7302062015', '730206', 'Sapanang'
                    ],
                    [
                        '7302062016', '730206', 'Sangkala'
                    ],
                    [
                        '7302062017', '730206', 'Lembang Lohe'
                    ],
                    [
                        '7302062018', '730206', 'Lolisang'
                    ],
                    [
                        '7302062019', '730206', 'Pantama'
                    ],
                    [
                        '7302071001', '730207', 'Tanete'
                    ],
                    [
                        '7302071002', '730207', 'Jawijawi'
                    ],
                    [
                        '7302071003', '730207', 'Balla Saraja'
                    ],
                    [
                        '7302072004', '730207', 'Bontobulaeng'
                    ],
                    [
                        '7302072005', '730207', 'Bulo Bulo'
                    ],
                    [
                        '7302072006', '730207', 'Bontominasa'
                    ],
                    [
                        '7302072007', '730207', 'Balangtaroang'
                    ],
                    [
                        '7302072008', '730207', 'Barugae'
                    ],
                    [
                        '7302072009', '730207', 'Salassae'
                    ],
                    [
                        '7302072010', '730207', 'Kambuno'
                    ],
                    [
                        '7302072011', '730207', 'Jojjolo'
                    ],
                    [
                        '7302072012', '730207', 'Sapobonto'
                    ],
                    [
                        '7302072013', '730207', 'Tibona'
                    ],
                    [
                        '7302072014', '730207', 'Balangpesoang'
                    ],
                    [
                        '7302072015', '730207', 'Batulohe'
                    ],
                    [
                        '7302072016', '730207', 'Bontomangiring'
                    ],
                    [
                        '7302072017', '730207', 'Baruga Riattang'
                    ],
                    [
                        '7302081001', '730208', 'Borong Rappoa'
                    ],
                    [
                        '7302082002', '730208', 'Mattirowalie'
                    ],
                    [
                        '7302082003', '730208', 'Kindang'
                    ],
                    [
                        '7302082004', '730208', 'Arinhua'
                    ],
                    [
                        '7302082005', '730208', 'Tamaona'
                    ],
                    [
                        '7302082006', '730208', 'Benteng Palioi'
                    ],
                    [
                        '7302082007', '730208', 'Balibo'
                    ],
                    [
                        '7302082008', '730208', 'Garuntungan'
                    ],
                    [
                        '7302082009', '730208', 'Orogading'
                    ],
                    [
                        '7302082010', '730208', 'Sipaenre'
                    ],
                    [
                        '7302082011', '730208', 'Kahayya'
                    ],
                    [
                        '7302082012', '730208', 'Somba Palioli'
                    ],
                    [
                        '7302082013', '730208', 'Sopa'
                    ],
                    [
                        '7302091001', '730209', 'Dannuang'
                    ],
                    [
                        '7302092002', '730209', 'Garanta'
                    ],
                    [
                        '7302092003', '730209', 'Balleanging'
                    ],
                    [
                        '7302092004', '730209', 'Balong'
                    ],
                    [
                        '7302092005', '730209', 'Seppang'
                    ],
                    [
                        '7302092006', '730209', 'Manyampa'
                    ],
                    [
                        '7302092007', '730209', 'Tammatto'
                    ],
                    [
                        '7302092008', '730209', 'Padangloang'
                    ],
                    [
                        '7302092009', '730209', 'Manjalling'
                    ],
                    [
                        '7302092010', '730209', 'Lonrong'
                    ],
                    [
                        '7302092011', '730209', 'Salemba'
                    ],
                    [
                        '7302092012', '730209', 'Bijawang'
                    ],
                    [
                        '7302092013', '730209', 'Paccaramengang'
                    ],
                    [
                        '7302101002', '730210', 'Palampang'
                    ],
                    [
                        '7302102001', '730210', 'Bontomanai'
                    ],
                    [
                        '7302102003', '730210', 'Bontobangun'
                    ],
                    [
                        '7302102004', '730210', 'Karama'
                    ],
                    [
                        '7302102005', '730210', 'Bontolohe'
                    ],
                    [
                        '7302102006', '730210', 'Bajiminasa'
                    ],
                    [
                        '7302102007', '730210', 'Bonto Matene'
                    ],
                    [
                        '7302102008', '730210', 'Tanah Harapan'
                    ],
                    [
                        '7302102009', '730210', 'Batukaroppa'
                    ],
                    [
                        '7302102010', '730210', 'Bontoharu'
                    ],
                    [
                        '7302102011', '730210', 'Swatani'
                    ],
                    [
                        '7302102012', '730210', 'Bulolohe'
                    ],
                    [
                        '7302102013', '730210', 'Anrang'
                    ],
                    [
                        '7302102014', '730210', 'Pangalloang'
                    ],
                    [
                        '7302102015', '730210', 'Topanda'
                    ],
                    [
                        '7303011001', '730301', 'Bonto Manai'
                    ],
                    [
                        '7303011002', '730301', 'Bonto Lebang'
                    ],
                    [
                        '7303011003', '730301', 'Bonto Sunggu'
                    ],
                    [
                        '7303011004', '730301', 'Bonto Atu'
                    ],
                    [
                        '7303011005', '730301', 'Bonto Rita'
                    ],
                    [
                        '7303011006', '730301', 'Bonto Langkasa'
                    ],
                    [
                        '7303011007', '730301', 'Bonto Jaya'
                    ],
                    [
                        '7303012008', '730301', 'Bonto Jai'
                    ],
                    [
                        '7303012009', '730301', 'Bonto Cinde'
                    ],
                    [
                        '7303012010', '730301', 'Bonto Loe'
                    ],
                    [
                        '7303012012', '730301', 'Bonto Salluang'
                    ],
                    [
                        '7303021001', '730302', 'Tappanjeng'
                    ],
                    [
                        '7303021002', '730302', 'Pallantikang'
                    ],
                    [
                        '7303021003', '730302', 'Letta'
                    ],
                    [
                        '7303021004', '730302', 'Mallilingi'
                    ],
                    [
                        '7303021005', '730302', 'Lembang'
                    ],
                    [
                        '7303021006', '730302', 'Lamalaka'
                    ],
                    [
                        '7303021007', '730302', 'Karatuang'
                    ],
                    [
                        '7303021008', '730302', 'Onto'
                    ],
                    [
                        '7303022009', '730302', 'Kayu Loe'
                    ],
                    [
                        '7303032001', '730303', 'Ulu Galung'
                    ],
                    [
                        '7303032002', '730303', 'Lonrong'
                    ],
                    [
                        '7303032003', '730303', 'Barua'
                    ],
                    [
                        '7303032004', '730303', 'Kampala'
                    ],
                    [
                        '7303032005', '730303', "Pabentengan"
                    ],
                    [
                        '7303032006', '730303', 'Mappilawing'
                    ],
                    [
                        '7303032007', '730303', "Pabumbungang"
                    ],
                    [
                        '7303032008', '730303', 'Mamampang'
                    ],
                    [
                        '7303032009', '730303', 'Parang Loe'
                    ],
                    [
                        '7303041001', '730304', 'Lembang Gantarang Keke'
                    ],
                    [
                        '7303041003', '730304', 'Banyorang'
                    ],
                    [
                        '7303041004', '730304', 'Campaga'
                    ],
                    [
                        '7303041005', '730304', 'Eren Ereng'
                    ],
                    [
                        '7303042006', '730304', 'Labbo'
                    ],
                    [
                        '7303042007', '730304', 'Pattaneteang'
                    ],
                    [
                        '7303042008', '730304', 'Pattallassang'
                    ],
                    [
                        '7303042009', '730304', 'Bonto-bontoa'
                    ],
                    [
                        '7303042010', '730304', 'Bonto Tappalang'
                    ],
                    [
                        '7303042011', '730304', 'Balumbung'
                    ],
                    [
                        '7303052002', '730305', 'Biangkeke'
                    ],
                    [
                        '7303052003', '730305', "Pajukukang"
                    ],
                    [
                        '7303052004', '730305', 'Biangloe'
                    ],
                    [
                        '7303052005', '730305', 'Borong Loe'
                    ],
                    [
                        '7303052006', '730305', 'Baruga'
                    ],
                    [
                        '7303052010', '730305', 'Nipa-nipa'
                    ],
                    [
                        '7303052012', '730305', 'Papan Loe'
                    ],
                    [
                        '7303052013', '730305', 'Rappoa'
                    ],
                    [
                        '7303052014', '730305', 'Lumpangan'
                    ],
                    [
                        '7303052015', '730305', 'Batu Karaeng'
                    ],
                    [
                        '7303062001', '730306', 'Bonto Marannu'
                    ],
                    [
                        '7303062002', '730306', 'Bonto Tangnga'
                    ],
                    [
                        '7303062006', '730306', 'Bonto Tallasa'
                    ],
                    [
                        '7303062007', '730306', 'Bonto Rannu'
                    ],
                    [
                        '7303062010', '730306', 'Bonto Daeng'
                    ],
                    [
                        '7303062011', '730306', 'Bonto Lojong'
                    ],
                    [
                        '7303071001', '730307', 'Gantarang Keke'
                    ],
                    [
                        '7303071002', '730307', 'Tanah Loe'
                    ],
                    [
                        '7303072003', '730307', 'Layoa'
                    ],
                    [
                        '7303072004', '730307', 'Bajiminasa'
                    ],
                    [
                        '7303072005', '730307', 'Tombolo'
                    ],
                    [
                        '7303072006', '730307', 'Kaloling'
                    ],
                    [
                        '7303082001', '730308', 'Bonto Tiro'
                    ],
                    [
                        '7303082002', '730308', 'Bonto Karaeng'
                    ],
                    [
                        '7303082003', '730308', 'Bonto Maccini'
                    ],
                    [
                        '7303082004', '730308', "Bonto Matene"
                    ],
                    [
                        '7303082005', '730308', 'Bonto Majannang'
                    ],
                    [
                        '7303082006', '730308', 'Bonto Bulaeng'
                    ],
                    [
                        '7304011001', '730401', 'Benteng'
                    ],
                    [
                        '7304011002', '730401', 'Pallengu'
                    ],
                    [
                        '7304011003', '730401', 'Pantai Bahari'
                    ],
                    [
                        '7304011004', '730401', 'Bontorannu '
                    ],
                    [
                        '7304012005', '730401', 'Pallantikang'
                    ],
                    [
                        '7304012006', '730401', 'Kalimporo'
                    ],
                    [
                        '7304012007', '730401', 'Punagaya'
                    ],
                    [
                        '7304012008', '730401', 'Mallasoro'
                    ],
                    [
                        '7304012009', '730401', 'Kapita'
                    ],
                    [
                        '7304012010', '730401', 'Marayoka'
                    ],
                    [
                        '7304012011', '730401', 'Jenetallasa'
                    ],
                    [
                        '7304012012', '730401', 'Tombo Tombolo'
                    ],
                    [
                        '7304012013', '730401', 'Gunung Silanu'
                    ],
                    [
                        '7304012014', '730401', 'Bontomanai'
                    ],
                    [
                        '7304021001', '730402', 'Bonto Tangnga'
                    ],
                    [
                        '7304021002', '730402', 'Tonro Kassi'
                    ],
                    [
                        '7304021003', '730402', 'Tonro Kassi Barat'
                    ],
                    [
                        '7304021004', '730402', 'Tonro Kassi Timur'
                    ],
                    [
                        '7304021005', '730402', 'Taman Roya'
                    ],
                    [
                        '7304021006', '730402', 'Manjangloe'
                    ],
                    [
                        '7304022007', '730402', 'Borongtala'
                    ],
                    [
                        '7304022008', '730402', 'Bontosunggu'
                    ],
                    [
                        '7304022009', '730402', 'Turatea'
                    ],
                    [
                        '7304022010', '730402', 'Karelayu'
                    ],
                    [
                        '7304022011', '730402', 'Bontojai'
                    ],
                    [
                        '7304022012', '730402', 'Turatea Timur'
                    ],
                    [
                        '7304031001', '730403', 'Pabiringa'
                    ],
                    [
                        '7304031002', '730403', 'Balang'
                    ],
                    [
                        '7304031003', '730403', 'Empoang'
                    ],
                    [
                        '7304031004', '730403', 'Balang Toa'
                    ],
                    [
                        '7304031005', '730403', 'Balang Beru'
                    ],
                    [
                        '7304031006', '730403', 'Empoang Selatan'
                    ],
                    [
                        '7304031007', '730403', 'Sidenre'
                    ],
                    [
                        '7304031008', '730403', 'Empoang Utara'
                    ],
                    [
                        '7304031009', '730403', 'Monro Monro'
                    ],
                    [
                        '7304031010', '730403', 'Biring Kassi'
                    ],
                    [
                        '7304031011', '730403', 'Panaikang'
                    ],
                    [
                        '7304031012', '730403', 'Bontoa '
                    ],
                    [
                        '7304032013', '730403', 'Sapanang'
                    ],
                    [
                        '7304041001', '730404', 'Togo Togo'
                    ],
                    [
                        '7304041002', '730404', 'Bonto Raya'
                    ],
                    [
                        '7304042003', '730404', 'Maccinibaji'
                    ],
                    [
                        '7304042008', '730404', 'Camba Camba'
                    ],
                    [
                        '7304042009', '730404', 'Kaluku'
                    ],
                    [
                        '7304042014', '730404', 'Bungeng'
                    ],
                    [
                        '7304051001', '730405', 'Tolo'
                    ],
                    [
                        '7304051002', '730405', 'Tolo Utara'
                    ],
                    [
                        '7304051003', '730405', 'Tolo Selatan'
                    ],
                    [
                        '7304051004', '730405', 'Tolo Timur'
                    ],
                    [
                        '7304051005', '730405', 'Tolo Barat'
                    ],
                    [
                        '7304052006', '730405', 'Gantarang'
                    ],
                    [
                        '7304052009', '730405', 'Bontolebang'
                    ],
                    [
                        '7304052010', '730405', 'Bontonompo'
                    ],
                    [
                        '7304052014', '730405', 'Samataring'
                    ],
                    [
                        '7304052021', '730405', 'Tombolo'
                    ],
                    [
                        '7304061002', '730406', 'Bulu Jaya'
                    ],
                    [
                        '7304062001', '730406', 'Banrimanurung'
                    ],
                    [
                        '7304062003', '730406', 'Barana'
                    ],
                    [
                        '7304062004', '730406', 'Beroanging'
                    ],
                    [
                        '7304062005', '730406', 'Tuju'
                    ],
                    [
                        '7304062006', '730406', 'Garassikang'
                    ],
                    [
                        '7304062007', '730406', 'Pattiro'
                    ],
                    [
                        '7304062008', '730406', 'Pappalluang'
                    ],
                    [
                        '7304071002', '730407', 'Bontoramba'
                    ],
                    [
                        '7304072001', '730407', 'Bulusibatang'
                    ],
                    [
                        '7304072003', '730407', 'Balumbungan'
                    ],
                    [
                        '7304072004', '730407', 'Bangkalaloe'
                    ],
                    [
                        '7304072005', '730407', 'Datara'
                    ],
                    [
                        '7304072006', '730407', 'Maero'
                    ],
                    [
                        '7304072007', '730407', 'Kareloe'
                    ],
                    [
                        '7304072008', '730407', 'Batujala'
                    ],
                    [
                        '7304072009', '730407', 'Bulusuka'
                    ],
                    [
                        '7304072010', '730407', 'Tanammawang'
                    ],
                    [
                        '7304072011', '730407', 'Lentu'
                    ],
                    [
                        '7304072012', '730407', 'Baraya'
                    ],
                    [
                        '7304082001', '730408', 'Paitana'
                    ],
                    [
                        '7304082002', '730408', "Bonto Matene"
                    ],
                    [
                        '7304082003', '730408', 'Mangepong'
                    ],
                    [
                        '7304082004', '730408', 'Bululoe'
                    ],
                    [
                        '7304082005', '730408', 'Kayuloe Barat'
                    ],
                    [
                        '7304082006', '730408', 'Langkura'
                    ],
                    [
                        '7304082007', '730408', 'Bungungloe'
                    ],
                    [
                        '7304082008', '730408', 'Kayuloe Timur'
                    ],
                    [
                        '7304082009', '730408', 'Jombe'
                    ],
                    [
                        '7304082010', '730408', 'Tanjonga'
                    ],
                    [
                        '7304082011', '730408', 'Parasanganberu'
                    ],
                    [
                        '7304092001', '730409', 'Bulo Bulo'
                    ],
                    [
                        '7304092002', '730409', 'Arungkeke'
                    ],
                    [
                        '7304092003', '730409', 'Palajau'
                    ],
                    [
                        '7304092004', '730409', 'Boronglamu'
                    ],
                    [
                        '7304092005', '730409', 'Arungkeke Pallantikang'
                    ],
                    [
                        '7304092006', '730409', 'Kalumpangloe'
                    ],
                    [
                        '7304092007', '730409', 'Kampala'
                    ],
                    [
                        '7304102001', '730410', 'Rumbia'
                    ],
                    [
                        '7304102002', '730410', 'Lebangmanai'
                    ],
                    [
                        '7304102003', '730410', 'Bontomanai'
                    ],
                    [
                        '7304102004', '730410', 'Bontotiro'
                    ],
                    [
                        '7304102005', '730410', 'Loka'
                    ],
                    [
                        '7304102006', '730410', 'Tompobulu'
                    ],
                    [
                        '7304102007', '730410', 'Kassi'
                    ],
                    [
                        '7304102008', '730410', 'Pallantikang'
                    ],
                    [
                        '7304102009', '730410', 'Lebangmanai Utara'
                    ],
                    [
                        '7304102010', '730410', 'Bontocini'
                    ],
                    [
                        '7304102011', '730410', 'Janetallasa'
                    ],
                    [
                        '7304102012', '730410', 'Ujung Bulu'
                    ],
                    [
                        '7304112001', '730411', 'Pao'
                    ],
                    [
                        '7304112002', '730411', 'Bontorappo'
                    ],
                    [
                        '7304112003', '730411', 'Tarowang'
                    ],
                    [
                        '7304112004', '730411', 'Allu Tarowang'
                    ],
                    [
                        '7304112005', '730411', 'Balangbaru'
                    ],
                    [
                        '7304112006', '730411', 'Balangloe Tarowang'
                    ],
                    [
                        '7304112007', '730411', 'Bonto Ujung'
                    ],
                    [
                        '7304112008', '730411', 'Tino'
                    ],
                    [
                        '7305011001', '730501', 'Takalar'
                    ],
                    [
                        '7305012003', '730501', 'Patani'
                    ],
                    [
                        '7305012009', '730501', 'Soreang'
                    ],
                    [
                        '7305012010', '730501', "sPabatangang"
                    ],
                    [
                        '7305021002', '730502', 'Mangadu'
                    ],
                    [
                        '7305022001', '730502', 'Lengkese'
                    ],
                    [
                        '7305022003', '730502', 'Topejawa'
                    ],
                    [
                        '7305022004', '730502', 'Lakatong'
                    ],
                    [
                        '7305022007', '730502', 'Banggae'
                    ],
                    [
                        '7305022008', '730502', 'Bontomanai'
                    ],
                    [
                        '7305031001', '730503', "Pabundukang"
                    ],
                    [
                        '7305031002', '730503', 'Pattene'
                    ],
                    [
                        '7305031003', '730503', 'Bontokadatto'
                    ],
                    [
                        '7305031004', '730503', 'Canrego'
                    ],
                    [
                        '7305031005', '730503', 'Bulukunyi'
                    ],
                    [
                        '7305031010', '730503', 'Rajaya'
                    ],
                    [
                        '7305032006', '730503', 'Moncongkomba'
                    ],
                    [
                        '7305032007', '730503', 'Cakura'
                    ],
                    [
                        '7305032008', '730503', 'Lantang'
                    ],
                    [
                        '7305032009', '730503', "Surulangi"
                    ],
                    [
                        '7305032011', '730503', 'Kale Lantang'
                    ],
                    [
                        '7305041001', '730504', 'Panrannuangku'
                    ],
                    [
                        '7305041002', '730504', 'Manongkoki'
                    ],
                    [
                        '7305041003', '730504', 'Malewang'
                    ],
                    [
                        '7305041004', '730504', 'Palleko'
                    ],
                    [
                        '7305041005', '730504', 'Mattompodale'
                    ],
                    [
                        '7305041006', '730504', 'Parang Luara'
                    ],
                    [
                        '7305042007', '730504', 'Lassang'
                    ],
                    [
                        '7305042009', '730504', "Parappunganta"
                    ],
                    [
                        '7305042010', '730504', 'Towata'
                    ],
                    [
                        '7305042016', '730504', 'Lassang Barat'
                    ],
                    [
                        '7305052006', '730505', 'Bonto Kanang'
                    ],
                    [
                        '7305052007', '730505', 'Bontomarannu'
                    ],
                    [
                        '7305052008', '730505', 'Mangindara'
                    ],
                    [
                        '7305052009', '730505', 'Bontokassi'
                    ],
                    [
                        '7305052011', '730505', 'Bentang'
                    ],
                    [
                        '7305052012', '730505', 'Barangmamase'
                    ],
                    [
                        '7305052013', '730505', 'Sawakong'
                    ],
                    [
                        '7305052015', '730505', 'Popo'
                    ],
                    [
                        '7305052016', '730505', 'Tarowang'
                    ],
                    [
                        '7305052017', '730505', 'Kalukubodo'
                    ],
                    [
                        '7305052018', '730505', 'Kadatong'
                    ],
                    [
                        '7305052019', '730505', 'Kale Bentang'
                    ],
                    [
                        '7305052020', '730505', 'Kanaeng'
                    ],
                    [
                        '7305061004', '730506', 'Bontolebang'
                    ],
                    [
                        '7305062001', '730506', 'Pakkabba'
                    ],
                    [
                        '7305062002', '730506', 'Bontolanra'
                    ],
                    [
                        '7305062003', '730506', 'Aeng Batu Batu'
                    ],
                    [
                        '7305062005', '730506', 'Tamalate'
                    ],
                    [
                        '7305062006', '730506', 'Tamasaju'
                    ],
                    [
                        '7305062007', '730506', 'Bontosunggu'
                    ],
                    [
                        '7305062010', '730506', 'Aeng Towa'
                    ],
                    [
                        '7305062011', '730506', 'Bontokaddopepe'
                    ],
                    [
                        '7305062012', '730506', 'Sampulungan'
                    ],
                    [
                        '7305062013', '730506', 'Maccini Sombala'
                    ],
                    [
                        '7305062014', '730506', 'Sawakung Beba'
                    ],
                    [
                        '7305062015', '730506', 'Biring Kassi'
                    ],
                    [
                        '7305062016', '730506', 'Kaballokang Pakkabba'
                    ],
                    [
                        '7305071001', '730507', 'Pattallassang'
                    ],
                    [
                        '7305071002', '730507', 'Pallantikang'
                    ],
                    [
                        '7305071003', '730507', 'Somba Bella '
                    ],
                    [
                        '7305071004', '730507', 'Kalabbirang'
                    ],
                    [
                        '7305071005', '730507', 'Maradekaya '
                    ],
                    [
                        '7305071006', '730507', 'Pappa'
                    ],
                    [
                        '7305071007', '730507', 'Bajeng'
                    ],
                    [
                        '7305071008', '730507', 'Sabintang'
                    ],
                    [
                        '7305071009', '730507', 'Salaka'
                    ],
                    [
                        '7305082001', '730508', 'Laguruda'
                    ],
                    [
                        '7305082002', '730508', 'Banyuanyara'
                    ],
                    [
                        '7305082003', '730508', 'Sanrobone'
                    ],
                    [
                        '7305082004', '730508', 'Paddinging'
                    ],
                    [
                        '7305082005', '730508', 'Ujung Baji'
                    ],
                    [
                        '7305082006', '730508', 'Tonasa'
                    ],
                    [
                        '7305092001', '730509', 'Galesong Baru'
                    ],
                    [
                        '7305092002', '730509', 'Galesong Kota'
                    ],
                    [
                        '7305092003', '730509', 'Bontoloe'
                    ],
                    [
                        '7305092004', '730509', 'Boddia'
                    ],
                    [
                        '7305092005', '730509', 'Bontomangape'
                    ],
                    [
                        '7305092006', '730509', 'Parangmata'
                    ],
                    [
                        '7305092007', '730509', 'Parambambe'
                    ],
                    [
                        '7305092008', '730509', "Parasangang Beru"
                    ],
                    [
                        '7305092009', '730509', "Palalakkang"
                    ],
                    [
                        '7305092010', '730509', 'Pattinoang'
                    ],
                    [
                        '7305092011', '730509', 'Kalenna Bontongape'
                    ],
                    [
                        '7305092012', '730509', 'Kalukuang'
                    ],
                    [
                        '7305092013', '730509', 'Mappakalompo'
                    ],
                    [
                        '7305092014', '730509', 'Campagaya'
                    ],
                    [
                        '7305092015', '730509', 'Galesong Timur'
                    ],
                    [
                        '7305092016', '730509', 'Kampung Beru'
                    ],
                    [
                        '7305092017', '730509', 'Tarembang'
                    ],
                    [
                        '7305102001', '730510', 'Tompotana'
                    ],
                    [
                        '7305102002', '730510', 'Mattiro Baji'
                    ],
                    [
                        '7305102003', '730510', 'Rewataya'
                    ],
                    [
                        '7305102004', '730510', 'Balangdatu'
                    ],
                    [
                        '7305102005', '730510', 'Maccini Baji'
                    ],
                    [
                        '7305102006', '730510', 'Minasa Baji'
                    ],
                    [
                        '7305112001', '730511', "Komara"
                    ],
                    [
                        '7305112002', '730511', "Kale Komara"
                    ],
                    [
                        '7305112003', '730511', 'Barugaya'
                    ],
                    [
                        '7305112004', '730511', 'Parang Baddo'
                    ],
                    [
                        '7305112005', '730511', 'Massamaturu'
                    ],
                    [
                        '7305112006', '730511', 'Timbuseng'
                    ],
                    [
                        '7305112007', '730511', 'Balangtanaya'
                    ],
                    [
                        '7305112008', '730511', 'Kampung Beru'
                    ],
                    [
                        '7305122001', '730512', 'Panyangkalang'
                    ],
                    [
                        '7305122002', '730512', 'Bontoparang'
                    ],
                    [
                        '7305122003', '730512', 'Pattopakang'
                    ],
                    [
                        '7305122004', '730512', 'Cikoang'
                    ],
                    [
                        '7305122005', '730512', 'Punaga'
                    ],
                    [
                        '7305122006', '730512', 'Laikang'
                    ],
                    [
                        '7306011001', '730601', 'Bontonompo'
                    ],
                    [
                        '7306011002', '730601', 'Tamallayang'
                    ],
                    [
                        '7306011003', '730601', 'Kalaserena'
                    ],
                    [
                        '7306012004', '730601', 'Bontolangkasa Utara'
                    ],
                    [
                        '7306012005', '730601', 'Bontolangkasa Selatan'
                    ],
                    [
                        '7306012006', '730601', 'Barembeng'
                    ],
                    [
                        '7306012015', '730601', 'Manjapai'
                    ],
                    [
                        '7306012016', '730601', 'Bontobiraeng'
                    ],
                    [
                        '7306012017', '730601', 'Romanglasa'
                    ],
                    [
                        '7306012018', '730601', 'Katangka'
                    ],
                    [
                        '7306012019', '730601', 'Bulogading'
                    ],
                    [
                        '7306012020', '730601', 'Bategulung'
                    ],
                    [
                        '7306012021', '730601', 'Kalabarembeng'
                    ],
                    [
                        '7306012022', '730601', 'Bontobiraeng Selatan'
                    ],
                    [
                        '7306021001', '730602', 'Kalebajeng'
                    ],
                    [
                        '7306021002', '730602', 'Limbung'
                    ],
                    [
                        '7306021017', '730602', 'Tubajeng'
                    ],
                    [
                        '7306021018', '730602', 'Mata Allo'
                    ],
                    [
                        '7306022003', '730602', 'Bontosunggu'
                    ],
                    [
                        '7306022006', '730602', 'Maccinibaji'
                    ],
                    [
                        '7306022007', '730602', "Pabentengang"
                    ],
                    [
                        '7306022009', '730602', 'Tangkebajeng'
                    ],
                    [
                        '7306022010', '730602', 'Maradekaya'
                    ],
                    [
                        '7306022011', '730602', 'Panciro'
                    ],
                    [
                        '7306022012', '730602', 'Lempangang'
                    ],
                    [
                        '7306022013', '730602', 'Bone'
                    ],
                    [
                        '7306022015', '730602', 'Pannyangkalang'
                    ],
                    [
                        '7306022019', '730602', 'Paraikatte'
                    ],
                    [
                        '7306031001', '730603', 'Malakaji'
                    ],
                    [
                        '7306031002', '730603', 'Cikoro'
                    ],
                    [
                        '7306032003', '730603', 'Garing'
                    ],
                    [
                        '7306032004', '730603', 'Datara'
                    ],
                    [
                        '7306032005', '730603', 'Rappolemba'
                    ],
                    [
                        '7306032006', '730603', 'Rappoala'
                    ],
                    [
                        '7306032007', '730603', 'Tanete'
                    ],
                    [
                        '7306032008', '730603', 'Bontobuddung'
                    ],
                    [
                        '7306041001', '730604', 'Malino'
                    ],
                    [
                        '7306041002', '730604', 'Buluttana'
                    ],
                    [
                        '7306041003', '730604', 'Gantarang'
                    ],
                    [
                        '7306041010', '730604', 'Pattapang'
                    ],
                    [
                        '7306041011', '730604', 'Bonto Lerung'
                    ],
                    [
                        '7306041012', '730604', 'Garassi'
                    ],
                    [
                        '7306042004', '730604', 'Parigi'
                    ],
                    [
                        '7306051001', '730605', 'Lanna'
                    ],
                    [
                        '7306051002', '730605', 'Bontoparang'
                    ],
                    [
                        '7306052006', '730605', 'Lonjoboko'
                    ],
                    [
                        '7306052008', '730605', 'Borisallo'
                    ],
                    [
                        '7306052009', '730605', 'Belapunranga'
                    ],
                    [
                        '7306052010', '730605', 'Bontokassi'
                    ],
                    [
                        '7306052011', '730605', 'Belabori'
                    ],
                    [
                        '7306061001', '730606', 'Borongloe'
                    ],
                    [
                        '7306061002', '730606', 'Bontomanai'
                    ],
                    [
                        '7306061012', '730606', 'Romang Lompoa'
                    ],
                    [
                        '7306062003', '730606', 'Pakatto'
                    ],
                    [
                        '7306062004', '730606', 'Nirannuang'
                    ],
                    [
                        '7306062005', '730606', 'Romangloe'
                    ],
                    [
                        '7306062006', '730606', 'Sokkolia'
                    ],
                    [
                        '7306062013', '730606', 'Mata Allo'
                    ],
                    [
                        '7306062014', '730606', 'Bili-bili'
                    ],
                    [
                        '7306071001', '730607', 'Tetebatu'
                    ],
                    [
                        '7306071002', '730607', 'Pangkabinanga'
                    ],
                    [
                        '7306071003', '730607', 'Parangbanoa'
                    ],
                    [
                        '7306071015', '730607', 'Mangalli'
                    ],
                    [
                        '7306072004', '730607', 'Bontoala'
                    ],
                    [
                        '7306072005', '730607', 'Pallangga'
                    ],
                    [
                        '7306072006', '730607', 'Julubori'
                    ],
                    [
                        '7306072007', '730607', 'Kampili'
                    ],
                    [
                        '7306072008', '730607', 'Panakkukang'
                    ],
                    [
                        '7306072009', '730607', 'Bontoramba'
                    ],
                    [
                        '7306072010', '730607', 'Jene tallasa'
                    ],
                    [
                        '7306072011', '730607', 'Julukanaya'
                    ],
                    [
                        '7306072012', '730607', "Julupamai"
                    ],
                    [
                        '7306072013', '730607', 'Bungaejaya'
                    ],
                    [
                        '7306072014', '730607', 'Toddotoa'
                    ],
                    [
                        '7306072016', '730607', 'Taeng'
                    ],
                    [
                        '7306081001', '730608', 'Sungguminasa'
                    ],
                    [
                        '7306081002', '730608', 'Bonto Bontoa'
                    ],
                    [
                        '7306081003', '730608', 'Batangkaluku'
                    ],
                    [
                        '7306081004', '730608', 'Tompobalang'
                    ],
                    [
                        '7306081005', '730608', 'Samata'
                    ],
                    [
                        '7306081006', '730608', 'Katangka'
                    ],
                    [
                        '7306081007', '730608', 'Pandang Pandang'
                    ],
                    [
                        '7306081008', '730608', 'Tombolo'
                    ],
                    [
                        '7306081009', '730608', 'Kalegowa'
                    ],
                    [
                        '7306081010', '730608', 'Romangpolong'
                    ],
                    [
                        '7306081011', '730608', 'Paccinongang'
                    ],
                    [
                        '7306081012', '730608', 'Tamarunang'
                    ],
                    [
                        '7306081013', '730608', 'Bontoramba'
                    ],
                    [
                        '7306081014', '730608', 'Mawang'
                    ],
                    [
                        '7306091001', '730609', 'Sapaya'
                    ],
                    [
                        '7306091010', '730609', "Jenebatu"
                    ],
                    [
                        '7306092002', '730609', 'Bontomanai'
                    ],
                    [
                        '7306092003', '730609', 'Buakkang'
                    ],
                    [
                        '7306092004', '730609', 'Bissoloro'
                    ],
                    [
                        '7306092011', '730609', 'Rannaloe'
                    ],
                    [
                        '7306092012', '730609', 'Mangempang'
                    ],
                    [
                        '7306101001', '730610', 'Tamaona'
                    ],
                    [
                        '7306102002', '730610', "Tabinjai"
                    ],
                    [
                        '7306102003', '730610', 'Erelembang'
                    ],
                    [
                        '7306102004', '730610', 'Kanreapia'
                    ],
                    [
                        '7306102005', '730610', 'Pao'
                    ],
                    [
                        '7306102006', '730610', 'Balassuka'
                    ],
                    [
                        '7306102007', '730610', 'Mamampang'
                    ],
                    [
                        '7306102008', '730610', 'Tonasa'
                    ],
                    [
                        '7306102009', '730610', 'Bolaromang'
                    ],
                    [
                        '7306111002', '730611', 'Tonrorita '
                    ],
                    [
                        '7306111004', '730611', 'Lauwa'
                    ],
                    [
                        '7306112001', '730611', 'Taring'
                    ],
                    [
                        '7306112003', '730611', 'Pencong'
                    ],
                    [
                        '7306112005', '730611', 'Berutallasa'
                    ],
                    [
                        '7306112006', '730611', 'Parangloe'
                    ],
                    [
                        '7306112007', '730611', 'Baturappe'
                    ],
                    [
                        '7306112008', '730611', 'Batumalonro'
                    ],
                    [
                        '7306112009', '730611', 'Borimasunggu'
                    ],
                    [
                        '7306112010', '730611', 'Lembangloe'
                    ],
                    [
                        '7306112011', '730611', 'Julukanaya'
                    ],
                    [
                        '7306121001', '730612', 'Benteng Somba Opu'
                    ],
                    [
                        '7306121005', '730612', 'Lembang Parang'
                    ],
                    [
                        '7306122002', '730612', 'Kanjilo'
                    ],
                    [
                        '7306122003', '730612', 'Moncobalang'
                    ],
                    [
                        '7306122004', '730612', 'Tinggimae'
                    ],
                    [
                        '7306122006', '730612', 'Biringala'
                    ],
                    [
                        '7306122007', '730612', 'Tamannyeleng'
                    ],
                    [
                        '7306132001', '730613', 'Timbuseng'
                    ],
                    [
                        '7306132002', '730613', 'Pallantikang'
                    ],
                    [
                        '7306132003', '730613', 'Sunggumanai'
                    ],
                    [
                        '7306132004', '730613', 'Paccellekang'
                    ],
                    [
                        '7306132005', '730613', 'Pattallassang'
                    ],
                    [
                        '7306132006', '730613', "Jenemadinging"
                    ],
                    [
                        '7306132007', '730613', 'Panaikang'
                    ],
                    [
                        '7306132008', '730613', "Borongpalala"
                    ],
                    [
                        '7306142001', '730614', 'Manuju'
                    ],
                    [
                        '7306142002', '730614', 'Pattallikang'
                    ],
                    [
                        '7306142003', '730614', 'Tamalatea'
                    ],
                    [
                        '7306142004', '730614', 'Moncongloe'
                    ],
                    [
                        '7306142005', '730614', 'Bilalang'
                    ],
                    [
                        '7306142006', '730614', 'Tassese'
                    ],
                    [
                        '7306142007', '730614', 'Tanak Karaeng'
                    ],
                    [
                        '7306152001', '730615', 'Julumatene'
                    ],
                    [
                        '7306152002', '730615', 'Bontolempangang'
                    ],
                    [
                        '7306152003', '730615', 'Lassa-Lassa'
                    ],
                    [
                        '7306152004', '730615', 'Bontoloe'
                    ],
                    [
                        '7306152005', '730615', 'Paladingang'
                    ],
                    [
                        '7306152006', '730615', 'Paranglompoa'
                    ],
                    [
                        '7306152007', '730615', 'Bontotangnga'
                    ],
                    [
                        '7306152008', '730615', 'Ulujangang'
                    ],
                    [
                        '7306161009', '730616', 'Bontoramba'
                    ],
                    [
                        '7306162001', '730616', 'Sengka'
                    ],
                    [
                        '7306162002', '730616', 'Tanrara'
                    ],
                    [
                        '7306162003', '730616', 'Tindang'
                    ],
                    [
                        '7306162004', '730616', 'Pabundukang'
                    ],
                    [
                        '7306162005', '730616', 'Bontosunggu'
                    ],
                    [
                        '7306162006', '730616', 'Salajangki'
                    ],
                    [
                        '7306162007', '730616', 'Salajo'
                    ],
                    [
                        '7306162008', '730616', 'Jipang'
                    ],
                    [
                        '7306172001', '730617', 'Majannang'
                    ],
                    [
                        '7306172002', '730617', 'Jonjo'
                    ],
                    [
                        '7306172003', '730617', 'Manimbahoi'
                    ],
                    [
                        '7306172004', '730617', 'Sicini'
                    ],
                    [
                        '7306172005', '730617', 'Bilanrengi'
                    ],
                    [
                        '7306182001', '730618', 'Borimatangkasa'
                    ],
                    [
                        '7306182002', '730618', 'Mandalle'
                    ],
                    [
                        '7306182003', '730618', 'Manjalling'
                    ],
                    [
                        '7306182004', '730618', 'Gentungang'
                    ],
                    [
                        '7306182005', '730618', 'Tanabangka'
                    ],
                    [
                        '7306182006', '730618', 'Kalemandalle'
                    ],
                    [
                        '7306182007', '730618', 'Bontomanai'
                    ],
                    [
                        '7307011001', '730701', 'Tassililu'
                    ],
                    [
                        '7307011002', '730701', 'Balakia'
                    ],
                    [
                        '7307012003', '730701', 'Gunung Perak'
                    ],
                    [
                        '7307012004', '730701', 'Arabika'
                    ],
                    [
                        '7307012005', '730701', 'Bonto Salama'
                    ],
                    [
                        '7307012006', '730701', 'Turungan Baji'
                    ],
                    [
                        '7307012007', '730701', 'Barania'
                    ],
                    [
                        '7307012008', '730701', 'Boto Lempangan'
                    ],
                    [
                        '7307012009', '730701', 'Terasa'
                    ],
                    [
                        '7307021001', '730702', 'Sangiaseri '
                    ],
                    [
                        '7307022002', '730702', 'Puncak'
                    ],
                    [
                        '7307022003', '730702', 'Songing'
                    ],
                    [
                        '7307022004', '730702', 'Aska'
                    ],
                    [
                        '7307022005', '730702', 'Talle'
                    ],
                    [
                        '7307022006', '730702', 'Palae'
                    ],
                    [
                        '7307022007', '730702', 'Bulu Kamase'
                    ],
                    [
                        '7307022008', '730702', 'Palangka'
                    ],
                    [
                        '7307022009', '730702', 'Polewali'
                    ],
                    [
                        '7307022010', '730702', 'Gareccing'
                    ],
                    [
                        '7307022011', '730702', 'Alenangka'
                    ],
                    [
                        '7307031001', '730703', 'Samataring '
                    ],
                    [
                        '7307032002', '730703', 'Sanjai'
                    ],
                    [
                        '7307032003', '730703', 'Pattalassang'
                    ],
                    [
                        '7307032004', '730703', 'Panaikang'
                    ],
                    [
                        '7307032005', '730703', 'Saukang'
                    ],
                    [
                        '7307032006', '730703', 'Kampala'
                    ],
                    [
                        '7307032007', '730703', 'Lasiai'
                    ],
                    [
                        '7307032008', '730703', 'Biroro'
                    ],
                    [
                        '7307032009', '730703', 'Kaloling'
                    ],
                    [
                        '7307032010', '730703', 'Pasimarannu'
                    ],
                    [
                        '7307032011', '730703', 'Tongke-Tongke'
                    ],
                    [
                        '7307032012', '730703', 'Salohe'
                    ],
                    [
                        '7307032013', '730703', 'Bongki Lengkese'
                    ],
                    [
                        '7307041001', '730704', 'Samaenre'
                    ],
                    [
                        '7307042002', '730704', 'Mattunreng Tellue'
                    ],
                    [
                        '7307042003', '730704', 'Kompang'
                    ],
                    [
                        '7307042004', '730704', 'Baru'
                    ],
                    [
                        '7307042005', '730704', 'Pattongko'
                    ],
                    [
                        '7307042006', '730704', 'Saotengnga'
                    ],
                    [
                        '7307042007', '730704', 'Saohiring'
                    ],
                    [
                        '7307042008', '730704', 'Kanrung'
                    ],
                    [
                        '7307042009', '730704', 'Saotanre'
                    ],
                    [
                        '7307042010', '730704', 'Bonto'
                    ],
                    [
                        '7307042011', '730704', 'Gantarang'
                    ],
                    [
                        '7307051001', '730705', 'Biringere'
                    ],
                    [
                        '7307051002', '730705', 'Lamatti Rilau'
                    ],
                    [
                        '7307051003', '730705', 'Balangnipa'
                    ],
                    [
                        '7307051004', '730705', 'Lappa'
                    ],
                    [
                        '7307051005', '730705', 'Bongki'
                    ],
                    [
                        '7307051006', '730705', 'Alehanuae'
                    ],
                    [
                        '7307062001', '730706', 'Lamatti Riattang'
                    ],
                    [
                        '7307062002', '730706', 'Lamatti Riaja'
                    ],
                    [
                        '7307062003', '730706', 'Bulu Tellue'
                    ],
                    [
                        '7307062004', '730706', 'Duampanuae'
                    ],
                    [
                        '7307062005', '730706', 'Tompobulu'
                    ],
                    [
                        '7307062006', '730706', 'Lamatti Riawang'
                    ],
                    [
                        '7307062007', '730706', 'Lappacinrana'
                    ],
                    [
                        '7307071001', '730707', 'Pasir Putih'
                    ],
                    [
                        '7307072002', '730707', 'Batu Belerang'
                    ],
                    [
                        '7307072003', '730707', 'Biji Nangka'
                    ],
                    [
                        '7307072004', '730707', 'Barambang'
                    ],
                    [
                        '7307072005', '730707', 'Bonto Sinala'
                    ],
                    [
                        '7307072006', '730707', 'Kassi Buleng'
                    ],
                    [
                        '7307072007', '730707', 'Bonto Katute'
                    ],
                    [
                        '7307072008', '730707', 'Bonto Tengnga'
                    ],
                    [
                        '7307081001', '730708', 'Mannanti'
                    ],
                    [
                        '7307082002', '730708', 'Saotengah'
                    ],
                    [
                        '7307082003', '730708', 'Kalobba'
                    ],
                    [
                        '7307082004', '730708', 'Tellu Limpoe'
                    ],
                    [
                        '7307082005', '730708', 'Massaile'
                    ],
                    [
                        '7307082006', '730708', 'Lembang Lohe'
                    ],
                    [
                        '7307082007', '730708', 'Pattongko'
                    ],
                    [
                        '7307082008', '730708', 'Bua'
                    ],
                    [
                        '7307082009', '730708', 'Suka Maju'
                    ],
                    [
                        '7307082010', '730708', 'Erabaru'
                    ],
                    [
                        '7307082011', '730708', 'Samaturue'
                    ],
                    [
                        '7307092001', '730709', 'Pulau Harapan'
                    ],
                    [
                        '7307092002', '730709', 'Pulau Buhung Pitue'
                    ],
                    [
                        '7307092003', '730709', 'Pulau Padaelo'
                    ],
                    [
                        '7307092004', '730709', 'Pulau Persatuan'
                    ],
                    [
                        '7308011001', '730801', 'Kahu'
                    ],
                    [
                        '7308012002', '730801', 'Watang Cani'
                    ],
                    [
                        '7308012003', '730801', 'Pattuku'
                    ],
                    [
                        '7308012004', '730801', 'Bontojai'
                    ],
                    [
                        '7308012005', '730801', 'Bana'
                    ],
                    [
                        '7308012006', '730801', 'Pammusureng'
                    ],
                    [
                        '7308012007', '730801', 'Langi'
                    ],
                    [
                        '7308012008', '730801', 'Ere Cinnong'
                    ],
                    [
                        '7308012009', '730801', 'Bulu Sirua'
                    ],
                    [
                        '7308012010', '730801', 'Lamoncong'
                    ],
                    [
                        '7308012011', '730801', 'Mattirowalie'
                    ],
                    [
                        '7308021001', '730802', 'Palattae'
                    ],
                    [
                        '7308022002', '730802', 'Nusa'
                    ],
                    [
                        '7308022003', '730802', 'Pasaka'
                    ],
                    [
                        '7308022004', '730802', 'Labuaja'
                    ],
                    [
                        '7308022005', '730802', 'Cakkela'
                    ],
                    [
                        '7308022006', '730802', 'Balle'
                    ],
                    [
                        '7308022007', '730802', 'Matajang'
                    ],
                    [
                        '7308022008', '730802', 'Cenrana'
                    ],
                    [
                        '7308022009', '730802', 'Sanrego'
                    ],
                    [
                        '7308022010', '730802', 'Biru'
                    ],
                    [
                        '7308022011', '730802', 'Palakka'
                    ],
                    [
                        '7308022012', '730802', 'Tompong Patu'
                    ],
                    [
                        '7308022013', '730802', 'Hulo'
                    ],
                    [
                        '7308022014', '730802', 'Cammilo'
                    ],
                    [
                        '7308022015', '730802', 'Carima'
                    ],
                    [
                        '7308022016', '730802', 'Mattoanging'
                    ],
                    [
                        '7308022017', '730802', 'Arallae'
                    ],
                    [
                        '7308022018', '730802', 'Bonto Padang'
                    ],
                    [
                        '7308022019', '730802', 'Lalepo'
                    ],
                    [
                        '7308022020', '730802', 'Maggenrang'
                    ],
                    [
                        '7308031001', '730803', 'Awang Tangka'
                    ],
                    [
                        '7308032002', '730803', 'Raja'
                    ],
                    [
                        '7308032003', '730803', 'Abbumpungeng'
                    ],
                    [
                        '7308032004', '730803', 'Bulu Tanah'
                    ],
                    [
                        '7308032005', '730803', 'Gona'
                    ],
                    [
                        '7308032006', '730803', 'Buareng'
                    ],
                    [
                        '7308032007', '730803', 'Polewali'
                    ],
                    [
                        '7308032008', '730803', 'Padaelo'
                    ],
                    [
                        '7308032009', '730803', 'Ancu'
                    ],
                    [
                        '7308032010', '730803', 'Tarasu'
                    ],
                    [
                        '7308032011', '730803', 'Lemo'
                    ],
                    [
                        '7308032012', '730803', 'Kalero'
                    ],
                    [
                        '7308032013', '730803', 'Lappabosse'
                    ],
                    [
                        '7308032014', '730803', 'Waetuo'
                    ],
                    [
                        '7308032015', '730803', 'Pude'
                    ],
                    [
                        '7308032016', '730803', 'Angkue'
                    ],
                    [
                        '7308032017', '730803', 'Massangkae'
                    ],
                    [
                        '7308032018', '730803', 'Mallahae'
                    ],
                    [
                        '7308041001', '730804', 'Pancaitana'
                    ],
                    [
                        '7308042002', '730804', 'Malimongeng'
                    ],
                    [
                        '7308042003', '730804', 'Manera'
                    ],
                    [
                        '7308042004', '730804', 'Ulubalang'
                    ],
                    [
                        '7308042005', '730804', 'Gattareng'
                    ],
                    [
                        '7308042006', '730804', 'Bellu'
                    ],
                    [
                        '7308042007', '730804', 'Tebba'
                    ],
                    [
                        '7308042008', '730804', 'Mappatoba'
                    ],
                    [
                        '7308052001', '730805', 'Bulu Bulu'
                    ],
                    [
                        '7308052002', '730805', 'Gareccing'
                    ],
                    [
                        '7308052003', '730805', 'Biccoing'
                    ],
                    [
                        '7308052004', '730805', 'Ujunge'
                    ],
                    [
                        '7308052005', '730805', 'Libureng'
                    ],
                    [
                        '7308052006', '730805', 'Rappa'
                    ],
                    [
                        '7308052007', '730805', 'Bacu'
                    ],
                    [
                        '7308052008', '730805', 'Muara'
                    ],
                    [
                        '7308052009', '730805', 'Bone Pute'
                    ],
                    [
                        '7308052010', '730805', 'Padatuo'
                    ],
                    [
                        '7308052011', '730805', 'Samaenre'
                    ],
                    [
                        '7308061001', '730806', 'Tanah Batue'
                    ],
                    [
                        '7308061010', '730806', 'Ceppaga'
                    ],
                    [
                        '7308062002', '730806', 'Tompo Bulu'
                    ],
                    [
                        '7308062003', '730806', 'Tappale'
                    ],
                    [
                        '7308062004', '730806', 'Polewali'
                    ],
                    [
                        '7308062005', '730806', 'Pitumpidange'
                    ],
                    [
                        '7308062006', '730806', 'Bune'
                    ],
                    [
                        '7308062007', '730806', 'Swadaya'
                    ],
                    [
                        '7308062008', '730806', 'Binuang'
                    ],
                    [
                        '7308062009', '730806', 'Mallinrung'
                    ],
                    [
                        '7308062011', '730806', 'Baringeng'
                    ],
                    [
                        '7308062012', '730806', 'Mario'
                    ],
                    [
                        '7308062013', '730806', 'Wanuawaru'
                    ],
                    [
                        '7308062014', '730806', 'Mattirowalie'
                    ],
                    [
                        '7308062015', '730806', 'Poleonro'
                    ],
                    [
                        '7308062016', '730806', 'Matirro Bulu'
                    ],
                    [
                        '7308062017', '730806', 'Matirrodeceng'
                    ],
                    [
                        '7308062018', '730806', 'Suwa'
                    ],
                    [
                        '7308062019', '730806', 'Laburasseng'
                    ],
                    [
                        '7308062020', '730806', 'Ponre Ponre'
                    ],
                    [
                        '7308071001', '730807', 'Padaelo'
                    ],
                    [
                        '7308072002', '730807', 'Mattirowalie'
                    ],
                    [
                        '7308072003', '730807', 'Mario'
                    ],
                    [
                        '7308072004', '730807', 'Ujung Salangketo'
                    ],
                    [
                        '7308072005', '730807', 'Tellu Boccoe'
                    ],
                    [
                        '7308072006', '730807', 'Mattampa Walie'
                    ],
                    [
                        '7308072007', '730807', 'Ujung Tanah'
                    ],
                    [
                        '7308072008', '730807', 'Sumaling'
                    ],
                    [
                        '7308072009', '730807', 'Tellongeng'
                    ],
                    [
                        '7308072010', '730807', 'Data'
                    ],
                    [
                        '7308072011', '730807', 'Batu Gading'
                    ],
                    [
                        '7308072012', '730807', 'Cege'
                    ],
                    [
                        '7308072013', '730807', 'Kadai'
                    ],
                    [
                        '7308072014', '730807', 'Lakukang'
                    ],
                    [
                        '7308072015', '730807', 'Pattiro'
                    ],
                    [
                        '7308072016', '730807', 'Lapasa'
                    ],
                    [
                        '7308072017', '730807', 'Karella'
                    ],
                    [
                        '7308072018', '730807', 'Lappa Upang'
                    ],
                    [
                        '7308081001', '730808', 'Maroanging'
                    ],
                    [
                        '7308082002', '730808', 'Pattiro Bajo'
                    ],
                    [
                        '7308082003', '730808', 'Massenreng Pulu'
                    ],
                    [
                        '7308082004', '730808', 'Tunreng Tellue'
                    ],
                    [
                        '7308082005', '730808', 'Polewali'
                    ],
                    [
                        '7308082006', '730808', 'Tadang Palie'
                    ],
                    [
                        '7308082007', '730808', 'Cinnong'
                    ],
                    [
                        '7308082008', '730808', 'Mallusetasi'
                    ],
                    [
                        '7308082009', '730808', 'Pakkasalo'
                    ],
                    [
                        '7308082010', '730808', 'Pattiro Sompe'
                    ],
                    [
                        '7308082011', '730808', 'Ajang Pulu'
                    ],
                    [
                        '7308082012', '730808', 'Sumpang Minangae'
                    ],
                    [
                        '7308082013', '730808', 'Mabbiring'
                    ],
                    [
                        '7308082014', '730808', 'Pasaka'
                    ],
                    [
                        '7308082015', '730808', 'Kalibong'
                    ],
                    [
                        '7308082016', '730808', 'Pattiro Riolo'
                    ],
                    [
                        '7308082017', '730808', 'Letta Tanah'
                    ],
                    [
                        '7308082018', '730808', 'Manajeng'
                    ],
                    [
                        '7308082019', '730808', 'Bulie'
                    ],
                    [
                        '7308082020', '730808', 'Balieng Toa'
                    ],
                    [
                        '7308091006', '730809', 'Apala'
                    ],
                    [
                        '7308092001', '730809', 'Bacu'
                    ],
                    [
                        '7308092002', '730809', 'Lampoko'
                    ],
                    [
                        '7308092003', '730809', 'Congko'
                    ],
                    [
                        '7308092004', '730809', 'Wollangi'
                    ],
                    [
                        '7308092005', '730809', 'Parippung'
                    ],
                    [
                        '7308092007', '730809', 'Barebbo'
                    ],
                    [
                        '7308092008', '730809', 'Kampuno'
                    ],
                    [
                        '7308092009', '730809', 'Kading'
                    ],
                    [
                        '7308092010', '730809', 'Kajaolaliddong'
                    ],
                    [
                        '7308092011', '730809', 'Samaelo'
                    ],
                    [
                        '7308092012', '730809', 'Corawali'
                    ],
                    [
                        '7308092013', '730809', 'Talungeng'
                    ],
                    [
                        '7308092014', '730809', 'Watu'
                    ],
                    [
                        '7308092015', '730809', 'Cingkang'
                    ],
                    [
                        '7308092016', '730809', 'Cinnong'
                    ],
                    [
                        '7308092017', '730809', 'Cempaniga'
                    ],
                    [
                        '7308092018', '730809', 'Sugiale'
                    ],
                    [
                        '7308101001', '730810', 'Tanete'
                    ],
                    [
                        '7308102002', '730810', 'Arasoe'
                    ],
                    [
                        '7308102003', '730810', 'Tanete Harapan'
                    ],
                    [
                        '7308102004', '730810', 'Lompu'
                    ],
                    [
                        '7308102005', '730810', 'Walenreng'
                    ],
                    [
                        '7308102006', '730810', 'Ajang Pulu'
                    ],
                    [
                        '7308102007', '730810', 'Padang Loang'
                    ],
                    [
                        '7308102008', '730810', 'Abbumpungeng'
                    ],
                    [
                        '7308102009', '730810', 'Kawerang'
                    ],
                    [
                        '7308102010', '730810', 'Awo'
                    ],
                    [
                        '7308102011', '730810', 'Kanco'
                    ],
                    [
                        '7308102012', '730810', 'Cinennung'
                    ],
                    [
                        '7308112001', '730811', 'Mappesangka'
                    ],
                    [
                        '7308112002', '730811', 'Salebba'
                    ],
                    [
                        '7308112003', '730811', 'Mattampae'
                    ],
                    [
                        '7308112004', '730811', 'Pattimpa'
                    ],
                    [
                        '7308112005', '730811', 'Tellu Boccoe'
                    ],
                    [
                        '7308112006', '730811', 'Turu Adae'
                    ],
                    [
                        '7308112007', '730811', 'Salampe'
                    ],
                    [
                        '7308112008', '730811', 'Poleonro'
                    ],
                    [
                        '7308112009', '730811', 'Bolli'
                    ],
                    [
                        '7308122001', '730812', 'Mattampawalie'
                    ],
                    [
                        '7308122002', '730812', 'Lili Riattang'
                    ],
                    [
                        '7308122003', '730812', 'Sengeng Palie'
                    ],
                    [
                        '7308122004', '730812', 'Tenri Pakkua'
                    ],
                    [
                        '7308122005', '730812', 'Patangkai'
                    ],
                    [
                        '7308122006', '730812', 'Ujung Lamuru'
                    ],
                    [
                        '7308122007', '730812', 'Pattuku Limpoe'
                    ],
                    [
                        '7308122008', '730812', 'Waekeccee'
                    ],
                    [
                        '7308122009', '730812', 'Tonronge'
                    ],
                    [
                        '7308131001', '730813', 'Lalebata'
                    ],
                    [
                        '7308132002', '730813', 'Mattampa Walie'
                    ],
                    [
                        '7308132003', '730813', 'Poleonro'
                    ],
                    [
                        '7308132004', '730813', 'Sengeng Palie'
                    ],
                    [
                        '7308132005', '730813', 'Mattampa Bulu'
                    ],
                    [
                        '7308132006', '730813', 'Turu Cinnae'
                    ],
                    [
                        '7308132007', '730813', 'Seberang'
                    ],
                    [
                        '7308132008', '730813', 'Massenreng pulu'
                    ],
                    [
                        '7308132009', '730813', 'Mamminasae'
                    ],
                    [
                        '7308132010', '730813', 'Padaelo'
                    ],
                    [
                        '7308132011', '730813', 'Barugae'
                    ],
                    [
                        '7308132012', '730813', 'Barakkae'
                    ],
                    [
                        '7308141001', '730814', 'Cinnong'
                    ],
                    [
                        '7308142002', '730814', 'Lilina Ajangale'
                    ],
                    [
                        '7308142003', '730814', 'Cani Sirenreng'
                    ],
                    [
                        '7308142004', '730814', 'Ulaweng Cinnong'
                    ],
                    [
                        '7308142005', '730814', 'Pallawarukka'
                    ],
                    [
                        '7308142006', '730814', 'Jompie'
                    ],
                    [
                        '7308142007', '730814', 'Sappewalie'
                    ],
                    [
                        '7308142008', '730814', 'Lamakkaraseng'
                    ],
                    [
                        '7308142009', '730814', 'Mula Menree'
                    ],
                    [
                        '7308142010', '730814', 'Tea Musu'
                    ],
                    [
                        '7308142011', '730814', 'Tea Malala'
                    ],
                    [
                        '7308142012', '730814', 'Galung'
                    ],
                    [
                        '7308142013', '730814', 'Tadang Palie'
                    ],
                    [
                        '7308142014', '730814', 'Timusu'
                    ],
                    [
                        '7308142015', '730814', 'Manurunge'
                    ],
                    [
                        '7308152001', '730815', 'Cinenung'
                    ],
                    [
                        '7308152002', '730815', 'Siame'
                    ],
                    [
                        '7308152003', '730815', 'Pasempe'
                    ],
                    [
                        '7308152004', '730815', 'Ureng'
                    ],
                    [
                        '7308152005', '730815', 'Usa'
                    ],
                    [
                        '7308152006', '730815', 'Mico'
                    ],
                    [
                        '7308152007', '730815', 'Bainang'
                    ],
                    [
                        '7308152008', '730815', 'Passippo'
                    ],
                    [
                        '7308152009', '730815', 'Tanah Tengnga'
                    ],
                    [
                        '7308152010', '730815', 'Tirong'
                    ],
                    [
                        '7308152011', '730815', 'Mattanete Bua'
                    ],
                    [
                        '7308152012', '730815', 'Maduri'
                    ],
                    [
                        '7308152013', '730815', 'Melle'
                    ],
                    [
                        '7308152014', '730815', 'Lemoape'
                    ],
                    [
                        '7308152015', '730815', 'Panyili'
                    ],
                    [
                        '7308161001', '730816', 'Maccope'
                    ],
                    [
                        '7308162002', '730816', 'Carebbu'
                    ],
                    [
                        '7308162003', '730816', 'Cumpiga'
                    ],
                    [
                        '7308162004', '730816', 'Paccing'
                    ],
                    [
                        '7308162005', '730816', 'Lattekko'
                    ],
                    [
                        '7308162006', '730816', 'Matuju'
                    ],
                    [
                        '7308162007', '730816', 'Unra'
                    ],
                    [
                        '7308162008', '730816', 'Kading'
                    ],
                    [
                        '7308162009', '730816', 'Mallari'
                    ],
                    [
                        '7308162010', '730816', 'Kajuara'
                    ],
                    [
                        '7308162011', '730816', 'Jaling'
                    ],
                    [
                        '7308162012', '730816', 'Bulumparee'
                    ],
                    [
                        '7308162013', '730816', 'Abbanuang'
                    ],
                    [
                        '7308162014', '730816', 'Lappoase'
                    ],
                    [
                        '7308162015', '730816', 'Awolagading'
                    ],
                    [
                        '7308162016', '730816', 'Carigading'
                    ],
                    [
                        '7308162017', '730816', 'Cakke Bone'
                    ],
                    [
                        '7308162018', '730816', 'Mappalo Ulaweng'
                    ],
                    [
                        '7308171001', '730817', 'Otting'
                    ],
                    [
                        '7308171002', '730817', 'Tokaseng'
                    ],
                    [
                        '7308172003', '730817', 'Palongki'
                    ],
                    [
                        '7308172004', '730817', 'Tajong'
                    ],
                    [
                        '7308172005', '730817', 'Ulo'
                    ],
                    [
                        '7308172006', '730817', 'Lanca'
                    ],
                    [
                        '7308172007', '730817', 'Itterung'
                    ],
                    [
                        '7308172008', '730817', 'Mattoanging'
                    ],
                    [
                        '7308172009', '730817', 'Lamuru'
                    ],
                    [
                        '7308172010', '730817', 'Waji'
                    ],
                    [
                        '7308172011', '730817', 'Ajjalireng'
                    ],
                    [
                        '7308172012', '730817', 'Sijelling'
                    ],
                    [
                        '7308172013', '730817', 'Lea'
                    ],
                    [
                        '7308172014', '730817', 'Padaidi'
                    ],
                    [
                        '7308172015', '730817', 'Pongka'
                    ],
                    [
                        '7308172016', '730817', 'Lappae'
                    ],
                    [
                        '7308172017', '730817', 'Patangnga'
                    ],
                    [
                        '7308181001', '730818', 'Pompanua '
                    ],
                    [
                        '7308181002', '730818', 'Pompanua Riattang'
                    ],
                    [
                        '7308182003', '730818', 'Welado'
                    ],
                    [
                        '7308182004', '730818', 'Pinceng Pute'
                    ],
                    [
                        '7308182005', '730818', 'Opo'
                    ],
                    [
                        '7308182006', '730818', 'Labissa'
                    ],
                    [
                        '7308182007', '730818', 'Timurung'
                    ],
                    [
                        '7308182008', '730818', 'Leppangeng'
                    ],
                    [
                        '7308182009', '730818', 'Allamungeng Patue'
                    ],
                    [
                        '7308182010', '730818', 'Amessangeng'
                    ],
                    [
                        '7308182011', '730818', 'Lebbae'
                    ],
                    [
                        '7308182012', '730818', 'Manciri'
                    ],
                    [
                        '7308182013', '730818', 'Telle'
                    ],
                    [
                        '7308182014', '730818', 'Pacciro'
                    ],
                    [
                        '7308191001', '730819', 'Unyi'
                    ],
                    [
                        '7308192002', '730819', 'Mario'
                    ],
                    [
                        '7308192003', '730819', 'Laccori'
                    ],
                    [
                        '7308192004', '730819', 'Pattiro'
                    ],
                    [
                        '7308192005', '730819', 'Cabbeng'
                    ],
                    [
                        '7308192006', '730819', 'Panyili'
                    ],
                    [
                        '7308192007', '730819', 'Sanrangeng'
                    ],
                    [
                        '7308192008', '730819', 'Sailong'
                    ],
                    [
                        '7308192009', '730819', 'Melle'
                    ],
                    [
                        '7308192010', '730819', 'Pakkasalo'
                    ],
                    [
                        '7308192011', '730819', 'Tawaroe'
                    ],
                    [
                        '7308192012', '730819', 'Uloe'
                    ],
                    [
                        '7308192013', '730819', 'Ujung'
                    ],
                    [
                        '7308192014', '730819', 'Padacenga'
                    ],
                    [
                        '7308192015', '730819', 'Lallatang'
                    ],
                    [
                        '7308192016', '730819', 'Kampoti'
                    ],
                    [
                        '7308192017', '730819', 'Praja Maju'
                    ],
                    [
                        '7308192018', '730819', 'Tocina'
                    ],
                    [
                        '7308192019', '730819', 'Tempe'
                    ],
                    [
                        '7308192020', '730819', 'Solo'
                    ],
                    [
                        '7308192021', '730819', 'Watang Padacenga'
                    ],
                    [
                        '7308192022', '730819', 'Matajang'
                    ],
                    [
                        '7308201001', '730820', 'Cenrana '
                    ],
                    [
                        '7308202002', '730820', 'Pacubbe'
                    ],
                    [
                        '7308202003', '730820', 'Panyiwi'
                    ],
                    [
                        '7308202004', '730820', 'Latonro'
                    ],
                    [
                        '7308202005', '730820', 'Watu'
                    ],
                    [
                        '7308202006', '730820', 'Nagauleng'
                    ],
                    [
                        '7308202007', '730820', 'Cakkeware'
                    ],
                    [
                        '7308202008', '730820', 'Pallime'
                    ],
                    [
                        '7308202009', '730820', 'Laoni'
                    ],
                    [
                        '7308202010', '730820', 'Labotto'
                    ],
                    [
                        '7308202011', '730820', 'Awang Cenrana'
                    ],
                    [
                        '7308202012', '730820', 'Labongnge'
                    ],
                    [
                        '7308202013', '730820', 'Ajalase'
                    ],
                    [
                        '7308202014', '730820', 'Pusungnge'
                    ],
                    [
                        '7308202015', '730820', 'Pallae'
                    ],
                    [
                        '7308202016', '730820', 'Watang Ta'
                    ],
                    [
                        '7308211001', '730821', 'Biru'
                    ],
                    [
                        '7308211002', '730821', 'Ta'
                    ],
                    [
                        '7308211003', '730821', 'Watampone'
                    ],
                    [
                        '7308211004', '730821', 'Bukaka'
                    ],
                    [
                        '7308211005', '730821', 'Pappolo'
                    ],
                    [
                        '7308211006', '730821', 'Manurunge'
                    ],
                    [
                        '7308211007', '730821', 'Walanae'
                    ],
                    [
                        '7308211008', '730821', 'Masumpu'
                    ],
                    [
                        '7308221001', '730822', 'Macege'
                    ],
                    [
                        '7308221002', '730822', 'Matirro Walie'
                    ],
                    [
                        '7308221003', '730822', 'Macanang'
                    ],
                    [
                        '7308221004', '730822', 'Majang'
                    ],
                    [
                        '7308221005', '730822', 'Bulu Tempe'
                    ],
                    [
                        '7308221006', '730822', 'Jeppee'
                    ],
                    [
                        '7308221007', '730822', 'Polewali'
                    ],
                    [
                        '7308221008', '730822', 'Watang Palakka'
                    ],
                    [
                        '7308231001', '730823', 'Bajoe'
                    ],
                    [
                        '7308231002', '730823', 'Cellu'
                    ],
                    [
                        '7308231003', '730823', 'Panyula'
                    ],
                    [
                        '7308231004', '730823', 'Waetuo'
                    ],
                    [
                        '7308231005', '730823', 'Palette'
                    ],
                    [
                        '7308231006', '730823', 'Tipojong'
                    ],
                    [
                        '7308231007', '730823', 'Toro'
                    ],
                    [
                        '7308231008', '730823', 'Lonrae'
                    ],
                    [
                        '7308241015', '730824', 'Mampotu'
                    ],
                    [
                        '7308242001', '730824', 'Liliriattang'
                    ],
                    [
                        '7308242002', '730824', 'Mattaropurae'
                    ],
                    [
                        '7308242003', '730824', 'Ulaweng Riaja'
                    ],
                    [
                        '7308242004', '730824', 'Waempubbu'
                    ],
                    [
                        '7308242005', '730824', 'Waemputtange'
                    ],
                    [
                        '7308242006', '730824', 'Amali Riattang'
                    ],
                    [
                        '7308242007', '730824', 'Tassipi'
                    ],
                    [
                        '7308242008', '730824', 'Wellulang'
                    ],
                    [
                        '7308242009', '730824', 'Benteng Tellue'
                    ],
                    [
                        '7308242010', '730824', 'Tacipong'
                    ],
                    [
                        '7308242011', '730824', 'Laponrong'
                    ],
                    [
                        '7308242012', '730824', 'Ajanglaleng'
                    ],
                    [
                        '7308242013', '730824', 'Tocinnong'
                    ],
                    [
                        '7308242014', '730824', 'Bila'
                    ],
                    [
                        '7308252001', '730825', 'Tellang Kere'
                    ],
                    [
                        '7308252002', '730825', 'Lagori'
                    ],
                    [
                        '7308252003', '730825', 'Gaya Baru'
                    ],
                    [
                        '7308252004', '730825', 'Tapong'
                    ],
                    [
                        '7308252005', '730825', 'Sadar'
                    ],
                    [
                        '7308252006', '730825', 'Tondong'
                    ],
                    [
                        '7308252007', '730825', 'Samaenre'
                    ],
                    [
                        '7308252008', '730825', 'Bonto Masunggu'
                    ],
                    [
                        '7308252009', '730825', 'Pallawa'
                    ],
                    [
                        '7308252010', '730825', 'Polewali'
                    ],
                    [
                        '7308252011', '730825', 'Batu Putih'
                    ],
                    [
                        '7308262001', '730826', 'Samaenre'
                    ],
                    [
                        '7308262002', '730826', 'Tungke'
                    ],
                    [
                        '7308262003', '730826', 'Selli'
                    ],
                    [
                        '7308262004', '730826', 'Bengo'
                    ],
                    [
                        '7308262005', '730826', 'Mattaropuli'
                    ],
                    [
                        '7308262006', '730826', 'Lili Riawang'
                    ],
                    [
                        '7308262007', '730826', 'Walimpong'
                    ],
                    [
                        '7308262008', '730826', 'Bulu Allaporenge'
                    ],
                    [
                        '7308262009', '730826', 'Mattirowalie'
                    ],
                    [
                        '7308272001', '730827', 'Patimpeng'
                    ],
                    [
                        '7308272002', '730827', 'Latellang'
                    ],
                    [
                        '7308272003', '730827', 'Maddenreng Pulu'
                    ],
                    [
                        '7308272004', '730827', 'Masago'
                    ],
                    [
                        '7308272005', '730827', 'Batu Lappa'
                    ],
                    [
                        '7308272006', '730827', 'Paccing'
                    ],
                    [
                        '7308272007', '730827', 'Massila'
                    ],
                    [
                        '7308272008', '730827', 'Talabangi'
                    ],
                    [
                        '7308272009', '730827', 'Pationgi'
                    ],
                    [
                        '7308272010', '730827', 'Bulu Ulaweng'
                    ],
                    [
                        '7309011001', '730901', 'Hasanuddin'
                    ],
                    [
                        '7309011002', '730901', 'Bontoa'
                    ],
                    [
                        '7309012003', '730901', 'Tenrigangkae'
                    ],
                    [
                        '7309012004', '730901', 'Pattontongang'
                    ],
                    [
                        '7309012005', '730901', 'Bonto Matene'
                    ],
                    [
                        '7309012006', '730901', 'Baji Mangngai'
                    ],
                    [
                        '7309021001', '730902', 'Cempaniga'
                    ],
                    [
                        '7309021002', '730902', 'Mario Pulana'
                    ],
                    [
                        '7309022003', '730902', 'Timpuseng'
                    ],
                    [
                        '7309022004', '730902', 'Cenrana'
                    ],
                    [
                        '7309022005', '730902', 'Sawaru'
                    ],
                    [
                        '7309022006', '730902', 'Patanyamang'
                    ],
                    [
                        '7309022007', '730902', 'Pattiro Deceng'
                    ],
                    [
                        '7309022008', '730902', 'Benteng'
                    ],
                    [
                        '7309031001', '730903', 'Kalabbirang'
                    ],
                    [
                        '7309031002', '730903', 'Leang-Leang '
                    ],
                    [
                        '7309032003', '730903', 'Alatengae'
                    ],
                    [
                        '7309032004', '730903', 'Minasa Baji'
                    ],
                    [
                        '7309032005', '730903', 'Tukamasea'
                    ],
                    [
                        '7309032006', '730903', 'Mattoanging'
                    ],
                    [
                        '7309032007', '730903', 'Mangeloreng'
                    ],
                    [
                        '7309032008', '730903', 'Baruga'
                    ],
                    [
                        '7309041001', '730904', 'Baji Pamai '
                    ],
                    [
                        '7309041002', '730904', 'Pallantikang'
                    ],
                    [
                        '7309041003', '730904', 'Baju Bodoa'
                    ],
                    [
                        '7309042004', '730904', 'Borikamase'
                    ],
                    [
                        '7309042005', '730904', 'Mattirotasi'
                    ],
                    [
                        '7309042006', '730904', 'Majannang'
                    ],
                    [
                        '7309042007', '730904', 'Borimasunggu'
                    ],
                    [
                        '7309051001', '730905', 'Bontoa'
                    ],
                    [
                        '7309052002', '730905', 'Pajjukukang'
                    ],
                    [
                        '7309052003', '730905', 'Tunikamaseang'
                    ],
                    [
                        '7309052004', '730905', 'Tupabiring'
                    ],
                    [
                        '7309052005', '730905', 'Botolempangang'
                    ],
                    [
                        '7309052006', '730905', 'Salenrang'
                    ],
                    [
                        '7309052007', '730905', 'Minasa Upa'
                    ],
                    [
                        '7309052008', '730905', 'Ampekale'
                    ],
                    [
                        '7309052009', '730905', 'Bonto Bahari'
                    ],
                    [
                        '7309061001', '730906', 'Sabila'
                    ],
                    [
                        '7309062002', '730906', 'Padaelo'
                    ],
                    [
                        '7309062003', '730906', 'Batu Putih'
                    ],
                    [
                        '7309062004', '730906', 'Wanuawaru'
                    ],
                    [
                        '7309062005', '730906', 'Tellupanuae'
                    ],
                    [
                        '7309062006', '730906', 'Samaenre'
                    ],
                    [
                        '7309062007', '730906', 'Bentenge'
                    ],
                    [
                        '7309062008', '730906', 'Matampapole'
                    ],
                    [
                        '7309062009', '730906', 'Uludaya'
                    ],
                    [
                        '7309062010', '730906', 'Gattareng Matinggi'
                    ],
                    [
                        '7309062011', '730906', 'Barugae'
                    ],
                    [
                        '7309071001', '730907', 'Borong'
                    ],
                    [
                        '7309072002', '730907', 'Allaere'
                    ],
                    [
                        '7309072003', '730907', 'Toddopulia'
                    ],
                    [
                        '7309072004', '730907', 'Kurusumange'
                    ],
                    [
                        '7309072005', '730907', 'Lekopancing'
                    ],
                    [
                        '7309072006', '730907', 'Damai'
                    ],
                    [
                        '7309072007', '730907', 'Sudirman'
                    ],
                    [
                        '7309072008', '730907', 'Purnakarya'
                    ],
                    [
                        '7309082001', '730908', 'Temmapaduae'
                    ],
                    [
                        '7309082002', '730908', 'Nisombalia'
                    ],
                    [
                        '7309082003', '730908', 'Tellumpoccoe'
                    ],
                    [
                        '7309082004', '730908', 'Marumpa'
                    ],
                    [
                        '7309082005', '730908', 'Bonto Matene'
                    ],
                    [
                        '7309082006', '730908', 'Abulosibatang'
                    ],
                    [
                        '7309082007', '730908', 'Pabentengang'
                    ],
                    [
                        '7309092001', '730909', 'Jenetaesa'
                    ],
                    [
                        '7309092002', '730909', 'Bonto Tallasa'
                    ],
                    [
                        '7309092003', '730909', 'Sambueja'
                    ],
                    [
                        '7309092004', '730909', 'Tanete'
                    ],
                    [
                        '7309092005', '730909', 'Samangki'
                    ],
                    [
                        '7309092006', '730909', 'Simbang'
                    ],
                    [
                        '7309102001', '730910', 'Laiya'
                    ],
                    [
                        '7309102002', '730910', 'Labuaja'
                    ],
                    [
                        '7309102003', '730910', 'Limapoccoe'
                    ],
                    [
                        '7309102004', '730910', 'Lebbotengae'
                    ],
                    [
                        '7309102005', '730910', 'Rompegading'
                    ],
                    [
                        '7309102006', '730910', 'Baji Pamai'
                    ],
                    [
                        '7309102007', '730910', 'Cenrana Baru'
                    ],
                    [
                        '7309112001', '730911', 'Tompobulu'
                    ],
                    [
                        '7309112002', '730911', 'Benteng Gajah'
                    ],
                    [
                        '7309112003', '730911', 'Bonto Manai'
                    ],
                    [
                        '7309112004', '730911', 'Bonto Somba'
                    ],
                    [
                        '7309112005', '730911', 'Toddolimae'
                    ],
                    [
                        '7309112006', '730911', 'Pucak'
                    ],
                    [
                        '7309112007', '730911', 'Bonto Matinggi'
                    ],
                    [
                        '7309112008', '730911', 'Bonto Manurung'
                    ],
                    [
                        '7309121001', '730912', 'Allepolea'
                    ],
                    [
                        '7309121002', '730912', 'Maccini Baji'
                    ],
                    [
                        '7309121003', '730912', 'Soreang'
                    ],
                    [
                        '7309121004', '730912', 'Mattirodeceng'
                    ],
                    [
                        '7309122005', '730912', 'Marannu'
                    ],
                    [
                        '7309122006', '730912', 'Bonto Marrannu'
                    ],
                    [
                        '7309132001', '730913', 'Moncongloe'
                    ],
                    [
                        '7309132002', '730913', 'Moncongloe Bulu'
                    ],
                    [
                        '7309132003', '730913', 'Moncongloe Lappara'
                    ],
                    [
                        '7309132004', '730913', 'Bonto Bunga'
                    ],
                    [
                        '7309132005', '730913', 'Bonto Marannu'
                    ],
                    [
                        '7309141001', '730914', 'Pettuadae'
                    ],
                    [
                        '7309141002', '730914', 'Boribellayya '
                    ],
                    [
                        '7309141003', '730914', 'Alliritengae '
                    ],
                    [
                        '7309141004', '730914', 'Turikale'
                    ],
                    [
                        '7309141005', '730914', 'Taroada'
                    ],
                    [
                        '7309141006', '730914', 'Raya'
                    ],
                    [
                        '7309141007', '730914', 'Adatongeng'
                    ],
                    [
                        '7310011001', '731001', 'Sapuka'
                    ],
                    [
                        '7310012002', '731001', 'Sabaru'
                    ],
                    [
                        '7310012003', '731001', 'Balo Baloang'
                    ],
                    [
                        '7310012004', '731001', 'Sabalana'
                    ],
                    [
                        '7310012005', '731001', 'Tampaang'
                    ],
                    [
                        '7310012006', '731001', 'Sailus'
                    ],
                    [
                        '7310012007', '731001', 'Satanger'
                    ],
                    [
                        '7310012008', '731001', 'Kapoposang Bali'
                    ],
                    [
                        '7310012009', '731001', 'Poleonro'
                    ],
                    [
                        '7310021001', '731002', 'Kalu-Kalukuang '
                    ],
                    [
                        '7310022002', '731002', 'Pammas'
                    ],
                    [
                        '7310022003', '731002', 'Sabaru'
                    ],
                    [
                        '7310022004', '731002', 'Kanyurang'
                    ],
                    [
                        '7310022005', '731002', 'Doang Doangan Lompo'
                    ],
                    [
                        '7310022006', '731002', 'Marasende'
                    ],
                    [
                        '7310022007', '731002', 'Dewakang'
                    ],
                    [
                        '7310031001', '731003', 'Mattiro Sompe'
                    ],
                    [
                        '7310031016', '731003', 'Mattiro Bintang'
                    ],
                    [
                        '7310032002', '731003', 'Mattiro Deceng'
                    ],
                    [
                        '7310032003', '731003', 'Mattiro Langi'
                    ],
                    [
                        '7310032009', '731003', 'Mattiro Matae'
                    ],
                    [
                        '7310032010', '731003', 'Mattiro Ujung'
                    ],
                    [
                        '7310032011', '731003', 'Mattiro Dolangeng'
                    ],
                    [
                        '7310032013', '731003', 'Mattiro Bone'
                    ],
                    [
                        '7310032015', '731003', 'Mattaro Adae'
                    ],
                    [
                        '7310041001', '731004', 'Jagong'
                    ],
                    [
                        '7310041002', '731004', 'Mappasaile '
                    ],
                    [
                        '7310041003', '731004', 'Pabundukang'
                    ],
                    [
                        '7310041004', '731004', 'Anrong Appaka'
                    ],
                    [
                        '7310041005', '731004', 'Sibatua'
                    ],
                    [
                        '7310041006', '731004', 'Padoang Doangan'
                    ],
                    [
                        '7310041007', '731004', 'Tumampua'
                    ],
                    [
                        '7310041008', '731004', 'Tekolabbua'
                    ],
                    [
                        '7310041009', '731004', 'Bonto Perak'
                    ],
                    [
                        '7310051001', '731005', 'Balleangin '
                    ],
                    [
                        '7310051002', '731005', 'Balocci Baru'
                    ],
                    [
                        '7310051003', '731005', 'Kassi '
                    ],
                    [
                        '7310051004', '731005', 'Tonasa '
                    ],
                    [
                        '7310052005', '731005', 'Tompo Bulu'
                    ],
                    [
                        '7310061001', '731006', 'Bori Appaka '
                    ],
                    [
                        '7310061002', '731006', 'Samalewa'
                    ],
                    [
                        '7310061003', '731006', 'Sapanang'
                    ],
                    [
                        '7310062004', '731006', 'Bowong Cindea'
                    ],
                    [
                        '7310062005', '731006', 'Tabo-Tabo'
                    ],
                    [
                        '7310062006', '731006', 'Mangilu'
                    ],
                    [
                        '7310062007', '731006', 'Bulu Cindea'
                    ],
                    [
                        '7310062008', '731006', 'Biring Ere'
                    ],
                    [
                        '7310071001', '731007', 'Labakkang'
                    ],
                    [
                        '7310071002', '731007', 'Mangallekana'
                    ],
                    [
                        '7310071003', '731007', 'Pundata Baji'
                    ],
                    [
                        '7310071004', '731007', 'Borimasunggu'
                    ],
                    [
                        '7310072005', '731007', 'Patallassang'
                    ],
                    [
                        '7310072006', '731007', 'Manakku'
                    ],
                    [
                        '7310072007', '731007', 'Gentung'
                    ],
                    [
                        '7310072008', '731007', 'Batara'
                    ],
                    [
                        '7310072009', '731007', 'Taraweang'
                    ],
                    [
                        '7310072010', '731007', 'Kanaungan'
                    ],
                    [
                        '7310072011', '731007', 'Bonto Manai'
                    ],
                    [
                        '7310072012', '731007', 'Kassiloe'
                    ],
                    [
                        '7310072013', '731007', 'Bara Batu'
                    ],
                    [
                        '7310081001', '731008', 'Bonto-Bonto '
                    ],
                    [
                        '7310081002', '731008', 'Talaka'
                    ],
                    [
                        '7310081003', '731008', 'Marang '
                    ],
                    [
                        '7310081004', '731008', 'Attang Salo'
                    ],
                    [
                        '7310082005', '731008', 'Padang Lampe'
                    ],
                    [
                        '7310082006', '731008', 'Tamangapa'
                    ],
                    [
                        '7310082007', '731008', 'Pitusunggu'
                    ],
                    [
                        '7310082008', '731008', 'Pitue'
                    ],
                    [
                        '7310082009', '731008', 'Punranga'
                    ],
                    [
                        '7310082010', '731008', 'Alesipitto'
                    ],
                    [
                        '7310091001', '731009', 'Bonto Matene'
                    ],
                    [
                        '7310091002', '731009', 'Segeri'
                    ],
                    [
                        '7310091003', '731009', 'Bone'
                    ],
                    [
                        '7310091004', '731009', 'Bawasalo '
                    ],
                    [
                        '7310092005', '731009', 'Baring'
                    ],
                    [
                        '7310092006', '731009', 'Parenreng'
                    ],
                    [
                        '7310101001', '731010', 'Minasa Tene '
                    ],
                    [
                        '7310101002', '731010', 'Kalabbirang'
                    ],
                    [
                        '7310101003', '731010', 'Biraeng'
                    ],
                    [
                        '7310101004', '731010', 'Bonto Kio'
                    ],
                    [
                        '7310101005', '731010', 'Bontoa'
                    ],
                    [
                        '7310101006', '731010', 'Bonto Langkasa'
                    ],
                    [
                        '7310102007', '731010', 'Kabba'
                    ],
                    [
                        '7310102008', '731010', 'Panaikang'
                    ],
                    [
                        '7310112001', '731011', 'Benteng'
                    ],
                    [
                        '7310112002', '731011', 'Manggalung'
                    ],
                    [
                        '7310112003', '731011', 'Tamarupa'
                    ],
                    [
                        '7310112004', '731011', 'Mandalle'
                    ],
                    [
                        '7310112005', '731011', 'Boddie'
                    ],
                    [
                        '7310112006', '731011', 'Coppo Tompong'
                    ],
                    [
                        '7310122001', '731012', 'Bantimurung'
                    ],
                    [
                        '7310122002', '731012', 'Tondongkura'
                    ],
                    [
                        '7310122003', '731012', 'Lanne'
                    ],
                    [
                        '7310122004', '731012', 'Bulu Tellue'
                    ],
                    [
                        '7310122005', '731012', 'Malaka'
                    ],
                    [
                        '7310122006', '731012', 'Bonto Birao'
                    ],
                    [
                        '7310132001', '731013', 'Mattiro Kanja'
                    ],
                    [
                        '7310132002', '731013', 'Mattiro Baji'
                    ],
                    [
                        '7310132003', '731013', 'Mattiro Bulu'
                    ],
                    [
                        '7310132004', '731013', 'Mattiro Bombang'
                    ],
                    [
                        '7310132005', '731013', 'Mattiro Labangeng'
                    ],
                    [
                        '7310132006', '731013', 'Mattiro Uleng'
                    ],
                    [
                        '7310132007', '731013', 'Mattiro Walie'
                    ],
                    [
                        '7311011001', '731101', 'Lompo Riaja'
                    ],
                    [
                        '7311012002', '731101', 'Harapan'
                    ],
                    [
                        '7311012003', '731101', 'Lompo Tengah'
                    ],
                    [
                        '7311012004', '731101', 'Kading'
                    ],
                    [
                        '7311012005', '731101', 'Libureng'
                    ],
                    [
                        '7311012006', '731101', 'Mattirowalie'
                    ],
                    [
                        '7311012007', '731101', 'Lempang'
                    ],
                    [
                        '7311021001', '731102', 'Lalolang'
                    ],
                    [
                        '7311021002', '731102', 'Tanete'
                    ],
                    [
                        '7311022003', '731102', 'Pancana'
                    ],
                    [
                        '7311022004', '731102', 'Lalabata'
                    ],
                    [
                        '7311022005', '731102', 'Corawali'
                    ],
                    [
                        '7311022006', '731102', 'Pao Pao'
                    ],
                    [
                        '7311022007', '731102', 'Tellumpanua'
                    ],
                    [
                        '7311022008', '731102', 'Lipukasi'
                    ],
                    [
                        '7311022009', '731102', 'Garessi'
                    ],
                    [
                        '7311022010', '731102', 'Lasitae'
                    ],
                    [
                        '7311031001', '731103', 'Coppo'
                    ],
                    [
                        '7311031002', '731103', 'Mangempang'
                    ],
                    [
                        '7311031003', '731103', 'Sumpang Binangae'
                    ],
                    [
                        '7311031004', '731103', 'Sepee'
                    ],
                    [
                        '7311031005', '731103', 'Tuwung'
                    ],
                    [
                        '7311032006', '731103', 'Palakka'
                    ],
                    [
                        '7311032007', '731103', 'Tompo'
                    ],
                    [
                        '7311032008', '731103', 'Anabanua'
                    ],
                    [
                        '7311032009', '731103', 'Galung'
                    ],
                    [
                        '7311032010', '731103', 'Siawung'
                    ],
                    [
                        '7311041001', '731104', 'Kiru Kiru'
                    ],
                    [
                        '7311041002', '731104', 'Mangkoso'
                    ],
                    [
                        '7311042003', '731104', 'Lawallu'
                    ],
                    [
                        '7311042004', '731104', 'Paccekke'
                    ],
                    [
                        '7311042005', '731104', 'Ajakkang'
                    ],
                    [
                        '7311042006', '731104', 'Siddo'
                    ],
                    [
                        '7311042007', '731104', 'Batupute'
                    ],
                    [
                        '7311051001', '731105', 'Palanro'
                    ],
                    [
                        '7311051002', '731105', 'Mallawa'
                    ],
                    [
                        '7311051003', '731105', 'Bojo Baru'
                    ],
                    [
                        '7311052004', '731105', 'Cilellang'
                    ],
                    [
                        '7311052005', '731105', 'Manuba'
                    ],
                    [
                        '7311052006', '731105', 'Nepo'
                    ],
                    [
                        '7311052007', '731105', 'Kupa'
                    ],
                    [
                        '7311052008', '731105', 'Bojo'
                    ],
                    [
                        '7311061007', '731106', 'Mattappawalie '
                    ],
                    [
                        '7311062001', '731106', 'Pujananting'
                    ],
                    [
                        '7311062002', '731106', 'Gattareng'
                    ],
                    [
                        '7311062003', '731106', 'Pattappa'
                    ],
                    [
                        '7311062004', '731106', 'Jangan Jangan'
                    ],
                    [
                        '7311062005', '731106', 'Bulo Bulo'
                    ],
                    [
                        '7311062006', '731106', 'Bacu Bacu'
                    ],
                    [
                        '7311071001', '731107', 'Takkalasi'
                    ],
                    [
                        '7311072002', '731107', 'Balusu'
                    ],
                    [
                        '7311072003', '731107', 'Lampoko'
                    ],
                    [
                        '7311072004', '731107', 'Kamiri'
                    ],
                    [
                        '7311072005', '731107', 'Madello'
                    ],
                    [
                        '7311072006', '731107', 'Binuang'
                    ],
                    [
                        '7312011001', '731201', 'Labessi'
                    ],
                    [
                        '7312011002', '731201', 'Tettikenrarae'
                    ],
                    [
                        '7312012003', '731201', 'Gattareng'
                    ],
                    [
                        '7312012004', '731201', 'Watu'
                    ],
                    [
                        '7312012005', '731201', 'Goarie'
                    ],
                    [
                        '7312012006', '731201', 'Barae'
                    ],
                    [
                        '7312012007', '731201', 'Marioriaja'
                    ],
                    [
                        '7312012008', '731201', 'Marioritengnga'
                    ],
                    [
                        '7312012009', '731201', 'Mariorilau'
                    ],
                    [
                        '7312012010', '731201', 'Watu Toa'
                    ],
                    [
                        '7312012011', '731201', 'Congko'
                    ],
                    [
                        '7312012012', '731201', 'Gattareng Toa'
                    ],
                    [
                        '7312012013', '731201', 'Soga'
                    ],
                    [
                        '7312021001', '731202', 'Appanang'
                    ],
                    [
                        '7312021002', '731202', 'Jennae'
                    ],
                    [
                        '7312021003', '731202', 'Galung'
                    ],
                    [
                        '7312022005', '731202', 'Jampu'
                    ],
                    [
                        '7312022006', '731202', 'Pattojo'
                    ],
                    [
                        '7312022009', '731202', 'Timusu'
                    ],
                    [
                        '7312022010', '731202', 'Rompegading'
                    ],
                    [
                        '7312022011', '731202', 'Barang'
                    ],
                    [
                        '7312031001', '731203', 'Ujung'
                    ],
                    [
                        '7312031002', '731203', 'Cabenge'
                    ],
                    [
                        '7312031003', '731203', 'Pajalesang'
                    ],
                    [
                        '7312031004', '731203', 'Macanre'
                    ],
                    [
                        '7312032005', '731203', 'Abbanuange'
                    ],
                    [
                        '7312032006', '731203', 'Tetewatu'
                    ],
                    [
                        '7312032007', '731203', 'Baringeng'
                    ],
                    [
                        '7312032009', '731203', 'Masing'
                    ],
                    [
                        '7312032010', '731203', 'Kebo'
                    ],
                    [
                        '7312032011', '731203', 'Parenring'
                    ],
                    [
                        '7312032012', '731203', 'Paroto'
                    ],
                    [
                        '7312032013', '731203', 'Palangiseng'
                    ],
                    [
                        '7312041001', '731204', 'Lalabata Rilau'
                    ],
                    [
                        '7312041002', '731204', 'Ompo'
                    ],
                    [
                        '7312041003', '731204', 'Botto'
                    ],
                    [
                        '7312041004', '731204', 'Lemba'
                    ],
                    [
                        '7312041005', '731204', 'Bila'
                    ],
                    [
                        '7312041006', '731204', 'Lapajung'
                    ],
                    [
                        '7312041007', '731204', 'Salokaraja'
                    ],
                    [
                        '7312042008', '731204', 'Maccile'
                    ],
                    [
                        '7312042009', '731204', 'Umpungeng'
                    ],
                    [
                        '7312042010', '731204', 'Mattabulu'
                    ],
                    [
                        '7312051001', '731205', 'Batu Batu'
                    ],
                    [
                        '7312051002', '731205', 'Kaca'
                    ],
                    [
                        '7312051003', '731205', 'Attang Salo'
                    ],
                    [
                        '7312051004', '731205', 'Manorang Salo'
                    ],
                    [
                        '7312051005', '731205', 'Limpomajang'
                    ],
                    [
                        '7312052006', '731205', 'Bulue'
                    ],
                    [
                        '7312052007', '731205', 'Panincong'
                    ],
                    [
                        '7312052008', '731205', 'Patampanua'
                    ],
                    [
                        '7312052009', '731205', 'Tellulimpoe'
                    ],
                    [
                        '7312052010', '731205', 'Laringgi'
                    ],
                    [
                        '7312062002', '731206', 'Donri Donri'
                    ],
                    [
                        '7312062003', '731206', 'Lalabatariaja'
                    ],
                    [
                        '7312062004', '731206', 'Leworeng'
                    ],
                    [
                        '7312062005', '731206', 'Labokong'
                    ],
                    [
                        '7312062006', '731206', 'Sering'
                    ],
                    [
                        '7312062007', '731206', 'Pesse'
                    ],
                    [
                        '7312062008', '731206', 'Tottong'
                    ],
                    [
                        '7312062009', '731206', 'Kessing'
                    ],
                    [
                        '7312062010', '731206', 'Pising'
                    ],
                    [
                        '7312072001', '731207', 'Belo'
                    ],
                    [
                        '7312072002', '731207', 'Ganra'
                    ],
                    [
                        '7312072003', '731207', 'Lompulle'
                    ],
                    [
                        '7312072004', '731207', 'Enrekeng'
                    ],
                    [
                        '7312082001', '731208', 'Citta'
                    ],
                    [
                        '7312082002', '731208', 'Kampiri'
                    ],
                    [
                        '7312082003', '731208', 'Labae'
                    ],
                    [
                        '7312082004', '731208', 'Tinco'
                    ],
                    [
                        '7313011001', '731301', 'Walennae'
                    ],
                    [
                        '7313011002', '731301', 'Tolotenreng'
                    ],
                    [
                        '7313011003', '731301', 'Sompe'
                    ],
                    [
                        '7313012004', '731301', 'Liu'
                    ],
                    [
                        '7313012005', '731301', 'Ugi'
                    ],
                    [
                        '7313012006', '731301', 'Ujungpero'
                    ],
                    [
                        '7313012007', '731301', 'Wage'
                    ],
                    [
                        '7313012008', '731301', 'Worongnge'
                    ],
                    [
                        '7313012009', '731301', 'Salotengnga'
                    ],
                    [
                        '7313012010', '731301', 'Pallimae'
                    ],
                    [
                        '7313012011', '731301', 'Mallusesalo'
                    ],
                    [
                        '7313012012', '731301', 'Pasaka'
                    ],
                    [
                        '7313012013', '731301', 'Tadangpalie'
                    ],
                    [
                        '7313012014', '731301', 'Benteng Lompoe'
                    ],
                    [
                        '7313012015', '731301', 'Bila'
                    ],
                    [
                        '7313021001', '731302', 'Pammana'
                    ],
                    [
                        '7313021002', '731302', 'Cina'
                    ],
                    [
                        '7313022003', '731302', 'Lempa'
                    ],
                    [
                        '7313022004', '731302', 'Patila'
                    ],
                    [
                        '7313022005', '731302', 'Kampiri'
                    ],
                    [
                        '7313022006', '731302', 'Lapaukke'
                    ],
                    [
                        '7313022007', '731302', 'Lagosi'
                    ],
                    [
                        '7313022008', '731302', 'Pallawarukka'
                    ],
                    [
                        '7313022009', '731302', 'Wecudai'
                    ],
                    [
                        '7313022010', '731302', 'Lampulung'
                    ],
                    [
                        '7313022011', '731302', 'Watampanua'
                    ],
                    [
                        '7313022012', '731302', 'Tadangpalie'
                    ],
                    [
                        '7313022013', '731302', 'Simpursia'
                    ],
                    [
                        '7313022014', '731302', 'Tobatang'
                    ],
                    [
                        '7313022015', '731302', 'Abbanuangnge'
                    ],
                    [
                        '7313022016', '731302', 'Tonrong Tengnga'
                    ],
                    [
                        '7313031001', '731303', 'Peneki'
                    ],
                    [
                        '7313031002', '731303', 'Bocco'
                    ],
                    [
                        '7313032003', '731303', 'Parigi'
                    ],
                    [
                        '7313032004', '731303', 'Manyili'
                    ],
                    [
                        '7313032005', '731303', 'Soro'
                    ],
                    [
                        '7313032006', '731303', 'Ceppaga'
                    ],
                    [
                        '7313032007', '731303', 'Leweng'
                    ],
                    [
                        '7313032008', '731303', 'Ajuraja'
                    ],
                    [
                        '7313032009', '731303', 'Botto'
                    ],
                    [
                        '7313032010', '731303', 'Lagoari'
                    ],
                    [
                        '7313032011', '731303', 'Aluppang'
                    ],
                    [
                        '7313032012', '731303', 'Lamarua'
                    ],
                    [
                        '7313032013', '731303', 'Pantai Timur'
                    ],
                    [
                        '7313041001', '731304', 'Akkajeng'
                    ],
                    [
                        '7313041002', '731304', 'Assorajang'
                    ],
                    [
                        '7313041003', '731304', 'Minangae'
                    ],
                    [
                        '7313042004', '731304', 'Akkotengeng'
                    ],
                    [
                        '7313042005', '731304', 'Sakkoli'
                    ],
                    [
                        '7313042006', '731304', 'Barangmamase'
                    ],
                    [
                        '7313042007', '731304', 'Salobulo'
                    ],
                    [
                        '7313042008', '731304', 'Towalida'
                    ],
                    [
                        '7313042009', '731304', 'Alewadeng'
                    ],
                    [
                        '7313051001', '731305', 'Paria'
                    ],
                    [
                        '7313051002', '731305', 'Limpomajang'
                    ],
                    [
                        '7313051003', '731305', 'Macanang'
                    ],
                    [
                        '7313051004', '731305', 'Uraiyang'
                    ],
                    [
                        '7313052005', '731305', 'Tosora'
                    ],
                    [
                        '7313052006', '731305', 'Cinnong Tabi'
                    ],
                    [
                        '7313052007', '731305', 'Rumpia'
                    ],
                    [
                        '7313052008', '731305', 'Laerung'
                    ],
                    [
                        '7313052009', '731305', 'Lamiku'
                    ],
                    [
                        '7313052010', '731305', 'Bottobenteng'
                    ],
                    [
                        '7313052011', '731305', 'Bottotanre'
                    ],
                    [
                        '7313052012', '731305', 'Tua'
                    ],
                    [
                        '7313052013', '731305', 'Tajo'
                    ],
                    [
                        '7313052014', '731305', 'Tengnga'
                    ],
                    [
                        '7313052015', '731305', 'Liu'
                    ],
                    [
                        '7313052016', '731305', 'Tellulimpoe'
                    ],
                    [
                        '7313052017', '731305', 'Bottopenno'
                    ],
                    [
                        '7313052018', '731305', 'Watanrumpia'
                    ],
                    [
                        '7313061001', '731306', 'Siengkang'
                    ],
                    [
                        '7313061002', '731306', 'Pattirosompe'
                    ],
                    [
                        '7313061003', '731306', 'Tempe'
                    ],
                    [
                        '7313061004', '731306', 'Maddukelleng'
                    ],
                    [
                        '7313061005', '731306', 'Watallipue'
                    ],
                    [
                        '7313061006', '731306', 'Mattiro Tappareng'
                    ],
                    [
                        '7313061007', '731306', 'Laelo'
                    ],
                    [
                        '7313061008', '731306', 'Salo Menraleng'
                    ],
                    [
                        '7313061009', '731306', 'Campalagi'
                    ],
                    [
                        '7313061010', '731306', 'Lapongkoda'
                    ],
                    [
                        '7313061011', '731306', 'Teddaopu'
                    ],
                    [
                        '7313061012', '731306', 'Paddupa'
                    ],
                    [
                        '7313061013', '731306', 'Wiring Palenae'
                    ],
                    [
                        '7313061014', '731306', 'Attakkae'
                    ],
                    [
                        '7313061015', '731306', 'Sitampae'
                    ],
                    [
                        '7313061016', '731306', 'Bulu Pabbulu'
                    ],
                    [
                        '7313071001', '731307', 'Macero'
                    ],
                    [
                        '7313071002', '731307', 'Malangke'
                    ],
                    [
                        '7313071003', '731307', 'Belawa'
                    ],
                    [
                        '7313072004', '731307', 'Ongkoe'
                    ],
                    [
                        '7313072005', '731307', 'Leppangeng'
                    ],
                    [
                        '7313072006', '731307', 'Wele'
                    ],
                    [
                        '7313072007', '731307', 'Limporilau'
                    ],
                    [
                        '7313072008', '731307', 'Sappa'
                    ],
                    [
                        '7313072009', '731307', 'Lautang'
                    ],
                    [
                        '7313081001', '731308', 'Tancung'
                    ],
                    [
                        '7313081002', '731308', 'Mappadaelo'
                    ],
                    [
                        '7313081003', '731308', 'Pincengpute'
                    ],
                    [
                        '7313081004', '731308', 'Barutancung'
                    ],
                    [
                        '7313082005', '731308', 'Nepo'
                    ],
                    [
                        '7313082006', '731308', 'Lowa'
                    ],
                    [
                        '7313082007', '731308', 'Inalipue'
                    ],
                    [
                        '7313082008', '731308', 'Pakkana'
                    ],
                    [
                        '7313082009', '731308', 'Wajoriaja'
                    ],
                    [
                        '7313082010', '731308', 'Wewangrewu'
                    ],
                    [
                        '7313082011', '731308', 'Wae Tuwo'
                    ],
                    [
                        '7313082012', '731308', 'Assorajang'
                    ],
                    [
                        '7313082013', '731308', 'Ujungnge'
                    ],
                    [
                        '7313082014', '731308', 'Pajalele'
                    ],
                    [
                        '7313082015', '731308', 'Mario'
                    ],
                    [
                        '7313082016', '731308', 'Palippu'
                    ],
                    [
                        '7313082017', '731308', 'Tonralipue'
                    ],
                    [
                        '7313082018', '731308', 'Ujungbaru'
                    ],
                    [
                        '7313082019', '731308', 'Mannagae'
                    ],
                    [
                        '7313091001', '731309', 'Anabanua'
                    ],
                    [
                        '7313091002', '731309', 'Dualimpoe'
                    ],
                    [
                        '7313091003', '731309', 'Tangkoli'
                    ],
                    [
                        '7313092004', '731309', 'Mattirowalie'
                    ],
                    [
                        '7313092005', '731309', 'Kalola'
                    ],
                    [
                        '7313092006', '731309', 'Sogi'
                    ],
                    [
                        '7313092007', '731309', 'Abbanuangnge'
                    ],
                    [
                        '7313092008', '731309', 'Minagatellue'
                    ],
                    [
                        '7313101001', '731310', 'Bulete'
                    ],
                    [
                        '7313101002', '731310', 'Siwa'
                    ],
                    [
                        '7313101003', '731310', 'Tobarakka'
                    ],
                    [
                        '7313101004', '731310', 'Benteng'
                    ],
                    [
                        '7313102005', '731310', 'Batu'
                    ],
                    [
                        '7313102006', '731310', 'Lauwa'
                    ],
                    [
                        '7313102007', '731310', 'Tanrongi'
                    ],
                    [
                        '7313102008', '731310', 'Lompoloang'
                    ],
                    [
                        '7313102009', '731310', 'Tellesang'
                    ],
                    [
                        '7313102010', '731310', 'Tangkoro'
                    ],
                    [
                        '7313102011', '731310', 'Marannu'
                    ],
                    [
                        '7313102012', '731310', 'Abbanderangnge'
                    ],
                    [
                        '7313102013', '731310', 'Simpellu'
                    ],
                    [
                        '7313102014', '731310', 'Alesilurengnge'
                    ],
                    [
                        '7313102015', '731310', 'Jauh Pandang'
                    ],
                    [
                        '7313102016', '731310', 'Lacinde'
                    ],
                    [
                        '7313102017', '731310', 'Buriko'
                    ],
                    [
                        '7313102018', '731310', 'Bau-Bau'
                    ],
                    [
                        '7313102019', '731310', 'Ale Lebbae'
                    ],
                    [
                        '7313102020', '731310', 'Bulu Siwa'
                    ],
                    [
                        '7313102021', '731310', 'Botto Tengnga'
                    ],
                    [
                        '7313102022', '731310', 'Kaluku'
                    ],
                    [
                        '7313102023', '731310', 'Mattiro Walie'
                    ],
                    [
                        '7313102024', '731310', 'Maccolli Loloe'
                    ],
                    [
                        '7313102025', '731310', 'Lompo Bulo'
                    ],
                    [
                        '7313102026', '731310', 'Padang Loang'
                    ],
                    [
                        '7313102027', '731310', 'Kompong'
                    ],
                    [
                        '7313111001', '731311', 'Solo'
                    ],
                    [
                        '7313112002', '731311', 'Bola'
                    ],
                    [
                        '7313112003', '731311', 'Ujungtanah'
                    ],
                    [
                        '7313112004', '731311', 'Lempong'
                    ],
                    [
                        '7313112005', '731311', 'Sanreseng Ade'
                    ],
                    [
                        '7313112006', '731311', 'Pattangngae'
                    ],
                    [
                        '7313112007', '731311', 'Balielo'
                    ],
                    [
                        '7313112008', '731311', 'Manurung'
                    ],
                    [
                        '7313112009', '731311', 'Lattimu'
                    ],
                    [
                        '7313112010', '731311', 'Pasir Putih'
                    ],
                    [
                        '7313112011', '731311', 'Rajamawellang'
                    ],
                    [
                        '7313121001', '731312', 'Doping'
                    ],
                    [
                        '7313122002', '731312', 'Padaelo'
                    ],
                    [
                        '7313122003', '731312', 'Temmabarang'
                    ],
                    [
                        '7313122004', '731312', 'Penrang'
                    ],
                    [
                        '7313122005', '731312', 'Lawesso'
                    ],
                    [
                        '7313122006', '731312', 'Benteng'
                    ],
                    [
                        '7313122007', '731312', 'Walanga'
                    ],
                    [
                        '7313122008', '731312', 'Makmur'
                    ],
                    [
                        '7313122009', '731312', 'Tadangpalie'
                    ],
                    [
                        '7313122010', '731312', 'Raddae'
                    ],
                    [
                        '7313131002', '731313', 'Gilireng'
                    ],
                    [
                        '7313132001', '731313', 'Mamminasae'
                    ],
                    [
                        '7313132003', '731313', 'Poleonro'
                    ],
                    [
                        '7313132004', '731313', 'Arajang'
                    ],
                    [
                        '7313132005', '731313', 'Lamata'
                    ],
                    [
                        '7313132006', '731313', 'Paselloreng'
                    ],
                    [
                        '7313132007', '731313', 'Alausalo'
                    ],
                    [
                        '7313132008', '731313', 'Polewalie'
                    ],
                    [
                        '7313132009', '731313', 'Abbatireng'
                    ],
                    [
                        '7313141001', '731314', 'Ballaere'
                    ],
                    [
                        '7313142002', '731314', 'Awota'
                    ],
                    [
                        '7313142003', '731314', 'Keera'
                    ],
                    [
                        '7313142004', '731314', 'Lalliseng'
                    ],
                    [
                        '7313142005', '731314', 'Paojepe'
                    ],
                    [
                        '7313142006', '731314', 'Inrello'
                    ],
                    [
                        '7313142007', '731314', 'Pattirolokka'
                    ],
                    [
                        '7313142008', '731314', 'Awo'
                    ],
                    [
                        '7313142009', '731314', 'Ciromanie'
                    ],
                    [
                        '7313142010', '731314', 'Labawang'
                    ],
                    [
                        '7314011001', '731401', 'Bilokka'
                    ],
                    [
                        '7314011002', '731401', 'WetteE'
                    ],
                    [
                        '7314011003', '731401', 'Lajonga'
                    ],
                    [
                        '7314012004', '731401', 'Wanio'
                    ],
                    [
                        '7314012005', '731401', 'Wanio Timoreng'
                    ],
                    [
                        '7314012006', '731401', 'Corawali'
                    ],
                    [
                        '7314012007', '731401', 'Lise'
                    ],
                    [
                        '7314012008', '731401', 'Bapangi'
                    ],
                    [
                        '7314012009', '731401', 'Alesalewo'
                    ],
                    [
                        '7314012010', '731401', 'Cenrana'
                    ],
                    [
                        '7314021001', '731402', 'Amparita'
                    ],
                    [
                        '7314021002', '731402', 'Massepe'
                    ],
                    [
                        '7314021003', '731402', 'Toddang Pulu'
                    ],
                    [
                        '7314021004', '731402', 'Pajalele'
                    ],
                    [
                        '7314021005', '731402', 'Baula'
                    ],
                    [
                        '7314021006', '731402', 'Arateng'
                    ],
                    [
                        '7314022007', '731402', 'Teteaji'
                    ],
                    [
                        '7314022008', '731402', 'Polewali'
                    ],
                    [
                        '7314022009', '731402', 'Teppo'
                    ],
                    [
                        '7314031001', '731403', 'Lawawoi'
                    ],
                    [
                        '7314031002', '731403', 'Arawa'
                    ],
                    [
                        '7314031003', '731403', 'Bangkai'
                    ],
                    [
                        '7314031004', '731403', 'Uluale'
                    ],
                    [
                        '7314031005', '731403', 'Batu Lappa'
                    ],
                    [
                        '7314032006', '731403', 'Lainungan'
                    ],
                    [
                        '7314032007', '731403', 'Carawali'
                    ],
                    [
                        '7314032008', '731403', 'Buae'
                    ],
                    [
                        '7314032009', '731403', 'Mattirotasi'
                    ],
                    [
                        '7314032010', '731403', 'Ciro-Ciroe'
                    ],
                    [
                        '7314041001', '731404', 'Baranti'
                    ],
                    [
                        '7314041002', '731404', 'Duampanua'
                    ],
                    [
                        '7314041003', '731404', 'Benteng'
                    ],
                    [
                        '7314041004', '731404', 'Manisa'
                    ],
                    [
                        '7314041005', '731404', 'Panreng '
                    ],
                    [
                        '7314042006', '731404', 'Passeno'
                    ],
                    [
                        '7314042007', '731404', 'Sipodeceng'
                    ],
                    [
                        '7314042008', '731404', 'Tonrongnge'
                    ],
                    [
                        '7314042009', '731404', 'Tonrong Rijang'
                    ],
                    [
                        '7314051001', '731405', 'Rappang'
                    ],
                    [
                        '7314051002', '731405', 'Lalebata'
                    ],
                    [
                        '7314051003', '731405', 'Maccorawalie'
                    ],
                    [
                        '7314051004', '731405', 'Kadidi'
                    ],
                    [
                        '7314052005', '731405', 'Timoreng Panua'
                    ],
                    [
                        '7314052006', '731405', 'Bulo Wattang'
                    ],
                    [
                        '7314052007', '731405', 'Bulo'
                    ],
                    [
                        '7314052008', '731405', 'Cipotakari'
                    ],
                    [
                        '7314062001', '731406', 'Rijang Panua'
                    ],
                    [
                        '7314062002', '731406', 'Kulo'
                    ],
                    [
                        '7314062003', '731406', 'Maddenra'
                    ],
                    [
                        '7314062004', '731406', 'Mario'
                    ],
                    [
                        '7314062005', '731406', 'Bina Baru'
                    ],
                    [
                        '7314062006', '731406', 'Abbokongang'
                    ],
                    [
                        '7314071001', '731407', 'Pangkajene'
                    ],
                    [
                        '7314071002', '731407', 'Lautang Benteng'
                    ],
                    [
                        '7314071003', '731407', 'Majjelling'
                    ],
                    [
                        '7314071004', '731407', 'Wala'
                    ],
                    [
                        '7314071005', '731407', 'Lakessi'
                    ],
                    [
                        '7314071006', '731407', 'Rijang Pittu'
                    ],
                    [
                        '7314071007', '731407', 'Majjelling Watang'
                    ],
                    [
                        '7314072008', '731407', 'Sereang'
                    ],
                    [
                        '7314072009', '731407', 'Kanie'
                    ],
                    [
                        '7314072010', '731407', 'Allakuang'
                    ],
                    [
                        '7314072011', '731407', 'Tanete'
                    ],
                    [
                        '7314072012', '731407', 'Takkalasi'
                    ],
                    [
                        '7314081001', '731408', 'Empagae'
                    ],
                    [
                        '7314081002', '731408', 'Sidenreng'
                    ],
                    [
                        '7314081003', '731408', 'Kanyuara'
                    ],
                    [
                        '7314082004', '731408', 'Mojong'
                    ],
                    [
                        '7314082005', '731408', 'Damai'
                    ],
                    [
                        '7314082006', '731408', 'Talumae'
                    ],
                    [
                        '7314082007', '731408', 'Aka-akae'
                    ],
                    [
                        '7314082008', '731408', 'Talawe'
                    ],
                    [
                        '7314091001', '731409', 'Tanru Tedong'
                    ],
                    [
                        '7314091002', '731409', 'Salomalori'
                    ],
                    [
                        '7314092003', '731409', 'Kalosi'
                    ],
                    [
                        '7314092004', '731409', 'Padangloang'
                    ],
                    [
                        '7314092005', '731409', 'Kalosi Alau'
                    ],
                    [
                        '7314092006', '731409', 'Bila'
                    ],
                    [
                        '7314092007', '731409', 'Padangloang Alau'
                    ],
                    [
                        '7314092008', '731409', 'Salobukkang'
                    ],
                    [
                        '7314092009', '731409', 'Taccimpo'
                    ],
                    [
                        '7314092010', '731409', 'Kampale'
                    ],
                    [
                        '7314101001', '731410', 'Lancirang'
                    ],
                    [
                        '7314101002', '731410', 'PongrangaE'
                    ],
                    [
                        '7314102003', '731410', 'Ajubissue'
                    ],
                    [
                        '7314102004', '731410', 'Otting'
                    ],
                    [
                        '7314102005', '731410', 'Bulucenrana'
                    ],
                    [
                        '7314102006', '731410', 'Betao'
                    ],
                    [
                        '7314102007', '731410', 'Anabannae'
                    ],
                    [
                        '7314102008', '731410', 'Betao Riase'
                    ],
                    [
                        '7314102009', '731410', 'Dongi'
                    ],
                    [
                        '7314102010', '731410', 'Lasiwala'
                    ],
                    [
                        '7314102011', '731410', 'Sumpang Mango'
                    ],
                    [
                        '7314102012', '731410', 'Kalempang'
                    ],
                    [
                        '7314111001', '731411', 'Batu'
                    ],
                    [
                        '7314112002', '731411', 'Compong'
                    ],
                    [
                        '7314112003', '731411', 'Belawae'
                    ],
                    [
                        '7314112004', '731411', 'Botto'
                    ],
                    [
                        '7314112005', '731411', 'Bila Riase'
                    ],
                    [
                        '7314112006', '731411', 'Bola Bulu'
                    ],
                    [
                        '7314112007', '731411', 'Tana Toro'
                    ],
                    [
                        '7314112008', '731411', 'Lombo'
                    ],
                    [
                        '7314112009', '731411', 'Lagading'
                    ],
                    [
                        '7314112010', '731411', 'Dengeng-Dengeng'
                    ],
                    [
                        '7314112011', '731411', 'Buntu Buangin'
                    ],
                    [
                        '7314112012', '731411', 'Leppangeng'
                    ],
                    [
                        '7315011001', '731501', 'Langnga'
                    ],
                    [
                        '7315011002', '731501', 'Pallameang'
                    ],
                    [
                        '7315012003', '731501', 'Massulowalie'
                    ],
                    [
                        '7315012004', '731501', 'Mattombong'
                    ],
                    [
                        '7315012005', '731501', 'Mattongang Tongang'
                    ],
                    [
                        '7315012006', '731501', 'Patobong'
                    ],
                    [
                        '7315012007', '731501', 'Samaenre'
                    ],
                    [
                        '7315012008', '731501', 'Mattiro Tasi'
                    ],
                    [
                        '7315012009', '731501', 'Siwolong Polong'
                    ],
                    [
                        '7315021001', '731502', 'Watang Suppa'
                    ],
                    [
                        '7315021002', '731502', 'Tellumpanua'
                    ],
                    [
                        '7315022003', '731502', 'Lero'
                    ],
                    [
                        '7315022004', '731502', 'Watang Pulu'
                    ],
                    [
                        '7315022005', '731502', 'Maritengngae'
                    ],
                    [
                        '7315022006', '731502', 'Tasiwalie'
                    ],
                    [
                        '7315022007', '731502', 'Wiring Tasi'
                    ],
                    [
                        '7315022008', '731502', 'Lotang Salo'
                    ],
                    [
                        '7315022009', '731502', 'Ujung Labuang'
                    ],
                    [
                        '7315022010', '731502', 'Polewali'
                    ],
                    [
                        '7315031001', '731503', 'Manarang'
                    ],
                    [
                        '7315031002', '731503', 'Padaidi'
                    ],
                    [
                        '7315032003', '731503', 'Pananrang'
                    ],
                    [
                        '7315032004', '731503', 'Padakkalawa'
                    ],
                    [
                        '7315032005', '731503', 'Marannu'
                    ],
                    [
                        '7315032006', '731503', 'Alitta'
                    ],
                    [
                        '7315032007', '731503', 'Padaelo'
                    ],
                    [
                        '7315032008', '731503', 'Bunga'
                    ],
                    [
                        '7315032009', '731503', 'Makkawaru'
                    ],
                    [
                        '7315041001', '731504', 'Jaya'
                    ],
                    [
                        '7315041002', '731504', 'Sawitto '
                    ],
                    [
                        '7315041003', '731504', 'Maccorawalie'
                    ],
                    [
                        '7315041004', '731504', 'Penrang'
                    ],
                    [
                        '7315041005', '731504', 'Salo'
                    ],
                    [
                        '7315041006', '731504', 'Bentengnge'
                    ],
                    [
                        '7315041007', '731504', 'Sipatokkong'
                    ],
                    [
                        '7315041008', '731504', 'Siparappe'
                    ],
                    [
                        '7315051001', '731505', 'Benteng'
                    ],
                    [
                        '7315051002', '731505', 'Teppo'
                    ],
                    [
                        '7315051003', '731505', 'Tonyamang'
                    ],
                    [
                        '7315051004', '731505', 'Maccirinna'
                    ],
                    [
                        '7315052005', '731505', 'Leppangang'
                    ],
                    [
                        '7315052006', '731505', 'Malimpung'
                    ],
                    [
                        '7315052007', '731505', 'Mattiro Ade'
                    ],
                    [
                        '7315052008', '731505', 'Sipatuo'
                    ],
                    [
                        '7315052009', '731505', 'Padang Loang'
                    ],
                    [
                        '7315052010', '731505', 'Pincara'
                    ],
                    [
                        '7315052011', '731505', 'Masolo'
                    ],
                    [
                        '7315061001', '731506', 'Pekkabata'
                    ],
                    [
                        '7315061002', '731506', 'Tatae'
                    ],
                    [
                        '7315061003', '731506', 'Lampa'
                    ],
                    [
                        '7315061004', '731506', 'Data'
                    ],
                    [
                        '7315061005', '731506', 'Bittoeng'
                    ],
                    [
                        '7315062006', '731506', 'Kaballangang'
                    ],
                    [
                        '7315062007', '731506', 'Paria'
                    ],
                    [
                        '7315062008', '731506', 'Kaliang'
                    ],
                    [
                        '7315062009', '731506', 'Buttusawe'
                    ],
                    [
                        '7315062010', '731506', 'Maroneng'
                    ],
                    [
                        '7315062011', '731506', 'Katomporang'
                    ],
                    [
                        '7315062012', '731506', 'Bungi'
                    ],
                    [
                        '7315062013', '731506', 'Massewae'
                    ],
                    [
                        '7315062014', '731506', 'Bababinanga'
                    ],
                    [
                        '7315062015', '731506', 'Barugae'
                    ],
                    [
                        '7315071001', '731507', 'Tadokkong '
                    ],
                    [
                        '7315071002', '731507', 'Betteng'
                    ],
                    [
                        '7315072003', '731507', 'Binanga Karaeng'
                    ],
                    [
                        '7315072004', '731507', 'Rajang'
                    ],
                    [
                        '7315072005', '731507', 'Letta'
                    ],
                    [
                        '7315072006', '731507', 'Ulu Saddang'
                    ],
                    [
                        '7315072007', '731507', 'Suppirang'
                    ],
                    [
                        '7315072008', '731507', 'Basseang'
                    ],
                    [
                        '7315072009', '731507', 'Kariango'
                    ],
                    [
                        '7315072010', '731507', 'Benteng Paremba'
                    ],
                    [
                        '7315072011', '731507', 'Pakeng'
                    ],
                    [
                        '7315072012', '731507', 'Lembang Mesakada'
                    ],
                    [
                        '7315072013', '731507', 'Sali Sali'
                    ],
                    [
                        '7315072014', '731507', 'Sabbang Paru'
                    ],
                    [
                        '7315072015', '731507', 'Bakaru'
                    ],
                    [
                        '7315072016', '731507', 'Pangaparang'
                    ],
                    [
                        '7315081001', '731508', 'Cempa'
                    ],
                    [
                        '7315082002', '731508', 'Mangki'
                    ],
                    [
                        '7315082003', '731508', 'Mattunru Tunrue'
                    ],
                    [
                        '7315082004', '731508', 'Sikkuale'
                    ],
                    [
                        '7315082005', '731508', 'Tadang Palie'
                    ],
                    [
                        '7315082006', '731508', 'Salipolo'
                    ],
                    [
                        '7315082007', '731508', 'Tanra Tuo'
                    ],
                    [
                        '7315091001', '731509', 'Pammase'
                    ],
                    [
                        '7315091002', '731509', 'Marawi'
                    ],
                    [
                        '7315091003', '731509', 'Fakkie'
                    ],
                    [
                        '7315091004', '731509', 'Tiroang'
                    ],
                    [
                        '7315091005', '731509', 'Mattiro Deceng'
                    ],
                    [
                        '7315091006', '731509', 'Samaturue'
                    ],
                    [
                        '7315101001', '731510', 'Lanrisang'
                    ],
                    [
                        '7315102002', '731510', 'Samaulue'
                    ],
                    [
                        '7315102003', '731510', 'Mallongi-longi'
                    ],
                    [
                        '7315102004', '731510', 'Amassangang'
                    ],
                    [
                        '7315102005', '731510', 'Barang Palie'
                    ],
                    [
                        '7315102006', '731510', 'Waetuoe'
                    ],
                    [
                        '7315102007', '731510', 'Lerang'
                    ],
                    [
                        '7315111001', '731511', 'Pacongang'
                    ],
                    [
                        '7315111002', '731511', 'Macinnae'
                    ],
                    [
                        '7315111003', '731511', 'Temmassarangnge'
                    ],
                    [
                        '7315111004', '731511', 'Mamminasae'
                    ],
                    [
                        '7315111005', '731511', 'Laleng Bata'
                    ],
                    [
                        '7315111006', '731511', 'Benteng Sawitto '
                    ],
                    [
                        '7315121003', '731512', 'Kassa'
                    ],
                    [
                        '7315122001', '731512', 'Batulappa'
                    ],
                    [
                        '7315122004', '731512', 'Tapporang'
                    ],
                    [
                        '7315122005', '731512', 'Kaseralau'
                    ],
                    [
                        '7315122006', '731512', 'Watang Kassa'
                    ],
                    [
                        '7316011001', '731601', 'Bangkala'
                    ],
                    [
                        '7316012002', '731601', 'Pattondon Salu'
                    ],
                    [
                        '7316012003', '731601', 'Tuncung'
                    ],
                    [
                        '7316012004', '731601', 'Pasang'
                    ],
                    [
                        '7316012005', '731601', 'Salodua'
                    ],
                    [
                        '7316012006', '731601', 'Batu Mila'
                    ],
                    [
                        '7316012007', '731601', 'Puncak Harapan'
                    ],
                    [
                        '7316012008', '731601', 'Palakka'
                    ],
                    [
                        '7316012009', '731601', 'Tapong'
                    ],
                    [
                        '7316012010', '731601', 'Mangkawani'
                    ],
                    [
                        '7316012011', '731601', 'Botto Malangga'
                    ],
                    [
                        '7316012012', '731601', 'Boiya'
                    ],
                    [
                        '7316012013', '731601', 'Matajang'
                    ],
                    [
                        '7316012014', '731601', 'Baringin'
                    ],
                    [
                        '7316012015', '731601', 'Lebani'
                    ],
                    [
                        '7316012016', '731601', 'Limbuang'
                    ],
                    [
                        '7316012017', '731601', 'Paladang'
                    ],
                    [
                        '7316012018', '731601', 'Pariwang'
                    ],
                    [
                        '7316012019', '731601', 'Kaluppang'
                    ],
                    [
                        '7316012020', '731601', 'Ongko'
                    ],
                    [
                        '7316012021', '731601', 'Tanete'
                    ],
                    [
                        '7316012022', '731601', 'Labuku'
                    ],
                    [
                        '7316021001', '731602', 'Galonta'
                    ],
                    [
                        '7316021002', '731602', 'Juppandang'
                    ],
                    [
                        '7316021003', '731602', 'Puserren'
                    ],
                    [
                        '7316021004', '731602', 'Lewaja'
                    ],
                    [
                        '7316021010', '731602', 'Leoran'
                    ],
                    [
                        '7316021016', '731602', 'Tuara'
                    ],
                    [
                        '7316022005', '731602', 'Ranga'
                    ],
                    [
                        '7316022006', '731602', 'Buttu Batu'
                    ],
                    [
                        '7316022007', '731602', 'Tokkonan'
                    ],
                    [
                        '7316022008', '731602', 'Karueng'
                    ],
                    [
                        '7316022011', '731602', 'Tallu Bamba'
                    ],
                    [
                        '7316022012', '731602', 'Tungka'
                    ],
                    [
                        '7316022013', '731602', 'Kaluppini'
                    ],
                    [
                        '7316022014', '731602', 'Tobalu'
                    ],
                    [
                        '7316022015', '731602', 'Cemba'
                    ],
                    [
                        '7316022017', '731602', 'Temban'
                    ],
                    [
                        '7316022018', '731602', 'Rosoan'
                    ],
                    [
                        '7316022019', '731602', 'Lembang'
                    ],
                    [
                        '7316031001', '731603', 'Baraka'
                    ],
                    [
                        '7316031002', '731603', 'Tomenawa'
                    ],
                    [
                        '7316031021', '731603', 'Balla'
                    ],
                    [
                        '7316032003', '731603', 'Banti'
                    ],
                    [
                        '7316032005', '731603', 'Bontongan'
                    ],
                    [
                        '7316032006', '731603', 'Salukanan'
                    ],
                    [
                        '7316032007', '731603', 'Parinding'
                    ],
                    [
                        '7316032010', '731603', 'Tirowali'
                    ],
                    [
                        '7316032011', '731603', 'Pepandungan'
                    ],
                    [
                        '7316032012', '731603', 'Kendenan'
                    ],
                    [
                        '7316032015', '731603', 'Perangian'
                    ],
                    [
                        '7316032019', '731603', 'Janggurara'
                    ],
                    [
                        '7316032020', '731603', 'Kadingeh'
                    ],
                    [
                        '7316032022', '731603', 'Bonebone'
                    ],
                    [
                        '7316032023', '731603', 'Pandung Batu'
                    ],
                    [
                        '7316041001', '731604', 'Lakawan'
                    ],
                    [
                        '7316041002', '731604', 'Tanete'
                    ],
                    [
                        '7316041004', '731604', 'Mataran'
                    ],
                    [
                        '7316042003', '731604', 'Bamba Puang'
                    ],
                    [
                        '7316042005', '731604', 'Siambo'
                    ],
                    [
                        '7316042006', '731604', 'Mampu'
                    ],
                    [
                        '7316042007', '731604', 'Pekalobean'
                    ],
                    [
                        '7316042008', '731604', 'Singki'
                    ],
                    [
                        '7316042009', '731604', 'Salu Dewata'
                    ],
                    [
                        '7316042010', '731604', 'Tindalun'
                    ],
                    [
                        '7316042011', '731604', 'Bubun Lamba'
                    ],
                    [
                        '7316042012', '731604', 'Tampo'
                    ],
                    [
                        '7316042013', '731604', 'Batunoni'
                    ],
                    [
                        '7316042014', '731604', 'Saruran'
                    ],
                    [
                        '7316042015', '731604', 'Mendatte'
                    ],
                    [
                        '7316051001', '731605', 'Kambiolangi'
                    ],
                    [
                        '7316051002', '731605', 'Kalosi'
                    ],
                    [
                        '7316051003', '731605', 'Buntu Sugi'
                    ],
                    [
                        '7316052004', '731605', 'Mata Allo'
                    ],
                    [
                        '7316052010', '731605', 'Sumillan'
                    ],
                    [
                        '7316052011', '731605', 'Pana'
                    ],
                    [
                        '7316052017', '731605', 'Taulo'
                    ],
                    [
                        '7316052018', '731605', 'Bolang'
                    ],
                    [
                        '7316062002', '731606', 'Bungin'
                    ],
                    [
                        '7316062003', '731606', 'Talang Rilau'
                    ],
                    [
                        '7316062004', '731606', 'Baruka'
                    ],
                    [
                        '7316062008', '731606', 'Sawitto'
                    ],
                    [
                        '7316062009', '731606', 'Bulo'
                    ],
                    [
                        '7316062010', '731606', 'Banua'
                    ],
                    [
                        '7316072001', '731607', 'Cendana'
                    ],
                    [
                        '7316072002', '731607', 'Taulan'
                    ],
                    [
                        '7316072003', '731607', 'Pinang'
                    ],
                    [
                        '7316072004', '731607', 'Malalin'
                    ],
                    [
                        '7316072005', '731607', 'Karrang'
                    ],
                    [
                        '7316072006', '731607', 'Lebang'
                    ],
                    [
                        '7316072007', '731607', 'Pundi Lemo'
                    ],
                    [
                        '7316082001', '731608', 'Sengiepongan'
                    ],
                    [
                        '7316082002', '731608', 'Buntu Barana'
                    ],
                    [
                        '7316082003', '731608', 'Buntu Pema'
                    ],
                    [
                        '7316082004', '731608', 'Parombean'
                    ],
                    [
                        '7316082005', '731608', 'Tallung Ura'
                    ],
                    [
                        '7316082006', '731608', 'Pebaloran'
                    ],
                    [
                        '7316082007', '731608', 'Curio'
                    ],
                    [
                        '7316082008', '731608', 'Mekkala'
                    ],
                    [
                        '7316082009', '731608', 'Sumbang'
                    ],
                    [
                        '7316082010', '731608', 'Mandalan'
                    ],
                    [
                        '7316082011', '731608', 'Salassa'
                    ],
                    [
                        '7316091001', '731609', 'Malua'
                    ],
                    [
                        '7316092002', '731609', 'Bonto'
                    ],
                    [
                        '7316092003', '731609', 'Tallung Tondok'
                    ],
                    [
                        '7316092004', '731609', 'Rante Mario'
                    ],
                    [
                        '7316092005', '731609', 'Tangru'
                    ],
                    [
                        '7316092006', '731609', 'Kolai'
                    ],
                    [
                        '7316092007', '731609', 'Dulang'
                    ],
                    [
                        '7316092008', '731609', 'Buntu Batuan'
                    ],
                    [
                        '7316102001', '731610', 'Pasui'
                    ],
                    [
                        '7316102002', '731610', 'Eran Batu'
                    ],
                    [
                        '7316102003', '731610', 'Latimojong'
                    ],
                    [
                        '7316102004', '731610', 'Buntu Mondong'
                    ],
                    [
                        '7316102005', '731610', 'Ledan'
                    ],
                    [
                        '7316102006', '731610', 'Lunjen'
                    ],
                    [
                        '7316102007', '731610', 'Langda'
                    ],
                    [
                        '7316102008', '731610', 'Potok Ullin'
                    ],
                    [
                        '7316112001', '731611', 'Masalle'
                    ],
                    [
                        '7316112003', '731611', 'Batu Kede'
                    ],
                    [
                        '7316112004', '731611', 'Mundan'
                    ],
                    [
                        '7316112006', '731611', 'Buntu Sarong'
                    ],
                    [
                        '7316112008', '731611', 'Rampunan'
                    ],
                    [
                        '7316112055', '731611', 'Tongkonan Basse'
                    ],
                    [
                        '7316122001', '731612', 'Baroko'
                    ],
                    [
                        '7316122002', '731612', 'Benteng Alla'
                    ],
                    [
                        '7316122003', '731612', 'Benteng Alla Utara'
                    ],
                    [
                        '7316122004', '731612', 'Tongko'
                    ],
                    [
                        '7316122005', '731612', 'Patongloan'
                    ],
                    [
                        '7317012005', '731701', 'Kanna'
                    ],
                    [
                        '7317012006', '731701', 'Kanna Utara'
                    ],
                    [
                        '7317012008', '731701', 'Tabi'
                    ],
                    [
                        '7317012010', '731701', 'Bolu'
                    ],
                    [
                        '7317012011', '731701', 'Lange'
                    ],
                    [
                        '7317012012', '731701', 'Sinaji'
                    ],
                    [
                        '7317012013', '731701', 'Mappetajang'
                    ],
                    [
                        '7317012016', '731701', 'Andulan'
                    ],
                    [
                        '7317012017', '731701', 'Buntu Batu'
                    ],
                    [
                        '7317012019', '731701', 'Ledan'
                    ],
                    [
                        '7317012020', '731701', 'Lissaga'
                    ],
                    [
                        '7317012022', '731701', 'Tolong'
                    ],
                    [
                        '7317021003', '731702', 'Larompong'
                    ],
                    [
                        '7317022001', '731702', 'Rantebelu'
                    ],
                    [
                        '7317022002', '731702', 'Komba'
                    ],
                    [
                        '7317022004', '731702', 'Lumaring'
                    ],
                    [
                        '7317022005', '731702', 'Binturu'
                    ],
                    [
                        '7317022006', '731702', 'Bilante'
                    ],
                    [
                        '7317022007', '731702', 'Rante Alang'
                    ],
                    [
                        '7317022008', '731702', 'Riwang'
                    ],
                    [
                        '7317022009', '731702', 'Buntu Matabing'
                    ],
                    [
                        '7317022010', '731702', 'Bukit Sutra'
                    ],
                    [
                        '7317022011', '731702', 'Riwang Selatan'
                    ],
                    [
                        '7317022012', '731702', 'Komba Selatan'
                    ],
                    [
                        '7317022013', '731702', 'Buntu Pasik'
                    ],
                    [
                        '7317031003', '731703', 'Suli'
                    ],
                    [
                        '7317032002', '731703', 'Murante'
                    ],
                    [
                        '7317032004', '731703', 'Malela'
                    ],
                    [
                        '7317032005', '731703', 'Botta'
                    ],
                    [
                        '7317032006', '731703', 'Cimpu'
                    ],
                    [
                        '7317032008', '731703', 'Buntu Kunyi'
                    ],
                    [
                        '7317032011', '731703', 'Padang Lambe'
                    ],
                    [
                        '7317032012', '731703', 'Kasiwiang'
                    ],
                    [
                        '7317032013', '731703', 'Cakkeawo'
                    ],
                    [
                        '7317032015', '731703', 'Lempopacci'
                    ],
                    [
                        '7317032016', '731703', 'Towondu'
                    ],
                    [
                        '7317032017', '731703', 'Cimpu Utara'
                    ],
                    [
                        '7317032018', '731703', 'Papakaju'
                    ],
                    [
                        '7317041005', '731704', 'Bajo'
                    ],
                    [
                        '7317042004', '731704', 'Rumaju'
                    ],
                    [
                        '7317042006', '731704', 'Sampa'
                    ],
                    [
                        '7317042007', '731704', 'Pangi'
                    ],
                    [
                        '7317042008', '731704', 'Tallang Bulawang'
                    ],
                    [
                        '7317042010', '731704', 'Jambu'
                    ],
                    [
                        '7317042013', '731704', 'Saga'
                    ],
                    [
                        '7317042014', '731704', 'Sumabu'
                    ],
                    [
                        '7317042015', '731704', 'Balla'
                    ],
                    [
                        '7317042017', '731704', 'Langkiddi'
                    ],
                    [
                        '7317042018', '731704', 'Samulang'
                    ],
                    [
                        '7317042019', '731704', 'Buntu Babang'
                    ],
                    [
                        '7317051001', '731705', 'Noling'
                    ],
                    [
                        '7317052002', '731705', 'Tanjong'
                    ],
                    [
                        '7317052003', '731705', 'Buntu Batu'
                    ],
                    [
                        '7317052004', '731705', 'Tampumia'
                    ],
                    [
                        '7317052005', '731705', 'Padang Tuju'
                    ],
                    [
                        '7317052006', '731705', 'Padang Kamburi'
                    ],
                    [
                        '7317052007', '731705', 'Malenggang'
                    ],
                    [
                        '7317052008', '731705', 'Balutan'
                    ],
                    [
                        '7317052009', '731705', 'Padang Mabud'
                    ],
                    [
                        '7317052010', '731705', 'Saluinduk'
                    ],
                    [
                        '7317061006', '731706', 'Bulo'
                    ],
                    [
                        '7317062001', '731706', 'Tombang'
                    ],
                    [
                        '7317062005', '731706', 'Lalong'
                    ],
                    [
                        '7317062008', '731706', 'Harapan'
                    ],
                    [
                        '7317062011', '731706', 'Barammamase'
                    ],
                    [
                        '7317062012', '731706', 'Walenrang'
                    ],
                    [
                        '7317062015', '731706', 'Saragi'
                    ],
                    [
                        '7317062021', '731706', 'Batusitanduk'
                    ],
                    [
                        '7317062022', '731706', 'Kalibamamase'
                    ],
                    [
                        '7317071001', '731707', 'Tampumia Radda'
                    ],
                    [
                        '7317071003', '731707', 'Tanamanai'
                    ],
                    [
                        '7317071005', '731707', 'Senga'
                    ],
                    [
                        '7317071007', '731707', 'Balo-Balo '
                    ],
                    [
                        '7317072004', '731707', 'Kurrusumanga'
                    ],
                    [
                        '7317072006', '731707', 'Belopa'
                    ],
                    [
                        '7317072014', '731707', 'Senga Selatan'
                    ],
                    [
                        '7317072015', '731707', 'Balubu'
                    ],
                    [
                        '7317072016', '731707', 'Pasamai'
                    ],
                    [
                        '7317081001', '731708', 'Sakti'
                    ],
                    [
                        '7317082002', '731708', 'Barowa'
                    ],
                    [
                        '7317082003', '731708', 'Puty'
                    ],
                    [
                        '7317082004', '731708', 'Raja'
                    ],
                    [
                        '7317082005', '731708', 'Posi'
                    ],
                    [
                        '7317082006', '731708', 'Karang-Karangan'
                    ],
                    [
                        '7317082007', '731708', 'Lare-Lare'
                    ],
                    [
                        '7317082008', '731708', 'Lengkong'
                    ],
                    [
                        '7317082009', '731708', 'Tiromanda'
                    ],
                    [
                        '7317082010', '731708', 'Tana Rigella'
                    ],
                    [
                        '7317082011', '731708', 'Bukit Harapan'
                    ],
                    [
                        '7317082012', '731708', 'Padang Kalua'
                    ],
                    [
                        '7317082013', '731708', 'Pammesakang'
                    ],
                    [
                        '7317082014', '731708', 'Pabbaresseng'
                    ],
                    [
                        '7317082015', '731708', 'Toddopuli'
                    ],
                    [
                        '7317091001', '731709', 'Lamasi'
                    ],
                    [
                        '7317092007', '731709', 'Salujambu'
                    ],
                    [
                        '7317092008', '731709', 'Wiwitan'
                    ],
                    [
                        '7317092010', '731709', 'Setiarejo'
                    ],
                    [
                        '7317092011', '731709', 'Pongsamelung'
                    ],
                    [
                        '7317092014', '731709', 'Padang Kalua'
                    ],
                    [
                        '7317092020', '731709', 'Topongo'
                    ],
                    [
                        '7317092022', '731709', 'Sepon'
                    ],
                    [
                        '7317092024', '731709', 'Awo Gading'
                    ],
                    [
                        '7317092026', '731709', 'Wiwitan Timur'
                    ],
                    [
                        '7317101001', '731710', 'Bone Pute'
                    ],
                    [
                        '7317102002', '731710', 'Temboe'
                    ],
                    [
                        '7317102003', '731710', 'Sampano'
                    ],
                    [
                        '7317102004', '731710', 'Babang'
                    ],
                    [
                        '7317102005', '731710', 'Laloa'
                    ],
                    [
                        '7317102006', '731710', 'Batulappa'
                    ],
                    [
                        '7317102007', '731710', 'Malewong'
                    ],
                    [
                        '7317102008', '731710', 'Salusana'
                    ],
                    [
                        '7317102009', '731710', 'Dadeko'
                    ],
                    [
                        '7317102010', '731710', 'Gandang Batu'
                    ],
                    [
                        '7317111001', '731711', 'Padang Subur'
                    ],
                    [
                        '7317111004', '731711', 'Padang Sappa'
                    ],
                    [
                        '7317112005', '731711', 'Tirowali'
                    ],
                    [
                        '7317112006', '731711', 'Mario'
                    ],
                    [
                        '7317112007', '731711', 'Muladimeng'
                    ],
                    [
                        '7317112013', '731711', 'Buntu Kamiri'
                    ],
                    [
                        '7317112014', '731711', 'Tumale'
                    ],
                    [
                        '7317112016', '731711', 'Buntu Nanna'
                    ],
                    [
                        '7317112017', '731711', 'Tampa'
                    ],
                    [
                        '7317112019', '731711', 'Parekaju'
                    ],
                    [
                        '7317122001', '731712', 'Rante Balla'
                    ],
                    [
                        '7317122002', '731712', 'Kadundung'
                    ],
                    [
                        '7317122003', '731712', 'Ulusalu'
                    ],
                    [
                        '7317122004', '731712', 'Lambanan'
                    ],
                    [
                        '7317122005', '731712', 'Tabang'
                    ],
                    [
                        '7317122006', '731712', 'Boneposi'
                    ],
                    [
                        '7317122007', '731712', 'Pangi'
                    ],
                    [
                        '7317122008', '731712', 'Pajang'
                    ],
                    [
                        '7317122009', '731712', 'Buntu Sarek'
                    ],
                    [
                        '7317122010', '731712', 'Tobarru'
                    ],
                    [
                        '7317122011', '731712', 'Tibussan'
                    ],
                    [
                        '7317122012', '731712', 'Tolajuk'
                    ],
                    [
                        '7317131001', '731713', 'Cilallang'
                    ],
                    [
                        '7317132002', '731713', 'Kamanre'
                    ],
                    [
                        '7317132003', '731713', 'Tabbaja'
                    ],
                    [
                        '7317132004', '731713', 'Libukang'
                    ],
                    [
                        '7317132005', '731713', 'Wara'
                    ],
                    [
                        '7317132006', '731713', 'Salu Paremang'
                    ],
                    [
                        '7317132007', '731713', 'Salu Paremang Selatan'
                    ],
                    [
                        '7317132008', '731713', 'Bunga Eja'
                    ],
                    [
                        '7317141001', '731714', 'Sabe'
                    ],
                    [
                        '7317141004', '731714', 'Pammanu '
                    ],
                    [
                        '7317142002', '731714', 'Lamunre'
                    ],
                    [
                        '7317142003', '731714', 'Lauwa'
                    ],
                    [
                        '7317142005', '731714', 'Seppong'
                    ],
                    [
                        '7317142006', '731714', 'Paconne'
                    ],
                    [
                        '7317142007', '731714', 'Lebani'
                    ],
                    [
                        '7317142008', '731714', 'Lamunre Tengah'
                    ],
                    [
                        '7317152001', '731715', 'Ilan Batu'
                    ],
                    [
                        '7317152002', '731715', 'Ilan Batu Uru'
                    ],
                    [
                        '7317152003', '731715', 'Lempe Pasang'
                    ],
                    [
                        '7317152004', '731715', 'Lamasi Hulu'
                    ],
                    [
                        '7317152005', '731715', 'Lempe'
                    ],
                    [
                        '7317152006', '731715', 'Lewandi'
                    ],
                    [
                        '7317161004', '731716', 'Bosso '
                    ],
                    [
                        '7317162001', '731716', 'Salutubu'
                    ],
                    [
                        '7317162002', '731716', 'Siteba'
                    ],
                    [
                        '7317162003', '731716', 'Bolong'
                    ],
                    [
                        '7317162005', '731716', 'Pongko'
                    ],
                    [
                        '7317162006', '731716', 'Buntu Awo'
                    ],
                    [
                        '7317162007', '731716', 'Marabuana'
                    ],
                    [
                        '7317162008', '731716', 'Salulino'
                    ],
                    [
                        '7317162009', '731716', 'Sangtandung'
                    ],
                    [
                        '7317162010', '731716', 'Bosso Timur'
                    ],
                    [
                        '7317162011', '731716', 'Limbong'
                    ],
                    [
                        '7317172001', '731717', 'Lamasi Pantai'
                    ],
                    [
                        '7317172002', '731717', 'Tanete'
                    ],
                    [
                        '7317172003', '731717', 'Rantai Damai'
                    ],
                    [
                        '7317172004', '731717', 'Tabah'
                    ],
                    [
                        '7317172005', '731717', 'Kendekan'
                    ],
                    [
                        '7317172006', '731717', 'Pangalli'
                    ],
                    [
                        '7317172007', '731717', 'Seba-Seba'
                    ],
                    [
                        '7317172008', '731717', 'Suka Damai'
                    ],
                    [
                        '7317182001', '731718', 'Pompengan'
                    ],
                    [
                        '7317182002', '731718', 'Bulolondong'
                    ],
                    [
                        '7317182003', '731718', 'Pompengan pantai'
                    ],
                    [
                        '7317182004', '731718', 'Seriti'
                    ],
                    [
                        '7317182005', '731718', 'Salupao'
                    ],
                    [
                        '7317182006', '731718', 'Tolemo'
                    ],
                    [
                        '7317182007', '731718', 'Pelalan'
                    ],
                    [
                        '7317182008', '731718', 'Pompengan Tengah'
                    ],
                    [
                        '7317182009', '731718', 'Pompengan Utara'
                    ],
                    [
                        '7317191002', '731719', 'Lindajang '
                    ],
                    [
                        '7317192001', '731719', 'Buntu Barana'
                    ],
                    [
                        '7317192003', '731719', 'Poringan'
                    ],
                    [
                        '7317192004', '731719', 'Salubua'
                    ],
                    [
                        '7317192005', '731719', 'Kaili'
                    ],
                    [
                        '7317192006', '731719', 'Muhajirin'
                    ],
                    [
                        '7317192007', '731719', 'Tallang'
                    ],
                    [
                        '7317192008', '731719', 'Kaladi Darussalam'
                    ],
                    [
                        '7317202001', '731720', 'Bonelemo'
                    ],
                    [
                        '7317202002', '731720', 'Sampeang'
                    ],
                    [
                        '7317202003', '731720', 'Marinding'
                    ],
                    [
                        '7317202004', '731720', 'Saronda'
                    ],
                    [
                        '7317202005', '731720', 'Kadong-Kadong'
                    ],
                    [
                        '7317202006', '731720', 'Tumbubara'
                    ],
                    [
                        '7317202007', '731720', 'Tettekang'
                    ],
                    [
                        '7317202008', '731720', 'Bonelemo Utara'
                    ],
                    [
                        '7317202009', '731720', 'Bonelemo Barat'
                    ],
                    [
                        '7317211005', '731721', 'Pattedong '
                    ],
                    [
                        '7317212001', '731721', 'Jenne Maeja'
                    ],
                    [
                        '7317212002', '731721', 'Bakti'
                    ],
                    [
                        '7317212003', '731721', 'Buntu Karya'
                    ],
                    [
                        '7317212004', '731721', 'Olang'
                    ],
                    [
                        '7317212006', '731721', 'Bassiang'
                    ],
                    [
                        '7317212007', '731721', 'Paccerakkang'
                    ],
                    [
                        '7317212008', '731721', 'Lampuara'
                    ],
                    [
                        '7317212009', '731721', 'Tobalo'
                    ],
                    [
                        '7317212010', '731721', 'Tobia'
                    ],
                    [
                        '7317212011', '731721', 'Bassiang Timur'
                    ],
                    [
                        '7317212012', '731721', 'Pattedong Selatan'
                    ],
                    [
                        '7317212013', '731721', 'Tarramatekkeng'
                    ],
                    [
                        '7317222001', '731722', 'Bonglo'
                    ],
                    [
                        '7317222002', '731722', 'Tede'
                    ],
                    [
                        '7317222003', '731722', 'Barana'
                    ],
                    [
                        '7317222004', '731722', 'Uraso'
                    ],
                    [
                        '7317222005', '731722', 'Karatuan'
                    ],
                    [
                        '7317222006', '731722', 'Salubua'
                    ],
                    [
                        '7317222007', '731722', 'Pantilang'
                    ],
                    [
                        '7317222008', '731722', 'Buntu Tallang'
                    ],
                    [
                        '7317222009', '731722', 'Dampan'
                    ],
                    [
                        '7317222010', '731722', 'Maindo'
                    ],
                    [
                        '7317222011', '731722', 'Tasangtongkonan'
                    ],
                    [
                        '7317222012', '731722', 'Taba'
                    ],
                    [
                        '7318011009', '731801', 'Pattan Ulusalu'
                    ],
                    [
                        '7318012010', '731801', 'Salutandung'
                    ],
                    [
                        '7318012011', '731801', 'Rea Tulak Langi'
                    ],
                    [
                        '7318012012', '731801', 'Ratte Talonge'
                    ],
                    [
                        '7318012013', '731801', 'Satandung'
                    ],
                    [
                        '7318012014', '731801', 'Rabung'
                    ],
                    [
                        '7318012015', '731801', 'Salu Tappoko'
                    ],
                    [
                        '7318012016', '731801', 'Salu Boronan'
                    ],
                    [
                        '7318012017', '731801', 'Batu Tiakka'
                    ],
                    [
                        '7318021006', '731802', 'Bittuang'
                    ],
                    [
                        '7318022002', '731802', 'Seseng'
                    ],
                    [
                        '7318022004', '731802', 'Pali'
                    ],
                    [
                        '7318022007', '731802', 'Tiroan'
                    ],
                    [
                        '7318022008', '731802', 'Balla'
                    ],
                    [
                        '7318022009', '731802', 'Letek'
                    ],
                    [
                        '7318022010', '731802', 'Kole Palian'
                    ],
                    [
                        '7318022011', '731802', 'Patongloan'
                    ],
                    [
                        '7318022012', '731802', 'Sasak'
                    ],
                    [
                        '7318022013', '731802', 'Bau'
                    ],
                    [
                        '7318022014', '731802', 'Sandana'
                    ],
                    [
                        '7318022015', '731802', 'Rembo Rembo'
                    ],
                    [
                        '7318022016', '731802', 'Burasia'
                    ],
                    [
                        '7318022017', '731802', 'Kandua'
                    ],
                    [
                        '7318022018', '731802', 'Buttu Limbong'
                    ],
                    [
                        '7318031007', '731803', 'Ratte Buttu'
                    ],
                    [
                        '7318032001', '731803', 'Bau'
                    ],
                    [
                        '7318032002', '731803', 'Buakayu'
                    ],
                    [
                        '7318032004', '731803', 'Mappa'
                    ],
                    [
                        '7318032006', '731803', 'Poton'
                    ],
                    [
                        '7318032008', '731803', 'Bau Selatan'
                    ],
                    [
                        '7318051003', '731805', 'Bombongan'
                    ],
                    [
                        '7318051005', '731805', 'Batupapan'
                    ],
                    [
                        '7318051006', '731805', 'Tarongko'
                    ],
                    [
                        '7318051007', '731805', 'Lamunan'
                    ],
                    [
                        '7318051009', '731805', 'Manggau'
                    ],
                    [
                        '7318051014', '731805', 'Tondon Mamullu'
                    ],
                    [
                        '7318051015', '731805', 'Pantan'
                    ],
                    [
                        '7318051016', '731805', 'Buntu Burake'
                    ],
                    [
                        '7318051017', '731805', 'Kamali Pentalluan'
                    ],
                    [
                        '7318051018', '731805', 'Rante'
                    ],
                    [
                        '7318051019', '731805', 'Lapandan'
                    ],
                    [
                        '7318051020', '731805', 'Tampo Makale'
                    ],
                    [
                        '7318051021', '731805', 'Ariang'
                    ],
                    [
                        '7318051022', '731805', 'Botang'
                    ],
                    [
                        '7318052023', '731805', 'Lea'
                    ],
                    [
                        '7318091008', '731809', 'Sima'
                    ],
                    [
                        '7318092003', '731809', 'Simbuang'
                    ],
                    [
                        '7318092004', '731809', 'Pongbembe'
                    ],
                    [
                        '7318092006', '731809', 'Simbuang Batutallu'
                    ],
                    [
                        '7318092009', '731809', 'Makkodo'
                    ],
                    [
                        '7318092010', '731809', 'Pongbembe Mesakada'
                    ],
                    [
                        '7318111003', '731811', 'Tapparan'
                    ],
                    [
                        '7318111012', '731811', 'Rantetayo'
                    ],
                    [
                        '7318111013', '731811', 'Padangiring'
                    ],
                    [
                        '7318112007', '731811', 'Madandan'
                    ],
                    [
                        '7318112011', '731811', 'Tapparan Utara'
                    ],
                    [
                        '7318112014', '731811', 'Tonglo'
                    ],
                    [
                        '7318121002', '731812', 'Rante Kalua'
                    ],
                    [
                        '7318121016', '731812', 'Tampo'
                    ],
                    [
                        '7318121023', '731812', 'Lemo'
                    ],
                    [
                        '7318121024', '731812', 'Tengan'
                    ],
                    [
                        '7318122004', '731812', 'Gasing'
                    ],
                    [
                        '7318122006', '731812', 'Uluway'
                    ],
                    [
                        '7318122012', '731812', 'Randanan'
                    ],
                    [
                        '7318122015', '731812', 'Buntu Tangti'
                    ],
                    [
                        '7318122017', '731812', 'Rante dada'
                    ],
                    [
                        '7318122018', '731812', 'Patengko'
                    ],
                    [
                        '7318122019', '731812', 'Simbuang'
                    ],
                    [
                        '7318122020', '731812', 'Pakala'
                    ],
                    [
                        '7318122021', '731812', 'Uluway Barat'
                    ],
                    [
                        '7318122022', '731812', 'Marinding'
                    ],
                    [
                        '7318122025', '731812', 'Palipu'
                    ],
                    [
                        '7318122026', '731812', 'Kepe Tinoring'
                    ],
                    [
                        '7318122027', '731812', 'Buntu Datu'
                    ],
                    [
                        '7318131009', '731813', 'Tongko Sarapung'
                    ],
                    [
                        '7318131010', '731813', 'Buntu Masakke'
                    ],
                    [
                        '7318132004', '731813', 'Bulian Massabu'
                    ],
                    [
                        '7318132006', '731813', 'Kaero'
                    ],
                    [
                        '7318132008', '731813', 'Turunan'
                    ],
                    [
                        '7318191002', '731819', 'Benteng Ambeso'
                    ],
                    [
                        '7318191004', '731819', 'Salubarani'
                    ],
                    [
                        '7318191012', '731819', 'Mebali'
                    ],
                    [
                        '7318192001', '731819', 'Buntu Limbong'
                    ],
                    [
                        '7318192003', '731819', 'Sillanan'
                    ],
                    [
                        '7318192005', '731819', 'Gandangbatu'
                    ],
                    [
                        '7318192006', '731819', 'Kaduaja'
                    ],
                    [
                        '7318192007', '731819', 'Garassik'
                    ],
                    [
                        '7318192008', '731819', 'Pemanukan'
                    ],
                    [
                        '7318192009', '731819', 'Perindingan'
                    ],
                    [
                        '7318192010', '731819', 'Buntu Tabang'
                    ],
                    [
                        '7318192011', '731819', 'Betteng Deata'
                    ],
                    [
                        '7318201001', '731820', 'Talion'
                    ],
                    [
                        '7318201013', '731820', 'Rembon'
                    ],
                    [
                        '7318202002', '731820', 'Palesan'
                    ],
                    [
                        '7318202003', '731820', 'Banga'
                    ],
                    [
                        '7318202004', '731820', 'Ullin'
                    ],
                    [
                        '7318202005', '731820', 'Limbong'
                    ],
                    [
                        '7318202006', '731820', 'Sarapeang'
                    ],
                    [
                        '7318202007', '731820', 'Buri'
                    ],
                    [
                        '7318202008', '731820', 'Maroson'
                    ],
                    [
                        '7318202009', '731820', 'Batusura'
                    ],
                    [
                        '7318202010', '731820', 'Bua  Tarrung'
                    ],
                    [
                        '7318202011', '731820', 'Topao'
                    ],
                    [
                        '7318202012', '731820', 'Kayuosing'
                    ],
                    [
                        '7318271001', '731827', 'Tambunan'
                    ],
                    [
                        '7318271002', '731827', 'Sarira'
                    ],
                    [
                        '7318271003', '731827', 'Bungin'
                    ],
                    [
                        '7318271004', '731827', 'Lion Tondok Iring'
                    ],
                    [
                        '7318271005', '731827', 'Lemo'
                    ],
                    [
                        '7318281004', '731828', 'Kondodewata'
                    ],
                    [
                        '7318282001', '731828', 'Tanete'
                    ],
                    [
                        '7318282002', '731828', 'Dewata'
                    ],
                    [
                        '7318282003', '731828', 'Miallo'
                    ],
                    [
                        '7318282005', '731828', 'Sengpeparikan'
                    ],
                    [
                        '7318282006', '731828', 'Butang'
                    ],
                    [
                        '7318291001', '731829', 'Tiromanda'
                    ],
                    [
                        '7318291002', '731829', 'Sandabilik'
                    ],
                    [
                        '7318291003', '731829', 'Tosapan'
                    ],
                    [
                        '7318291004', '731829', 'Pasang'
                    ],
                    [
                        '7318292005', '731829', 'Randan Batu'
                    ],
                    [
                        '7318292006', '731829', 'Patekke'
                    ],
                    [
                        '7318292007', '731829', 'Pabuaran'
                    ],
                    [
                        '7318292008', '731829', 'Bone Buntu Sisong'
                    ],
                    [
                        '7318312001', '731831', 'Ratte'
                    ],
                    [
                        '7318312002', '731831', 'Paliorong'
                    ],
                    [
                        '7318312003', '731831', 'Kadundung'
                    ],
                    [
                        '7318312004', '731831', 'Pondingao'
                    ],
                    [
                        '7318312005', '731831', 'Belau'
                    ],
                    [
                        '7318312006', '731831', 'Belau Utara'
                    ],
                    [
                        '7318312007', '731831', 'Paku'
                    ],
                    [
                        '7318312008', '731831', 'Sesesalu'
                    ],
                    [
                        '7318331005', '731833', 'Rante Alang'
                    ],
                    [
                        '7318332001', '731833', 'Batualu'
                    ],
                    [
                        '7318332002', '731833', 'Tokesan'
                    ],
                    [
                        '7318332003', '731833', 'Batualu Selatan'
                    ],
                    [
                        '7318332004', '731833', 'Raru Sibunuan'
                    ],
                    [
                        '7318341001', '731834', 'Leatung'
                    ],
                    [
                        '7318341006', '731834', 'Bebo'
                    ],
                    [
                        '7318342002', '731834', 'Rantelabi Kambisa'
                    ],
                    [
                        '7318342003', '731834', 'Leatung Matallo'
                    ],
                    [
                        '7318342004', '731834', 'Saluallo'
                    ],
                    [
                        '7318342005', '731834', 'Tumbang Datu'
                    ],
                    [
                        '7318351001', '731835', 'Malimbong'
                    ],
                    [
                        '7318352002', '731835', 'Leppan'
                    ],
                    [
                        '7318352003', '731835', 'Kole Sawangan'
                    ],
                    [
                        '7318352004', '731835', 'Kole Barebatu'
                    ],
                    [
                        '7318352005', '731835', 'Lemo Menduruk'
                    ],
                    [
                        '7318352006', '731835', 'Balepe'
                    ],
                    [
                        '7318372001', '731837', 'Rano'
                    ],
                    [
                        '7318372002', '731837', 'Rano Utara'
                    ],
                    [
                        '7318372003', '731837', 'Rumandan'
                    ],
                    [
                        '7318372004', '731837', 'Rano Tengah'
                    ],
                    [
                        '7318372005', '731837', 'Rano Timur'
                    ],
                    [
                        '7318381002', '731838', 'Bambalu'
                    ],
                    [
                        '7318382001', '731838', 'Rante Kurra'
                    ],
                    [
                        '7318382003', '731838', 'Maroson'
                    ],
                    [
                        '7318382004', '731838', 'Lipungan Tanete'
                    ],
                    [
                        '7318382005', '731838', 'Rante limbong'
                    ],
                    [
                        '7318382006', '731838', 'Limbong Sangpolo'
                    ],
                    [
                        '7322012001', '732201', 'Pattimang'
                    ],
                    [
                        '7322012002', '732201', 'Malangke'
                    ],
                    [
                        '7322012003', '732201', 'Benteng'
                    ],
                    [
                        '7322012004', '732201', 'Tolada'
                    ],
                    [
                        '7322012005', '732201', 'Salekoe'
                    ],
                    [
                        '7322012006', '732201', 'Pute Mata'
                    ],
                    [
                        '7322012007', '732201', 'Tingkara'
                    ],
                    [
                        '7322012008', '732201', 'Ladongi'
                    ],
                    [
                        '7322012009', '732201', 'Giri Kusuma'
                    ],
                    [
                        '7322012010', '732201', 'Tandung'
                    ],
                    [
                        '7322012011', '732201', 'Takkalala'
                    ],
                    [
                        '7322012012', '732201', 'Pettalandung'
                    ],
                    [
                        '7322012013', '732201', 'Tokke'
                    ],
                    [
                        '7322012014', '732201', 'Pince Pute'
                    ],
                    [
                        '7322021001', '732202', 'Bone Bone'
                    ],
                    [
                        '7322022002', '732202', 'Tamuku'
                    ],
                    [
                        '7322022007', '732202', 'Sidomukti'
                    ],
                    [
                        '7322022008', '732202', 'Sukaraya'
                    ],
                    [
                        '7322022011', '732202', 'Batang Tongka'
                    ],
                    [
                        '7322022012', '732202', 'Patoloan'
                    ],
                    [
                        '7322022015', '732202', 'Banyuurip'
                    ],
                    [
                        '7322022017', '732202', 'Pongko'
                    ],
                    [
                        '7322022018', '732202', 'Bantimurung'
                    ],
                    [
                        '7322022020', '732202', 'Muktisari'
                    ],
                    [
                        '7322022021', '732202', 'Sadar'
                    ],
                    [
                        '7322031001', '732203', 'Kappuna'
                    ],
                    [
                        '7322031002', '732203', 'Bone'
                    ],
                    [
                        '7322031003', '732203', 'Baliase'
                    ],
                    [
                        '7322031006', '732203', 'Bone Tua '
                    ],
                    [
                        '7322032004', '732203', 'Pincara'
                    ],
                    [
                        '7322032005', '732203', 'Balebo'
                    ],
                    [
                        '7322032007', '732203', 'Pombakka'
                    ],
                    [
                        '7322032008', '732203', 'Rompu'
                    ],
                    [
                        '7322032009', '732203', 'Lantang Tallang'
                    ],
                    [
                        '7322032010', '732203', 'Lapapa'
                    ],
                    [
                        '7322032011', '732203', 'Maipi'
                    ],
                    [
                        '7322032012', '732203', 'Masamba'
                    ],
                    [
                        '7322032013', '732203', 'Pandak'
                    ],
                    [
                        '7322032014', '732203', 'Sepakat'
                    ],
                    [
                        '7322032015', '732203', 'Pongo'
                    ],
                    [
                        '7322032016', '732203', 'Laba'
                    ],
                    [
                        '7322032017', '732203', 'Toradda'
                    ],
                    [
                        '7322032018', '732203', 'Sumilin'
                    ],
                    [
                        '7322032019', '732203', 'Kamiri'
                    ],
                    [
                        '7322041012', '732204', 'Marobo'
                    ],
                    [
                        '7322042002', '732204', 'Sabbang'
                    ],
                    [
                        '7322042003', '732204', 'Pararra'
                    ],
                    [
                        '7322042004', '732204', 'Tandung'
                    ],
                    [
                        '7322042007', '732204', 'Malimbu'
                    ],
                    [
                        '7322042008', '732204', 'Tullak Tallu'
                    ],
                    [
                        '7322042009', '732204', 'Bakka'
                    ],
                    [
                        '7322042014', '732204', 'Buntu Torpedo'
                    ],
                    [
                        '7322042018', '732204', 'Pengkendekan'
                    ],
                    [
                        '7322042020', '732204', 'Salama'
                    ],
                    [
                        '7322052001', '732205', 'Marampa'
                    ],
                    [
                        '7322052002', '732205', 'Pengkendekan'
                    ],
                    [
                        '7322052003', '732205', 'Kanandede'
                    ],
                    [
                        '7322052004', '732205', 'Rinding Allo'
                    ],
                    [
                        '7322052005', '732205', 'Minanga'
                    ],
                    [
                        '7322052006', '732205', 'Komba'
                    ],
                    [
                        '7322052007', '732205', 'Limbong'
                    ],
                    [
                        '7322062001', '732206', 'Lampuawa'
                    ],
                    [
                        '7322062002', '732206', 'Ketulungan'
                    ],
                    [
                        '7322062003', '732206', 'Salulemo'
                    ],
                    [
                        '7322062004', '732206', 'Kaluku'
                    ],
                    [
                        '7322062005', '732206', 'Sukamaju'
                    ],
                    [
                        '7322062006', '732206', 'Sukadamai'
                    ],
                    [
                        '7322062010', '732206', 'Tamboke'
                    ],
                    [
                        '7322062013', '732206', 'Tolangi'
                    ],
                    [
                        '7322062014', '732206', 'Tulung Indah'
                    ],
                    [
                        '7322062019', '732206', 'Minanga Tallu'
                    ],
                    [
                        '7322062020', '732206', 'Wonosari'
                    ],
                    [
                        '7322062021', '732206', 'Mulyasari'
                    ],
                    [
                        '7322062022', '732206', 'Saptamarga'
                    ],
                    [
                        '7322062024', '732206', 'Tulung Sari'
                    ],
                    [
                        '7322072001', '732207', 'Tirobali'
                    ],
                    [
                        '7322072002', '732207', 'Malimongan'
                    ],
                    [
                        '7322072003', '732207', 'Tanamakaleang'
                    ],
                    [
                        '7322072004', '732207', 'Padang Balua'
                    ],
                    [
                        '7322072005', '732207', 'Padang Raya'
                    ],
                    [
                        '7322072006', '732207', 'Embonatana'
                    ],
                    [
                        '7322072007', '732207', 'Hono'
                    ],
                    [
                        '7322072008', '732207', 'Beroppa'
                    ],
                    [
                        '7322072009', '732207', 'Lodang'
                    ],
                    [
                        '7322072010', '732207', 'Taloto'
                    ],
                    [
                        '7322072011', '732207', 'Hoyane'
                    ],
                    [
                        '7322072012', '732207', 'Marante'
                    ],
                    [
                        '7322082001', '732208', 'Cenning'
                    ],
                    [
                        '7322082002', '732208', 'Pengkajoang'
                    ],
                    [
                        '7322082003', '732208', 'Pao'
                    ],
                    [
                        '7322082004', '732208', 'Arusu'
                    ],
                    [
                        '7322082005', '732208', 'Baku Baku'
                    ],
                    [
                        '7322082006', '732208', 'Wara'
                    ],
                    [
                        '7322082007', '732208', 'Waelawi'
                    ],
                    [
                        '7322082008', '732208', 'Pembuniang'
                    ],
                    [
                        '7322082009', '732208', 'Limbong Wara'
                    ],
                    [
                        '7322082010', '732208', 'Kalitata'
                    ],
                    [
                        '7322082011', '732208', 'Pombakka'
                    ],
                    [
                        '7322082012', '732208', 'Polejiwa'
                    ],
                    [
                        '7322082013', '732208', 'Waetuo'
                    ],
                    [
                        '7322092001', '732209', 'Rampi'
                    ],
                    [
                        '7322092002', '732209', 'Onondowa'
                    ],
                    [
                        '7322092003', '732209', 'Leboni'
                    ],
                    [
                        '7322092004', '732209', 'Dodolo'
                    ],
                    [
                        '7322092005', '732209', 'Sulaku'
                    ],
                    [
                        '7322092006', '732209', 'Tedeboe'
                    ],
                    [
                        '7322102001', '732210', 'Mappedeceng'
                    ],
                    [
                        '7322102002', '732210', 'Cendana Putih'
                    ],
                    [
                        '7322102003', '732210', 'Hasana'
                    ],
                    [
                        '7322102004', '732210', 'Kapidi'
                    ],
                    [
                        '7322102005', '732210', 'Uraso'
                    ],
                    [
                        '7322102006', '732210', 'Benteng'
                    ],
                    [
                        '7322102007', '732210', 'Ujung Mattajang'
                    ],
                    [
                        '7322102009', '732210', 'Cendana Putih I'
                    ],
                    [
                        '7322102010', '732210', 'Sumber Wangi'
                    ],
                    [
                        '7322102011', '732210', 'Mangalle'
                    ],
                    [
                        '7322102012', '732210', 'Mekar Jaya Tondok'
                    ],
                    [
                        '7322102013', '732210', 'Cendana Putih II'
                    ],
                    [
                        '7322102014', '732210', 'Sumber Harum'
                    ],
                    [
                        '7322102015', '732210', 'Tarrak Tallu'
                    ],
                    [
                        '7322102016', '732210', 'Harapan'
                    ],
                    [
                        '7322111005', '732211', 'Salassa '
                    ],
                    [
                        '7322112002', '732211', 'Salulemo'
                    ],
                    [
                        '7322112003', '732211', 'Radda'
                    ],
                    [
                        '7322112004', '732211', 'Baebunta'
                    ],
                    [
                        '7322112007', '732211', 'Tarobok'
                    ],
                    [
                        '7322112008', '732211', 'Mario'
                    ],
                    [
                        '7322112009', '732211', 'Sassa'
                    ],
                    [
                        '7322112010', '732211', 'Kariango'
                    ],
                    [
                        '7322112011', '732211', 'Meli'
                    ],
                    [
                        '7322112013', '732211', 'Palandan'
                    ],
                    [
                        '7322112015', '732211', 'Bumi Harapan'
                    ],
                    [
                        '7322122001', '732212', 'Bungapati'
                    ],
                    [
                        '7322122002', '732212', 'Bungadidi'
                    ],
                    [
                        '7322122003', '732212', 'Poreang'
                    ],
                    [
                        '7322122004', '732212', 'Sumberdadi'
                    ],
                    [
                        '7322122005', '732212', 'Patila'
                    ],
                    [
                        '7322122006', '732212', 'Sidobinangun'
                    ],
                    [
                        '7322122007', '732212', 'Rampoang'
                    ],
                    [
                        '7322122008', '732212', 'Karondang'
                    ],
                    [
                        '7322122009', '732212', 'Munte'
                    ],
                    [
                        '7322122010', '732212', 'Sidomakmur'
                    ],
                    [
                        '7322132001', '732213', 'Mulyorejo'
                    ],
                    [
                        '7322132002', '732213', 'Rawamangun'
                    ],
                    [
                        '7322132003', '732213', 'Paomacang'
                    ],
                    [
                        '7322132004', '732213', 'Wonokerto'
                    ],
                    [
                        '7322132005', '732213', 'Sumber Baru'
                    ],
                    [
                        '7322132006', '732213', 'Banyuwangi'
                    ],
                    [
                        '7322132007', '732213', 'Subur'
                    ],
                    [
                        '7322132008', '732213', 'Lino'
                    ],
                    [
                        '7322132009', '732213', 'Sidoraharjo'
                    ],
                    [
                        '7322132010', '732213', 'Sukamukti'
                    ],
                    [
                        '7322132011', '732213', 'Suka Harapan'
                    ],
                    [
                        '7322142001', '732214', 'Lara'
                    ],
                    [
                        '7322142002', '732214', 'Marannu'
                    ],
                    [
                        '7322142003', '732214', 'Beringin Jaya'
                    ],
                    [
                        '7322142004', '732214', 'Mukti Jaya'
                    ],
                    [
                        '7322142005', '732214', 'Mekar Sari Jaya'
                    ],
                    [
                        '7322142006', '732214', 'Mukti Tama'
                    ],
                    [
                        '7322142007', '732214', 'Lembang-Lembang'
                    ],
                    [
                        '7322142008', '732214', 'Lawewe'
                    ],
                    [
                        '7322142009', '732214', 'Polewali'
                    ],
                    [
                        '7322142010', '732214', 'Sumpira'
                    ],
                    [
                        '7322152001', '732215', 'Buangin'
                    ],
                    [
                        '7322152002', '732215', 'Torpedo Jaya'
                    ],
                    [
                        '7322152003', '732215', 'Dandang'
                    ],
                    [
                        '7322152004', '732215', 'Kampung Baru'
                    ],
                    [
                        '7322152005', '732215', 'Teteuri'
                    ],
                    [
                        '7322152006', '732215', 'Kalotok'
                    ],
                    [
                        '7322152007', '732215', 'Batu Alang'
                    ],
                    [
                        '7322152008', '732215', 'Bone Subur'
                    ],
                    [
                        '7322152009', '732215', 'Pompaniki'
                    ],
                    [
                        '7322152010', '732215', 'Mari-Mari'
                    ],
                    [
                        '7324012001', '732401', 'Maleku'
                    ],
                    [
                        '7324012002', '732401', 'Wonorejo'
                    ],
                    [
                        '7324012003', '732401', 'Margolembo'
                    ],
                    [
                        '7324012004', '732401', 'Teromu'
                    ],
                    [
                        '7324012007', '732401', 'Manggala'
                    ],
                    [
                        '7324012009', '732401', 'Kasintuwu'
                    ],
                    [
                        '7324012011', '732401', 'Balai Kembang'
                    ],
                    [
                        '7324012013', '732401', 'Panca Karsa'
                    ],
                    [
                        '7324012014', '732401', 'Sindu Agung'
                    ],
                    [
                        '7324012015', '732401', 'Wonorejo Timur'
                    ],
                    [
                        '7324012016', '732401', 'Koroncia'
                    ],
                    [
                        '7324021007', '732402', 'Magani '
                    ],
                    [
                        '7324022001', '732402', 'Nuha'
                    ],
                    [
                        '7324022003', '732402', 'Nikkel'
                    ],
                    [
                        '7324022005', '732402', 'Matano'
                    ],
                    [
                        '7324022009', '732402', 'Sorowako'
                    ],
                    [
                        '7324032001', '732403', 'Loeha'
                    ],
                    [
                        '7324032002', '732403', 'Mahalona'
                    ],
                    [
                        '7324032003', '732403', 'Timampu'
                    ],
                    [
                        '7324032004', '732403', 'Wawondula'
                    ],
                    [
                        '7324032005', '732403', 'Langkae Raya'
                    ],
                    [
                        '7324032006', '732403', 'Tokalimbo'
                    ],
                    [
                        '7324032007', '732403', 'Baruga'
                    ],
                    [
                        '7324032008', '732403', 'Pekaloa'
                    ],
                    [
                        '7324032009', '732403', 'Lioka'
                    ],
                    [
                        '7324032010', '732403', 'Asuli'
                    ],
                    [
                        '7324032011', '732403', 'Bantilang'
                    ],
                    [
                        '7324032012', '732403', 'Masiku'
                    ],
                    [
                        '7324032013', '732403', 'Rante Angin'
                    ],
                    [
                        '7324032014', '732403', 'Matompi'
                    ],
                    [
                        '7324032015', '732403', 'Tole'
                    ],
                    [
                        '7324032016', '732403', 'Libukan Mandiri'
                    ],
                    [
                        '7324032017', '732403', 'Kalosi'
                    ],
                    [
                        '7324032018', '732403', 'Buangin'
                    ],
                    [
                        '7324041003', '732404', 'Malili '
                    ],
                    [
                        '7324042001', '732404', 'Harapan'
                    ],
                    [
                        '7324042002', '732404', 'Laskap'
                    ],
                    [
                        '7324042004', '732404', 'Manurung'
                    ],
                    [
                        '7324042005', '732404', 'Wewangriu'
                    ],
                    [
                        '7324042006', '732404', 'Baruga'
                    ],
                    [
                        '7324042007', '732404', 'Lakawali'
                    ],
                    [
                        '7324042008', '732404', 'Ussu'
                    ],
                    [
                        '7324042009', '732404', 'Tarabbi'
                    ],
                    [
                        '7324042010', '732404', 'Balantang'
                    ],
                    [
                        '7324042011', '732404', 'Atue'
                    ],
                    [
                        '7324042012', '732404', 'Pongkeru'
                    ],
                    [
                        '7324042013', '732404', 'Puncak Indah'
                    ],
                    [
                        '7324042014', '732404', 'Pasi-Pasi'
                    ],
                    [
                        '7324042015', '732404', 'Lakawali Pantai'
                    ],
                    [
                        '7324052001', '732405', 'Tawakua'
                    ],
                    [
                        '7324052002', '732405', 'Tampinna'
                    ],
                    [
                        '7324052003', '732405', 'Solo'
                    ],
                    [
                        '7324052004', '732405', 'Taripa'
                    ],
                    [
                        '7324052005', '732405', 'Mantadulu'
                    ],
                    [
                        '7324052006', '732405', 'Balirejo'
                    ],
                    [
                        '7324052007', '732405', 'Maliwowo'
                    ],
                    [
                        '7324052008', '732405', 'Lamaeto'
                    ],
                    [
                        '7324052009', '732405', 'Watangpanua'
                    ],
                    [
                        '7324052010', '732405', 'Wanasari'
                    ],
                    [
                        '7324062001', '732406', 'Lampenai'
                    ],
                    [
                        '7324062002', '732406', 'Tarengge'
                    ],
                    [
                        '7324062003', '732406', 'Maramba'
                    ],
                    [
                        '7324062004', '732406', 'Cendana Hijau'
                    ],
                    [
                        '7324062005', '732406', 'Bawalipu'
                    ],
                    [
                        '7324062006', '732406', 'Kalaena'
                    ],
                    [
                        '7324062007', '732406', 'Lera'
                    ],
                    [
                        '7324062008', '732406', 'Kanawatu'
                    ],
                    [
                        '7324062009', '732406', 'Bahari'
                    ],
                    [
                        '7324062010', '732406', 'Karambua'
                    ],
                    [
                        '7324062011', '732406', 'Pepuro Barat'
                    ],
                    [
                        '7324062012', '732406', 'Balobalo'
                    ],
                    [
                        '7324062013', '732406', 'Rinjani'
                    ],
                    [
                        '7324062014', '732406', 'Tarengge Timur'
                    ],
                    [
                        '7324062015', '732406', 'Madani'
                    ],
                    [
                        '7324062016', '732406', 'Tabaroge'
                    ],
                    [
                        '7324072001', '732407', 'Burau'
                    ],
                    [
                        '7324072002', '732407', 'Jalajja'
                    ],
                    [
                        '7324072003', '732407', 'Lewonu'
                    ],
                    [
                        '7324072004', '732407', 'Lambarese'
                    ],
                    [
                        '7324072005', '732407', 'Lauwo'
                    ],
                    [
                        '7324072006', '732407', 'Bone Pute'
                    ],
                    [
                        '7324072007', '732407', 'Lumbewe'
                    ],
                    [
                        '7324072008', '732407', 'Mabonta'
                    ],
                    [
                        '7324072009', '732407', 'Laro'
                    ],
                    [
                        '7324072010', '732407', 'Benteng'
                    ],
                    [
                        '7324072011', '732407', 'Batu Putih'
                    ],
                    [
                        '7324072012', '732407', 'Lanosi'
                    ],
                    [
                        '7324072013', '732407', 'Lagego'
                    ],
                    [
                        '7324072014', '732407', 'Cendana'
                    ],
                    [
                        '7324072015', '732407', 'Burau Pantai'
                    ],
                    [
                        '7324072016', '732407', 'Asana'
                    ],
                    [
                        '7324072017', '732407', 'Kalatiri'
                    ],
                    [
                        '7324072018', '732407', 'Lambara Harapan'
                    ],
                    [
                        '7324081003', '732408', 'Tomoni '
                    ],
                    [
                        '7324082001', '732408', 'Bayondo'
                    ],
                    [
                        '7324082002', '732408', 'Mulyasri'
                    ],
                    [
                        '7324082007', '732408', 'Lestari'
                    ],
                    [
                        '7324082008', '732408', 'Kalpataru'
                    ],
                    [
                        '7324082011', '732408', 'Tadulako'
                    ],
                    [
                        '7324082012', '732408', 'Beringin Jaya'
                    ],
                    [
                        '7324082015', '732408', 'Bangun Jaya'
                    ],
                    [
                        '7324082016', '732408', 'Mandiri'
                    ],
                    [
                        '7324082017', '732408', 'Sumber Alam'
                    ],
                    [
                        '7324082018', '732408', 'Ujung Baru'
                    ],
                    [
                        '7324082019', '732408', 'Bangun Karya'
                    ],
                    [
                        '7324082020', '732408', 'Rante Mario'
                    ],
                    [
                        '7324092001', '732409', 'Kertoraharjo'
                    ],
                    [
                        '7324092002', '732409', 'Cendana Hitam'
                    ],
                    [
                        '7324092003', '732409', 'Purwosari'
                    ],
                    [
                        '7324092004', '732409', 'Pattengko'
                    ],
                    [
                        '7324092005', '732409', 'Manunggal'
                    ],
                    [
                        '7324092006', '732409', 'Margomulyo'
                    ],
                    [
                        '7324092007', '732409', 'Alam Buana'
                    ],
                    [
                        '7324092008', '732409', 'Cendana Hitam Timur'
                    ],
                    [
                        '7324102001', '732410', 'Kalaena Kiri'
                    ],
                    [
                        '7324102002', '732410', 'Sumber Agung'
                    ],
                    [
                        '7324102003', '732410', 'Pertasi Kencana'
                    ],
                    [
                        '7324102004', '732410', 'Non Blok'
                    ],
                    [
                        '7324102005', '732410', 'Argomulyo'
                    ],
                    [
                        '7324102006', '732410', 'Sumber Makmur'
                    ],
                    [
                        '7324102007', '732410', 'Mekar Sari'
                    ],
                    [
                        '7324112001', '732411', 'Ledu Ledu'
                    ],
                    [
                        '7324112002', '732411', 'Kawata'
                    ],
                    [
                        '7324112003', '732411', 'Tabarano'
                    ],
                    [
                        '7324112004', '732411', 'Wasuponda'
                    ],
                    [
                        '7324112005', '732411', 'Parumpanai'
                    ],
                    [
                        '7324112006', '732411', 'Balambano'
                    ],
                    [
                        '7326011001', '732601', 'Laang Tanduk'
                    ],
                    [
                        '7326011002', '732601', 'Rantepao'
                    ],
                    [
                        '7326011003', '732601', 'Mentirotiku'
                    ],
                    [
                        '7326011004', '732601', 'Manggalo'
                    ],
                    [
                        '7326011005', '732601', 'Pasale'
                    ],
                    [
                        '7326011006', '732601', 'Singki'
                    ],
                    [
                        '7326011007', '732601', 'Karassik'
                    ],
                    [
                        '7326011008', '732601', 'Penanian'
                    ],
                    [
                        '7326011009', '732601', 'Rante Pasele'
                    ],
                    [
                        '7326012010', '732601', 'Limbong'
                    ],
                    [
                        '7326012011', '732601', 'Saloso'
                    ],
                    [
                        '7326021001', '732602', 'Bori'
                    ],
                    [
                        '7326021002', '732602', 'Pangli'
                    ],
                    [
                        '7326021004', '732602', 'Palawa'
                    ],
                    [
                        '7326021005', '732602', 'Deri'
                    ],
                    [
                        '7326021009', '732602', 'Pangli Selatan'
                    ],
                    [
                        '7326022003', '732602', 'Buntu Lobo'
                    ],
                    [
                        '7326022006', '732602', 'Parinding'
                    ],
                    [
                        '7326022007', '732602', 'Bori Ranteletok'
                    ],
                    [
                        '7326022008', '732602', 'Bori Lombongan'
                    ],
                    [
                        '7326031004', '732603', 'Nanggala Sanpiak Salu'
                    ],
                    [
                        '7326032001', '732603', 'Nanggala'
                    ],
                    [
                        '7326032002', '732603', 'Tandung Nanggala'
                    ],
                    [
                        '7326032003', '732603', 'Lilikira'
                    ],
                    [
                        '7326032005', '732603', 'Karre Limbong'
                    ],
                    [
                        '7326032006', '732603', 'Rante'
                    ],
                    [
                        '7326032007', '732603', 'Basokan'
                    ],
                    [
                        '7326032008', '732603', 'Nanna Nanggala'
                    ],
                    [
                        '7326032009', '732603', 'Karre Pananian'
                    ],
                    [
                        '7326041002', '732604', 'Pangala'
                    ],
                    [
                        '7326041004', '732604', 'Pangala Utara'
                    ],
                    [
                        '7326042001', '732604', 'Bululangkan'
                    ],
                    [
                        '7326042003', '732604', 'Rindingallo'
                    ],
                    [
                        '7326042005', '732604', 'Maiting'
                    ],
                    [
                        '7326042006', '732604', 'Lokouru Tanetebatu'
                    ],
                    [
                        '7326042007', '732604', 'Ampang Batu'
                    ],
                    [
                        '7326042008', '732604', 'Lempo Poton'
                    ],
                    [
                        '7326042009', '732604', 'Buntu Batu'
                    ],
                    [
                        '7326051005', '732605', 'Tullang Sura'
                    ],
                    [
                        '7326051006', '732605', 'Tongkonan Bassae'
                    ],
                    [
                        '7326052001', '732605', 'Sapan Kua-kua'
                    ],
                    [
                        '7326052002', '732605', 'Rindingkila'
                    ],
                    [
                        '7326052003', '732605', 'Misababana'
                    ],
                    [
                        '7326052004', '732605', 'Issong Kalua'
                    ],
                    [
                        '7326061002', '732606', 'Sadan Malimbong'
                    ],
                    [
                        '7326061004', '732606', 'Sadan Matalo'
                    ],
                    [
                        '7326062001', '732606', 'Sadan Ulusalu'
                    ],
                    [
                        '7326062003', '732606', 'Sadan Balong Pasange'
                    ],
                    [
                        '7326062005', '732606', 'Sadan Pebulian'
                    ],
                    [
                        '7326062006', '732606', 'Sangkaropi'
                    ],
                    [
                        '7326062007', '732606', 'Sadan Tiroallo'
                    ],
                    [
                        '7326062008', '732606', 'Sadan Andulan'
                    ],
                    [
                        '7326062009', '732606', 'Sadan Pesondongan'
                    ],
                    [
                        '7326062010', '732606', 'Sadan Liku Lambe'
                    ],
                    [
                        '7326071006', '732607', 'Paepalean'
                    ],
                    [
                        '7326072001', '732607', 'Labo'
                    ],
                    [
                        '7326072002', '732607', 'Buntu Labo'
                    ],
                    [
                        '7326072003', '732607', 'Tallung Penanian'
                    ],
                    [
                        '7326072004', '732607', 'Patapadang'
                    ],
                    [
                        '7326072005', '732607', 'Tandung Labo'
                    ],
                    [
                        '7326081002', '732608', 'Nonongan Utara'
                    ],
                    [
                        '7326082001', '732608', 'Salu'
                    ],
                    [
                        '7326082003', '732608', 'Salu Sopai'
                    ],
                    [
                        '7326082004', '732608', 'Tombang Langda'
                    ],
                    [
                        '7326082005', '732608', 'Marante'
                    ],
                    [
                        '7326082006', '732608', 'Langda'
                    ],
                    [
                        '7326082007', '732608', 'Nonongan Selatan'
                    ],
                    [
                        '7326082008', '732608', 'Salu Sarre'
                    ],
                    [
                        '7326091001', '732609', 'Tikala'
                    ],
                    [
                        '7326091002', '732609', 'Buntu Barana'
                    ],
                    [
                        '7326092003', '732609', 'Buntu Batu'
                    ],
                    [
                        '7326092004', '732609', 'Sereale'
                    ],
                    [
                        '7326092005', '732609', 'Embatau'
                    ],
                    [
                        '7326092006', '732609', 'Benteng Kado Torea'
                    ],
                    [
                        '7326092007', '732609', 'Pangden'
                    ],
                    [
                        '7326101002', '732610', 'Tagari'
                    ],
                    [
                        '7326101005', '732610', 'Balusu'
                    ],
                    [
                        '7326102001', '732610', 'Palangi'
                    ],
                    [
                        '7326102003', '732610', 'Lilikira Aogading'
                    ],
                    [
                        '7326102004', '732610', 'Karua'
                    ],
                    [
                        '7326102006', '732610', 'Awa Kawasik'
                    ],
                    [
                        '7326102007', '732610', 'Balusu Bangunlipu'
                    ],
                    [
                        '7326111001', '732611', 'Tallunglipu Matalo'
                    ],
                    [
                        '7326111002', '732611', 'Tallunglipu'
                    ],
                    [
                        '7326111003', '732611', 'Tampo Tallunglipu'
                    ],
                    [
                        '7326111004', '732611', 'Tagari Tallunglipu'
                    ],
                    [
                        '7326111005', '732611', 'Tantanan Tallunglipu'
                    ],
                    [
                        '7326111007', '732611', 'Rante PakuTallunglipu'
                    ],
                    [
                        '7326112006', '732611', 'Buntu Tallunglipu'
                    ],
                    [
                        '7326121004', '732612', 'Pasang'
                    ],
                    [
                        '7326122001', '732612', 'Madong'
                    ],
                    [
                        '7326122002', '732612', 'Dende'
                    ],
                    [
                        '7326122003', '732612', 'Piongan'
                    ],
                    [
                        '7326122005', '732612', 'Paku'
                    ],
                    [
                        '7326122006', '732612', 'Kapolang'
                    ],
                    [
                        '7326122007', '732612', 'Buntu Tagari'
                    ],
                    [
                        '7326122008', '732612', 'Parinding'
                    ],
                    [
                        '7326131002', '732613', 'Sapan'
                    ],
                    [
                        '7326132001', '732613', 'Buntu Minanga'
                    ],
                    [
                        '7326132003', '732613', 'Sarambu'
                    ],
                    [
                        '7326132004', '732613', 'Rante Uma'
                    ],
                    [
                        '7326132005', '732613', 'Talimbangan'
                    ],
                    [
                        '7326132006', '732613', 'Pulu Pulu'
                    ],
                    [
                        '7326132007', '732613', 'Paonganan'
                    ],
                    [
                        '7326132008', '732613', 'Parandangan'
                    ],
                    [
                        '7326132009', '732613', 'Roroan Barra-Barra'
                    ],
                    [
                        '7326132010', '732613', 'Pangkung Batu'
                    ],
                    [
                        '7326132011', '732613', 'Pengkoroan Manuk'
                    ],
                    [
                        '7326132012', '732613', 'Batu Busa'
                    ],
                    [
                        '7326132013', '732613', 'Ponglu'
                    ],
                    [
                        '7326141002', '732614', 'Baruppu Selatan'
                    ],
                    [
                        '7326142001', '732614', 'Baruppu Utara'
                    ],
                    [
                        '7326142003', '732614', 'Baruppu Benteng Batu'
                    ],
                    [
                        '7326142004', '732614', 'Baruppu Parodo'
                    ],
                    [
                        '7326151003', '732615', 'Batan'
                    ],
                    [
                        '7326151004', '732615', 'Pantanakan Lolo'
                    ],
                    [
                        '7326152001', '732615', 'Tallu Lodo'
                    ],
                    [
                        '7326152002', '732615', 'Rinding Batu'
                    ],
                    [
                        '7326152005', '732615', 'Angin-angin'
                    ],
                    [
                        '7326152006', '732615', 'Sangbua'
                    ],
                    [
                        '7326152007', '732615', 'Tadongkon'
                    ],
                    [
                        '7326162001', '732616', 'Tondon Langi'
                    ],
                    [
                        '7326162002', '732616', 'Tondon'
                    ],
                    [
                        '7326162003', '732616', 'Tondon Sibata'
                    ],
                    [
                        '7326162004', '732616', 'Tondon Matallo'
                    ],
                    [
                        '7326172001', '732617', 'Toyasa Akung'
                    ],
                    [
                        '7326172002', '732617', 'Batu Limbong'
                    ],
                    [
                        '7326172003', '732617', 'Bangkelekilla'
                    ],
                    [
                        '7326172004', '732617', 'Tampan Bonga'
                    ],
                    [
                        '7326181002', '732618', 'Bokin'
                    ],
                    [
                        '7326181005', '732618', 'Buangin'
                    ],
                    [
                        '7326182001', '732618', 'Rantebua'
                    ],
                    [
                        '7326182003', '732618', 'Pitung Penanian'
                    ],
                    [
                        '7326182004', '732618', 'Makuan Pare'
                    ],
                    [
                        '7326182006', '732618', 'Rantebua Sumalu'
                    ],
                    [
                        '7326182007', '732618', 'Rantebua Sanggalangi'
                    ],
                    [
                        '7326192001', '732619', 'Suloara'
                    ],
                    [
                        '7326192002', '732619', 'Sesean Matallo'
                    ],
                    [
                        '7326192003', '732619', 'Landorundun'
                    ],
                    [
                        '7326192004', '732619', 'Tonga Riu'
                    ],
                    [
                        '7326192005', '732619', 'Lempo'
                    ],
                    [
                        '7326202001', '732620', 'Benteng Kado'
                    ],
                    [
                        '7326202002', '732620', 'Sikuku'
                    ],
                    [
                        '7326202003', '732620', 'Polo Padang'
                    ],
                    [
                        '7326202004', '732620', 'Kantun Poya'
                    ],
                    [
                        '7326202005', '732620', 'Kapala Pitu'
                    ],
                    [
                        '7326202006', '732620', 'Benteng Mamullu'
                    ],
                    [
                        '7326212001', '732621', 'Awan'
                    ],
                    [
                        '7326212002', '732621', 'Batu Lotong'
                    ],
                    [
                        '7326212003', '732621', 'Buntu Karua'
                    ],
                    [
                        '7326212004', '732621', 'Londong Biang'
                    ],
                    [
                        '7371011001', '737101', 'Bontorannu'
                    ],
                    [
                        '7371011002', '737101', 'Mattoangin'
                    ],
                    [
                        '7371011003', '737101', 'Kunjung Mae'
                    ],
                    [
                        '7371011004', '737101', 'Lette'
                    ],
                    [
                        '7371011005', '737101', 'Panambungan'
                    ],
                    [
                        '7371011006', '737101', 'Mariso'
                    ],
                    [
                        '7371011007', '737101', 'Mario'
                    ],
                    [
                        '7371011008', '737101', 'Kampung Buyang'
                    ],
                    [
                        '7371011009', '737101', 'Tamarunang'
                    ],
                    [
                        '7371021001', '737102', 'Sambung Jawa'
                    ],
                    [
                        '7371021002', '737102', 'Parang'
                    ],
                    [
                        '7371021003', '737102', 'Mamajang Luar'
                    ],
                    [
                        '7371021004', '737102', 'Mamajang Dalam'
                    ],
                    [
                        '7371021005', '737102', 'Maricaya Selatan'
                    ],
                    [
                        '7371021006', '737102', 'Bonto Lebang'
                    ],
                    [
                        '7371021007', '737102', 'Pabatang'
                    ],
                    [
                        '7371021008', '737102', 'Bonto Biraeng'
                    ],
                    [
                        '7371021009', '737102', 'Labuang Baji'
                    ],
                    [
                        '7371021010', '737102', 'Mandala'
                    ],
                    [
                        '7371021011', '737102', 'Tamparang Keke'
                    ],
                    [
                        '7371021012', '737102', 'Baji Mappakasunggu'
                    ],
                    [
                        '7371021013', '737102', 'Karang Anyar'
                    ],
                    [
                        '7371031001', '737103', 'Maricaya'
                    ],
                    [
                        '7371031002', '737103', 'Bara Baraya'
                    ],
                    [
                        '7371031003', '737103', 'Maradekaya'
                    ],
                    [
                        '7371031004', '737103', 'Lariangbangi'
                    ],
                    [
                        '7371031005', '737103', 'Maccini'
                    ],
                    [
                        '7371031006', '737103', 'Maricaya Baru'
                    ],
                    [
                        '7371031007', '737103', 'Bara Baraya Timur'
                    ],
                    [
                        '7371031008', '737103', 'Bara Baraya Selatan'
                    ],
                    [
                        '7371031009', '737103', 'Maradekaya Selatan'
                    ],
                    [
                        '7371031010', '737103', 'Barana'
                    ],
                    [
                        '7371031011', '737103', 'Maccini Parang'
                    ],
                    [
                        '7371031012', '737103', 'Maccini Gusung'
                    ],
                    [
                        '7371031013', '737103', 'Maradekaya Utara'
                    ],
                    [
                        '7371031014', '737103', 'Bara Baraya Utara'
                    ],
                    [
                        '7371041001', '737104', 'Maloku'
                    ],
                    [
                        '7371041002', '737104', 'Mangkura'
                    ],
                    [
                        '7371041003', '737104', 'Pisang Selatan'
                    ],
                    [
                        '7371041004', '737104', 'Pisang Utara'
                    ],
                    [
                        '7371041005', '737104', 'Baru'
                    ],
                    [
                        '7371041006', '737104', 'Bulogading'
                    ],
                    [
                        '7371041007', '737104', 'Lae-Lae'
                    ],
                    [
                        '7371041008', '737104', 'Losari'
                    ],
                    [
                        '7371041009', '737104', 'Sawerigading'
                    ],
                    [
                        '7371041010', '737104', 'Lajangiru'
                    ],
                    [
                        '7371051001', '737105', 'Pattunuang'
                    ],
                    [
                        '7371051002', '737105', 'Melayu'
                    ],
                    [
                        '7371051003', '737105', 'Butung'
                    ],
                    [
                        '7371051004', '737105', 'Malimongan Tua'
                    ],
                    [
                        '7371051005', '737105', 'Ende'
                    ],
                    [
                        '7371051006', '737105', 'Mampu'
                    ],
                    [
                        '7371051007', '737105', 'Malimongan'
                    ],
                    [
                        '7371051008', '737105', 'Melayu Baru'
                    ],
                    [
                        '7371061001', '737106', 'Malimongan Baru'
                    ],
                    [
                        '7371061002', '737106', 'Wajo Baru'
                    ],
                    [
                        '7371061003', '737106', 'Gaddong'
                    ],
                    [
                        '7371061004', '737106', 'Bontoala'
                    ],
                    [
                        '7371061005', '737106', 'Baraya'
                    ],
                    [
                        '7371061006', '737106', 'Layang'
                    ],
                    [
                        '7371061007', '737106', 'Parang Layang'
                    ],
                    [
                        '7371061008', '737106', 'Bontoala Tua'
                    ],
                    [
                        '7371061009', '737106', 'Bontoala Parang'
                    ],
                    [
                        '7371061010', '737106', 'Tompo Balang'
                    ],
                    [
                        '7371061011', '737106', 'Bunga Ejaya'
                    ],
                    [
                        '7371061012', '737106', 'Timungan Lompoa'
                    ],
                    [
                        '7371071001', '737107', 'Pannampu'
                    ],
                    [
                        '7371071002', '737107', 'Kalukuang'
                    ],
                    [
                        '7371071003', '737107', 'Kaluku Bodoa'
                    ],
                    [
                        '7371071004', '737107', 'Rappojawa'
                    ],
                    [
                        '7371071005', '737107', 'Rappokalling'
                    ],
                    [
                        '7371071006', '737107', 'Lakkang'
                    ],
                    [
                        '7371071007', '737107', 'Tallo'
                    ],
                    [
                        '7371071008', '737107', 'Lalatang'
                    ],
                    [
                        '7371071009', '737107', 'Wala-Walaya'
                    ],
                    [
                        '7371071010', '737107', 'Tammua'
                    ],
                    [
                        '7371071011', '737107', 'Buloa'
                    ],
                    [
                        '7371071012', '737107', 'Suangga'
                    ],
                    [
                        '7371071013', '737107', 'Ujung Pandang Baru'
                    ],
                    [
                        '7371071014', '737107', 'Lembo'
                    ],
                    [
                        '7371071015', '737107', 'Bunga Eja Beru'
                    ],
                    [
                        '7371081002', '737108', 'Tabaringan'
                    ],
                    [
                        '7371081003', '737108', 'Patingalloang'
                    ],
                    [
                        '7371081004', '737108', 'Gusung'
                    ],
                    [
                        '7371081005', '737108', 'Cambaya'
                    ],
                    [
                        '7371081006', '737108', 'Ujung Tanah'
                    ],
                    [
                        '7371081009', '737108', 'Totaka'
                    ],
                    [
                        '7371081010', '737108', 'Tamalabba'
                    ],
                    [
                        '7371081011', '737108', 'Camba Berua'
                    ],
                    [
                        '7371081012', '737108', 'Patingalloang Baru'
                    ],
                    [
                        '7371091001', '737109', 'Karuwisi'
                    ],
                    [
                        '7371091002', '737109', 'Panaikang'
                    ],
                    [
                        '7371091003', '737109', 'Tello Baru'
                    ],
                    [
                        '7371091004', '737109', 'Pampang'
                    ],
                    [
                        '7371091005', '737109', 'Karampuang'
                    ],
                    [
                        '7371091006', '737109', 'Tamamaung'
                    ],
                    [
                        '7371091007', '737109', 'Masale'
                    ],
                    [
                        '7371091008', '737109', 'Pandang'
                    ],
                    [
                        '7371091009', '737109', 'Karuwisi Utara'
                    ],
                    [
                        '7371091010', '737109', 'Sinrijala'
                    ],
                    [
                        '7371091011', '737109', 'Paropo'
                    ],
                    [
                        '7371101001', '737110', 'Barombong'
                    ],
                    [
                        '7371101002', '737110', 'Maccini Sombala'
                    ],
                    [
                        '7371101003', '737110', 'Jongaya'
                    ],
                    [
                        '7371101004', '737110', 'Mangasa'
                    ],
                    [
                        '7371101005', '737110', 'Bongaya'
                    ],
                    [
                        '7371101006', '737110', 'Balang Baru'
                    ],
                    [
                        '7371101007', '737110', 'Mannuruki'
                    ],
                    [
                        '7371101008', '737110', 'Pabaeng-Baeng'
                    ],
                    [
                        '7371101009', '737110', 'Parang Tambung'
                    ],
                    [
                        '7371101010', '737110', 'Tanjung Merdeka'
                    ],
                    [
                        '7371101011', '737110', 'Bonto Duri'
                    ],
                    [
                        '7371111001', '737111', 'Paccerakkang'
                    ],
                    [
                        '7371111002', '737111', 'Daya'
                    ],
                    [
                        '7371111003', '737111', 'Pai'
                    ],
                    [
                        '7371111004', '737111', 'Bulurokeng'
                    ],
                    [
                        '7371111005', '737111', 'Sudiang'
                    ],
                    [
                        '7371111006', '737111', 'Sudiang Raya'
                    ],
                    [
                        '7371111007', '737111', 'Untia'
                    ],
                    [
                        '7371111008', '737111', 'Laikang'
                    ],
                    [
                        '7371111009', '737111', 'Berua'
                    ],
                    [
                        '7371111010', '737111', 'Katimbang'
                    ],
                    [
                        '7371111011', '737111', 'Bakung'
                    ],
                    [
                        '7371121001', '737112', 'Manggala'
                    ],
                    [
                        '7371121002', '737112', 'Bangkala'
                    ],
                    [
                        '7371121003', '737112', 'Tamangapa'
                    ],
                    [
                        '7371121004', '737112', 'Antang'
                    ],
                    [
                        '7371121005', '737112', 'Batua'
                    ],
                    [
                        '7371121006', '737112', 'Borong'
                    ],
                    [
                        '7371121007', '737112', 'Biring Romang'
                    ],
                    [
                        '7371121008', '737112', 'Bitowa '
                    ],
                    [
                        '7371131001', '737113', 'Tidung'
                    ],
                    [
                        '7371131002', '737113', 'Kassi - Kassi'
                    ],
                    [
                        '7371131003', '737113', 'Mappala'
                    ],
                    [
                        '7371131004', '737113', 'Buakana'
                    ],
                    [
                        '7371131005', '737113', 'Bonto Makkio'
                    ],
                    [
                        '7371131006', '737113', 'Rappocini'
                    ],
                    [
                        '7371131007', '737113', 'Balla Parang'
                    ],
                    [
                        '7371131008', '737113', 'Banta-Bantaeng'
                    ],
                    [
                        '7371131009', '737113', 'Karunrung'
                    ],
                    [
                        '7371131010', '737113', 'Gunung Sari'
                    ],
                    [
                        '7371131011', '737113', 'Minasa Upa'
                    ],
                    [
                        '7371141001', '737114', 'Tamalanrea'
                    ],
                    [
                        '7371141002', '737114', 'Kapasa'
                    ],
                    [
                        '7371141003', '737114', 'Tamalanrea Indah'
                    ],
                    [
                        '7371141004', '737114', 'Parang Loe'
                    ],
                    [
                        '7371141005', '737114', 'Bira'
                    ],
                    [
                        '7371141006', '737114', 'Tamalanrea Jaya'
                    ],
                    [
                        '7371141007', '737114', 'Buntusu'
                    ],
                    [
                        '7371141008', '737114', 'Kapasa Raya'
                    ],
                    [
                        '7371151001', '737115', 'Barrang Caddi'
                    ],
                    [
                        '7371151002', '737115', 'Barrang Lompo'
                    ],
                    [
                        '7371151003', '737115', 'Kodingareng'
                    ],
                    [
                        '7372011004', '737201', 'Lompoe'
                    ],
                    [
                        '7372011005', '737201', 'Watang Bacukiki '
                    ],
                    [
                        '7372011009', '737201', 'Lemoe'
                    ],
                    [
                        '7372011010', '737201', 'Galung Maloang'
                    ],
                    [
                        '7372021001', '737202', 'Labukkang'
                    ],
                    [
                        '7372021002', '737202', 'Ujung Sabbang'
                    ],
                    [
                        '7372021003', '737202', 'Ujung Bulu'
                    ],
                    [
                        '7372021004', '737202', 'Lapadde'
                    ],
                    [
                        '7372021005', '737202', 'Mallusetasi'
                    ],
                    [
                        '7372031001', '737203', 'Lakessi'
                    ],
                    [
                        '7372031002', '737203', 'Ujung Baru'
                    ],
                    [
                        '7372031003', '737203', 'Watang Soreang'
                    ],
                    [
                        '7372031004', '737203', 'Kampung Pisang'
                    ],
                    [
                        '7372031005', '737203', 'Ujung Lare'
                    ],
                    [
                        '7372031006', '737203', 'Bukit Indah'
                    ],
                    [
                        '7372031007', '737203', 'Bukit Harapan'
                    ],
                    [
                        '7372041001', '737204', 'Kampung Baru'
                    ],
                    [
                        '7372041002', '737204', 'Cappa Galung'
                    ],
                    [
                        '7372041003', '737204', 'Lumpue'
                    ],
                    [
                        '7372041004', '737204', 'Tiro Sompe'
                    ],
                    [
                        '7372041005', '737204', 'Sumpang Minangae'
                    ],
                    [
                        '7372041006', '737204', 'Bumi Harapan'
                    ],
                    [
                        '7373011001', '737301', 'Tompotikka'
                    ],
                    [
                        '7373011002', '737301', 'Boting'
                    ],
                    [
                        '7373011003', '737301', 'Amasangan'
                    ],
                    [
                        '7373011005', '737301', 'Lagaligo'
                    ],
                    [
                        '7373011011', '737301', 'Dangerakko'
                    ],
                    [
                        '7373011012', '737301', 'Pajalesang'
                    ],
                    [
                        '7373021002', '737302', 'Batupasi'
                    ],
                    [
                        '7373021003', '737302', 'Sabbang Paru'
                    ],
                    [
                        '7373021005', '737302', 'Salobulo'
                    ],
                    [
                        '7373021007', '737302', 'Penggoli'
                    ],
                    [
                        '7373021008', '737302', 'Luminda'
                    ],
                    [
                        '7373021009', '737302', 'Pattene'
                    ],
                    [
                        '7373031001', '737303', 'Takkalala'
                    ],
                    [
                        '7373031002', '737303', 'Songka'
                    ],
                    [
                        '7373031006', '737303', 'Sampoddo'
                    ],
                    [
                        '7373031007', '737303', 'Binturu'
                    ],
                    [
                        '7373041002', '737304', 'Maroangin'
                    ],
                    [
                        '7373041003', '737304', 'Mancani'
                    ],
                    [
                        '7373041004', '737304', 'Sumarambu'
                    ],
                    [
                        '7373041005', '737304', 'Salubattang'
                    ],
                    [
                        '7373041006', '737304', 'Jaya'
                    ],
                    [
                        '7373041007', '737304', 'Batu Walenrang'
                    ],
                    [
                        '7373041008', '737304', 'Petonjangan'
                    ],
                    [
                        '7373051001', '737305', 'Surutanga'
                    ],
                    [
                        '7373051002', '737305', 'Benteng'
                    ],
                    [
                        '7373051003', '737305', 'Pontap'
                    ],
                    [
                        '7373051004', '737305', 'Malatunrung'
                    ],
                    [
                        '7373051005', '737305', 'Salekoe'
                    ],
                    [
                        '7373051006', '737305', 'Salotellue'
                    ],
                    [
                        '7373051007', '737305', 'Ponjalae'
                    ],
                    [
                        '7373061001', '737306', 'Tomarundung'
                    ],
                    [
                        '7373061002', '737306', 'Battang'
                    ],
                    [
                        '7373061003', '737306', 'Lebang'
                    ],
                    [
                        '7373061004', '737306', 'Battang Barat'
                    ],
                    [
                        '7373061005', '737306', 'Padang Lambe'
                    ],
                    [
                        '7373071001', '737307', 'Mawa'
                    ],
                    [
                        '7373071002', '737307', 'Purangi'
                    ],
                    [
                        '7373071003', '737307', 'Peta'
                    ],
                    [
                        '7373071004', '737307', 'Sendana'
                    ],
                    [
                        '7373081001', '737308', 'Mungkajang'
                    ],
                    [
                        '7373081002', '737308', 'Murante'
                    ],
                    [
                        '7373081003', '737308', 'Latuppa'
                    ],
                    [
                        '7373081004', '737308', 'Kambo'
                    ],
                    [
                        '7373091001', '737309', 'Temmalebba'
                    ],
                    [
                        '7373091002', '737309', 'Balandai'
                    ],
                    [
                        '7373091003', '737309', 'Rampoang'
                    ],
                    [
                        '7373091004', '737309', 'Tobulung'
                    ],
                    [
                        '7373091005', '737309', 'Buntu Datu'
                    ]
                ]
            ]
        ];

        return $wilayah;
    }
}
