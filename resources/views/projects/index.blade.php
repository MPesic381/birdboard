@extends('layouts.app')

@section('content')
    <div style="display: flex; align-items: center">
        <h1 style="margin-right: auto">Birdboard</h1>
        <a href="{{ route('projects.create') }}">Create new</a>
    </div>
    <ul>
        @foreach($projects as $project)
            <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>
@endsection