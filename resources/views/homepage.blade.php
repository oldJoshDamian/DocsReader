@extends('layouts.app')

@section('content')
<div class="content py-4 px-4">
    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
                Available Laravel Documentation Versions:
            </p>
        </div>
        <div class="py-4">
            <div class="columns is-mobile is-multiline mx-0 is-vcentered is-centered">
                @foreach($documentations as $documentation)
                <div class="column @if(count($documentations) > 1 ) is-6 @endif">
                    @if($loop->first)
                    <div class="px-2 py-2 has-background-danger">
                        <p class="title has-text-white is-6">
                            Latest version
                        </p>
                    </div>
                    @endif
                    <a href="{{ url('documentation.show', ['version' => extract_name($documentation)]) }}">
                        <p style="font-size: @if(count($documentations) > 1 ) 80px @else 130px @endif;" class="title py-2 px-2 card has-text-centered">
                            {{ $documentation }}
                        </p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
                Recent Files: {{ count(recentFiles()) }}
            </p>
        </div>
        <div class="card-content">
            <div class="columns is-mobile mx-0 is-centered is-vcentered is-multiline">
                @foreach(recentFiles() as $file)
                <a class="column is-6 is-block" href="{{ url('documentation.file', ['version' => extract_name($file->version()), 'title' => $file->title() ] ) }}">
                    <p>
                        {{ $file->filename() }} ({{ $file->version() }})
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection