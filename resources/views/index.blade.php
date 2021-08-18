@extends('layouts.app')
@section('content')
<h1 class="text-center">Online Document Viewer</h1>
<div class="card mb-5">
    <div class="card-header">Google Docs Viewer</div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'google', 'file' => 'docx']) }}">.docx File</a></li>
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'google', 'file' => 'pdf']) }}">.pdf File</a></li>
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'google', 'file' => 'pptx']) }}">.pptx File</a></li>
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'google', 'file' => 'xlsx']) }}">.xlsx File</a></li>
    </ul>
</div>
<div class="card">
    <div class="card-header">Microsoft Documents Viewer</div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'microsoft', 'file' => 'docx']) }}">.docx File</a></li>
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'microsoft', 'file' => 'pdf']) }}">.pdf File</a></li>
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'microsoft', 'file' => 'pptx']) }}">.pptx File</a></li>
        <li class="list-group-item"><a href="{{ route('viewer', ['viewer' => 'microsoft', 'file' => 'xlsx']) }}">.xlsx File</a></li>
    </ul>
</div>
@endsection
