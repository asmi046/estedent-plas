<div id="main_side_menue" class="side_menue_wrapper">
    <div class="shadow"></div>
    <nav class="side_menue">
        <div class="inner_wrapper">
            {{-- <x-burger-icon class="active_force"></x-burger-icon> --}}
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="Эстедент плюс">
            </a>
            <div class="main_menu_puncts">
                <x-menues.puncts></x-menues.puncts>
            </div>

        </div>
    </nav>
</div>

<div class="show_menue_button">
    <x-burger-icon></x-burger-icon>
</div>
