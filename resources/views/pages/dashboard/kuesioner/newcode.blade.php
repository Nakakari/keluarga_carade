@for ($i = 0; $i < count($data); $i++) <tr>
    <td class="text-center border border-slate-200 py-2">{{ $no++ }}</td>
    <td class="text-center border border-slate-200 py-2">{{ $data[$i]['nomor_kk'] }}</td>
    <td class="border border-slate-200 py-2 text-center">{{ $data[$i]['kuesioner'] }}%</td>
    <td class="border border-slate-200 py-2 text-center">{{ $data[$i]['pengetahuan'] }}%</td>
    <td class="border border-slate-200 py-2 text-center">
        @if ($data[$i]['kuesioner'] > 50 && $data[$i]['pengetahuan'])
        Keluarga Cara'de'
        @else
        Menuju Keluarga Cara'de'
        @endif
    </td>
    @if (Auth::user()->role == 'admin')
    <td class="border border-slate-200 py-2 text-center">
        <div class="flex gap-5 justify-center items-center">
            <!-- <a href="/kuesioner/{{ $data[$i]['nomor_kk'] }}/edit" class="font-semibold text-white rounded px-5 py-2 bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-600">Edit</a> -->
            <button type="button" class="btn-delete font-semibold text-white rounded px-4 py-2 bg-red-500 hover:bg-red-400 active:bg-red-600" data-nomor_kk="{{ $data[$i]['nomor_kk'] }}">Hapus</button>
        </div>
    </td>
    @endif
    </tr>
    @endfor