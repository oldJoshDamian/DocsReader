@extends('layouts.app')

@section('subtitle', ' | ' . $file->version() . ' - ' . $file->title())
@section('sendFileScript')
<script onload="
    sendFile(
    '{{ $file->title() }}',
    '{{ $file->version() }}',
    '{{ url('store.recentFiles') }}'
    )"
    src="{{ asset('js/store-recent-file.js') }}"></script>
@endsection

@section('content')
<div class="container py-3 px-3">
    <div class="tabs is-boxed">
        <ul>
            @foreach($all_docs as $doc)
            <li class="@if ($file->version() === $doc) is-active @endif">
                <a href="{{ url('documentation.file',
                    ['version' => extract_name($doc),
                    'title' => $file->title() ]) }}">
                    <span>{{ $doc }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="content mx-0">
        {{ $file->data() }}
    </div>
</div>
@endsection