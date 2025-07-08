@extends('layout')

@section('content')
<h1>Notes</h1>
@if ($notes->isEmpty())
<p>No notes found.</p>
@else
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
        <tr>
            <td>{{ $note->title }}</td>
            <td>{{ \Illuminate\Support\Str::limit($note->content, 50) }}</td>
            <td>{{ $note->created_at->format('Y-m-d H:i') }}</td>
            <td>
                <a href="{{ route('notes.show', $note) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection