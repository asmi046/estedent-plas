@extends('layouts.all')

@section('main')
    <x-headers.page-header title="Правовая информация"></x-headers.page-header>
    <section class="page_section">
        <div class="container">
            <div class="legal_documents_list">
                @foreach ($documents as $item)
                    @if ($item['file'])
                        <a href="{{ Storage::url($item['file']) }}" class="legal_document_item" target="_blank">
                            {{ $item['name'] }}
                        </a>
                    @elseif ($item['link'])
                        <a href="{{ $item['link'] }}" class="legal_document_item" target="_blank">
                            {{ $item['name'] }}
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
