@extends('layouts.app')
@section('content')
<h1 class="text-center">Online Document Viewer</h1>
@php
$viewer = strtolower(request()->input('viewer'));
$type = '';

if ($viewer == 'google') {
    $type = 'Google Docs';
} elseif ($viewer == 'microsoft') {
    $type = 'Microsoft Documents Viewer';
}

$file = strtolower(request()->input('file'));
$error = '';

if (!$file) {
    $error = 'Unrecognized viewer or file type';
}

$file_url = '';

switch ($viewer) {
    case 'google':
        $file_url = 'https://docs.google.com/viewer?embedded=true&url=';
        break;
    case 'microsoft':
        $file_url = 'https://view.officeapps.live.com/op/embed.aspx?src=';
        break;
    default:
        $file_url = '';
        break;
}

if (!$file_url) {
    $error = 'Unrecognized viewer or file type';
} else {
    $file_url = $file_url . 'https://github.com/romeoartista-toseph/doc-viewer/raw/master/resources/files/sample.' . $file;
}

@endphp
@if ($error)
<div class="alert alert-danger">{{ $error }}</div>
@else
<h2>Viewer: {{ $type }}</h2>
<h2>File: {{ $file }}</h2>
<a class="btn btn-primary mb-5" href="{{ route('index') }}">&lt;&lt; Back</a>
<div class="ratio ratio-1x1">
    <iframe src="{{ $file_url }}" allowfullscreen></iframe>
</div>
@endif
@endsection
