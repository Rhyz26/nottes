```html
@extends('layout')

@section('content')
<h1>{{ $note->title }}</h1>
<p>{{ $note->content }}</p>
<p><strong>Created At:</strong> {{ $note->created_at->format('Y-m-d H:i') }}</p>
<p><strong>Updated At:</strong> {{ $note->updated_at->format('Y-m-d H:i') }}</p>
<a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
<a href="{{ route('notes.edit', $note) }}" class="btn btn-warning">Edit</a>
@endsection