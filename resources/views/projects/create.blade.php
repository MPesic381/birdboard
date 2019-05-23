@extends('layouts.app')

@section('content')
    <form action="{{ route('projects.store') }}" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection