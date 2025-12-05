@extends('layouts.all')

@section('main')
    <x-headers.page-header :image="asset('img/page_header_command.webp')" title="Специалисты"></x-headers.page-header>
    <section class="specialists_section">
        <div class="container">
            <div class="specialists_section_in_page">
                @foreach ($specialists as $item)
                    <x-cards.specialist :item="$item"></x-cards.specialist>
                @endforeach
            </div>
        </div>
    </section>
@endsection
