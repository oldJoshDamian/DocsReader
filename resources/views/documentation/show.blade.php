@extends('layouts.app')

@section('subtitle', ' | ' . $doc_version)
@section('content')
<div class="content py-4 px-4">
    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
                Laravel version: {{ $doc_version }}
            </p>
        </div>
        <div class="card-content">
            <div class="columns is-mobile mx-0 is-centered is-vcentered is-multiline">
                @foreach($files as $file)
                <a class="column is-6 is-block" href="{{ url('documentation.file', ['version' => extract_name($doc_version), 'title' => extract_name($file) ] ) }}">
                    <p>
                        {{ $file }}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection