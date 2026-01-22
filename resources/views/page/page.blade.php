@extends('layouts.all')

@section('main')
    <x-headers.page-header title="{{ $page['title'] }}"></x-headers.page-header>
    <section class="page_section">
        <div class="container text_styles">
            {!! $page['description'] !!}
        </div>
    </section>
@endsection
