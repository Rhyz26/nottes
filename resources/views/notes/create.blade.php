@extends('layout')

@section('content')
<h1>Create Note</h1>
<form action="{{ route('notes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" class="form-control" rows="5">{{ old('content') }}</textarea>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('notes.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection