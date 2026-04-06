@extends('layouts.all')

@section('main')
    <x-headers.page-header title="Акции и скидки нашей клиники"></x-headers.page-header>

    <section class="sales_list">
        <div class="container">
            <div class="sales_list_wrap">
                @foreach ($sales as $item)
                    <x-cards.sale :item="$item" />
                @endforeach
            </div>
        </div>
    </section>



    <x-main.cta-phone></x-main.cta-phone>
    <x-main.clinic></x-main.clinic>
    <x-main.specialists></x-main.specialists>
    <x-main.cert></x-main.cert>
@endsection
