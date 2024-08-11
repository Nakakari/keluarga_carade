<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        {{-- <x-slot name="logo"> --}}
        <x-jet-authentication-card-logo />
        {{-- </x-slot> --}}

        <div class="w-full sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Dashboard</a>

                @endauth
            </div>
            <div>
                <h4><b>SELAMAT DATANG!</b></h4>
            </div>
            <div class="mt-4 text-gray-700 text-justify">
                Aplikasi Keluarga Cara'de merupakan survei pada Ibu Hamil, Remaja Putri, Anak Usia Sekolah Dasar, BADUTA
                dan
                CATIN untuk mencegah stunting, menciptakan Keluarga Cerdas, Aktif dan Empati.
            </div>
            <div class="flex items-center justify-end mt-4">


                <a href="{{ route('login') }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Log
                    in</a>

            </div>
        </div>
    </div>

</x-guest-layout>
