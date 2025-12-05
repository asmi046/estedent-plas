@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="about_section">
        <div class="container">
            <x-breadcrumbs.main title="О нашей клинике"></x-breadcrumbs.main>
            <h1>О нашей клинике</h1>
        </div>
    </section>


@endsection

