<div class="flex-col justify-center items-center top-0 left-0 right-0 w-full shadow overflow-x-hidden">
    <div class="flex justify-between items-center px-8 sm:px-20 py-2">
        <div>
            {{-- @if (Request::segment(3) != null)
                <img src="{{ asset('logo-jpg-removebg-preview.png') }}" alt="" class="w-20 h-20">
            @elseif (Request::segment(2) != null)
                <img src="../logo-jpg-removebg-preview.png" alt="" class="w-20 h-20">
            @else
                <img src="./logo-jpg-removebg-preview.png" alt="" class="w-20 h-20">
            @endif --}}
            <h4 style="padding:10px;"><b>{{ config('app.name', 'Laravel') }}</b></h4>
        </div>
        <div class="hidden md:block md:flex-col md:justify-center">
            <ul class="flex justify-center gap-6">
                <li><a href="/dashboard"
                        class="font-bold {{ $title === 'Dashboard' ? 'text-[#C44830]' : 'text-black' }}">Dashboard</a>
                </li>
                <li><a href="/data_keluarga"
                        class="font-bold {{ $title === 'Data Keluarga' || $title === 'Data Anggota Keluarga' ? 'text-[#C44830]' : 'text-black' }}">Data
                        Keluarga</a></li>
                <li><a href="{{ route('catin.index') }}"
                        class="font-bold {{ $title === 'Catin' ? 'text-[#C44830]' : 'text-black' }}">Catin
                    </a></li>
                <li><a href="/kuesioner"
                        class="font-bold {{ $title === 'Hasil Kuesioner' ? 'text-[#C44830]' : 'text-black' }}">Hasil
                        Kuesioner</a></li>
                @if (Auth::user()->roles == 'admin')
                    <li><a href="/data_user"
                            class="font-bold text-sm sm:text-base {{ $title === 'Data User' ? 'text-[#C44830]' : 'text-black' }}">Data
                            User</a></li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="nav-item">
                            <a class="nav-link font-bold text-black" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                        this.closest('form').submit(); "
                                role="button">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Log Out') }}
                            </a>
                        </div>
                    </form>
                </li>
            </ul>
        </div>

        <div class="block md:hidden">
            <button type="button" aria-expanded="false" id="btn-menu">
                <div class="aria-false">
                    @if (Request::segment(3) != null)
                        <img src="../../MenuAlt.png" alt="" class="w-7 h-7">
                    @elseif (Request::segment(2) != null)
                        <img src="../MenuAlt.png" alt="" class="w-7 h-7">
                    @else
                        <img src="./MenuAlt.png" alt="" class="w-7 h-7">
                    @endif
                </div>
                <div class="aria-true hidden">
                    @if (Request::segment(3) != null)
                        <img src="../../Menu.png" alt="" class="w-7 h-7">
                    @elseif (Request::segment(2) != null)
                        <img src="../Menu.png" alt="" class="w-7 h-7">
                    @else
                        <img src="./Menu.png" alt="" class="w-7 h-7">
                    @endif
                </div>
            </button>
        </div>
    </div>
</div>

<div class="absolute z-10 bg-[#71717A22] left-0 right-0 w-0 h-screen transition-all shadow overflow-x-hidden"
    id="mobile-menu-header">

</div>
<div class="absolute z-20 bg-white left-0 right-0 w-0 h-screen transition-all shadow overflow-x-hidden"
    id="mobile-menu">
    <ul class="flex flex-col gap-10 w-full px-10 sm:px-20 py-10 -ml-56 overflow-x-hidden">
        <li><a href="/dashboard"
                class="font-bold text-sm sm:text-base {{ $title === 'Dashboard' ? 'text-[#C44830]' : 'text-black' }}">Dashboard</a>
        </li>
        <li><a href="/data_keluarga"
                class="font-bold text-sm sm:text-base {{ $title === 'Data Keluarga' || $title === 'Data Anggota Keluarga' ? 'text-[#C44830]' : 'text-black' }}">Data
                Keluarga</a></li>
        <li><a href="/kuesioner"
                class="font-bold text-sm sm:text-base {{ $title === 'Hasil Kuesioner' ? 'text-[#C44830]' : 'text-black' }}">Hasil
                Kuesioner</a></li>
        @if (Auth::user()->roles == 'admin')
            <li><a href="/data_user"
                    class="font-bold text-sm sm:text-base {{ $title === 'Data User' ? 'text-[#C44830]' : 'text-black' }}">Data
                    User</a></li>
        @endif
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="nav-item">
                    <a class="nav-link font-bold text-sm sm:text-base text-black" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit(); "
                        role="button">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('Log Out') }}
                    </a>
                </div>
            </form>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function() {
        $('#btn-menu').click(function() {
            $(this).attr('aria-expanded', $(this).attr('aria-expanded') == 'true' ? 'false' : 'true')
            if ($(this).attr('aria-expanded') == 'true') {
                $(this).find('.aria-false').hide();
                $(this).find('.aria-true').show();
                $("#mobile-menu-header").removeClass('w-0').addClass('w-100');
                $("#mobile-menu").removeClass('w-0').addClass('w-[80%]');
                $("#mobile-menu ul").removeClass('-ml-56').addClass('ml-0');
            } else {
                $(this).find('.aria-false').show();
                $(this).find('.aria-true').hide();
                $("#mobile-menu-header").removeClass('w-100').addClass('w-0');
                $("#mobile-menu").removeClass('w-[80%]').addClass('w-0');
                $("#mobile-menu ul").removeClass('ml-0').addClass('-ml-56');
            }
        })
    })
</script>
